<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;

class Bobot extends Controller
{
    public function index()
    {
        //
    }

    public function getDataUser()
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
            /*  'Authorization' => 'Bearer ' . $token, */

            'Accept' => 'application/json',
        ];
        $response = $client->request('GET', ENV('API') . 'Dss', [
            'headers' => $headers,
        ]);
        $responseData = json_decode($response->getBody()->getContents(), true);
        return $responseData;
    }

    public function isi_bobot(Request $request)
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();
            /* $token = Session::get('token');*/
            $headers = [
                /*  'Authorization' => 'Bearer ' . $token, */

                'Accept' => 'application/json',
            ];
            // $response = $client->request('GET', ENV('API').'Perusahaan?pil=11', [
            //     'headers' => $headers
            // ]);
            /*$response_id_lowongan = $client->request('GET', ENV('API').'Dss?pil=1', [
                'headers' => $headers
            ]);*/
            /* $responseDataidlowongan = json_decode($response_id_lowongan->getBody()->getContents(),true);*/
            //return $responseDatajenisperusahaan;
            //return $responseData;
            // return view('bobot')->with([
            //     'id_lowongan' => $request->id,
            //     /*'responseDataidlowongan' => $responseDataidlowongan*/
            // ]);
            
            return view('lowongan/dss' . '/weight')
                ->with(['id_lowongan' => $request->id, ]);
        }
    }

    public function resultdss(Request $request)
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();
            /* $token = Session::get('token');*/
            $headers = [
                /*  'Authorization' => 'Bearer ' . $token, */

                'Accept' => 'application/json',
            ];
            $response_pelamar = $client->request('GET', ENV('API') . 'Dss?pil=2&id_dss=' . $request->id, [
                'headers' => $headers,
            ]);
            $response_pelamar = json_decode($response_pelamar->getBody()->getContents(), true);
            //return $responseDatajenisperusahaan;
            //return $responseData;
            // return view('resultdss')->with([
            //     'responseData' => $response_pelamar,
            // ]);
            
            return view('lowongan/dss' . '/result')
                ->with(['responseData' => $response_pelamar, ]);
        }
    }

    public function bobotPost(Request $request)
    {
        $client = new Client();
        $request['pil'] = 1;
        /*return $request->all();*/
        $url = ENV('API') . 'Dss';
        /* $token = Session::get('token');*/
        $headers = [
            /*  'Authorization' => 'Bearer ' . $token, */

            'Accept' => 'application/json',
        ];
        //$data = $request->all();
        //return $data;
        try {
            $responseData = $client->request('POST', $url, [
                'headers' => $headers,
                'json' => $request->all(),
            ]);
            $responseData = json_decode($responseData->getBody()->getContents(), true);

            $request['pil'] = '4';
            $request['status'] = '3';
            $setTo3 = $client->request('POST', ENV('API') . 'perusahaan', ['headers' => $headers, 'json' => $request->all() ]);

            return redirect('resultdss?id=' . $responseData)
                ->with(['message', 'Sistem Pendukung Keputusan Berhasil!', ]);
        } catch (\Exception $e) {
            return redirect('dss')->with('message', 'error karena:' . $e);
        }
    }

    public function sendPelamar(Request $request) 
    {
        $client = new Client();

        $request['pil'] = '4';

        $url = ENV('API') . 'perusahaan';

        $headers = [
        'Accept' => 'application/json', ];

        if ($request['status'] == 2) {
            $msg = "terpilih";
        } else {
            $msg = "terhapus";
        }        

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('resultdss?id='.$request['id_dss'])
                ->with('alert-success', 'pelamar berhasil '.$msg);
        }
        catch(\Exception $e)
        {
            return redirect('resultdss?id='.$request['id_dss'])
            ->with('message', 'error messages: ' . $e);
        };
    }

    public function endDSS(Request $request) 
    {
        $client = new Client();
        $headers = [
            'Accept' => 'application/json', 
        ];

        try {
            $response_pelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=6&id_lowongan=' . $request['id_lowongan'], ['headers' => $headers]);            
            $response_pelamar = json_decode($response_pelamar->getBody()
                ->getContents() , true);

            print_r($response_pelamar);
            foreach ($response_pelamar as $key => $value) {
                $request['pil'] = '4';
                $url = ENV('API') . 'perusahaan';

                if ($value['status_lamaran'] == '2') {
                    $request['id_lowongan'] = $value['id_lowongan'] ;
                    $request['id_pelamar'] = $value['id_pelamar'] ;
                    $request['status'] = '4';
                    $setTo4 = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
                    echo '4';
                } else {
                    $request['id_lowongan'] = $value['id_lowongan'] ;
                    $request['id_pelamar'] = $value['id_pelamar'] ;
                    $request['status'] = '5';
                    $setTo5 = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
                    echo '5';
                }
            }

            return redirect('detailLowongan?id='.$request['id_lowongan'])
                ->with('alert-success', 'berhasil menyelesaikan perhitungan');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
