<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;
class Lowongan extends Controller
{
    public function __construct()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        }

    }
    
    public function index()
    {
        /* if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home_user');
        }*/
    }

    public function viewData()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
        
                $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=10&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
        
                $responseData = json_decode($responseData->getBody()
                    ->getContents() , true);
                return view('lowongan' . '/view')
                    ->with(['responseData' => $responseData, ]);
            } catch (\Throwable $th) {
                return view('lowongan' . '/view')
                    ->with(['responseData' => null, ]);
            }
        }
    }

    public function viewDataDetail(Request $request)
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            try
            {
                $response_pelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=6&id_lowongan=' . $request->id, ['headers' => $headers]);
                $response_lowongan = $client->request('GET', ENV('API') . 'Pelamar?pil=1&id_lowongan=' . $request->id, ['headers' => $headers]);
                $res_last = $client->request('GET', ENV('API') . 'Perusahaan?pil=18&id_lowongan=' . $request->id, ['headers' => $headers]);
                $response_pelamar = json_decode($response_pelamar->getBody()
                    ->getContents() , true);
                $response_lowongan = json_decode($response_lowongan->getBody()
                    ->getContents() , true);
                $res_last = json_decode($res_last->getBody()
                        ->getContents() , true);
                return view('lowongan' . '/detail')
                    ->with(['responseDataPelamar' => $response_pelamar, 
                    'responseDataLowongan' => $response_lowongan, 
                    'responseLastResult' => $res_last, 
                    'id_lowongan' => $request->id, 
                    ]);
            }
            catch(\Exception $e)
            {
                $response_pelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=6&id_lowongan=' . $request->id, ['headers' => $headers]);
                $response_pelamar = json_decode($response_pelamar->getBody()
                    ->getContents() , true);
                $response_lowongan = $client->request('GET', ENV('API') . 'Pelamar?pil=1&id_lowongan=' . $request->id, ['headers' => $headers]);
                $response_lowongan = json_decode($response_lowongan->getBody()
                    ->getContents() , true);
                return view('lowongan' . '/detail')
                    ->with(['responseDataPelamar' => $response_pelamar, 
                    'responseDataLowongan' => $response_lowongan,
                    'responseLastResult' => null, 
                    'id_lowongan' => $request->id, ]);
            }
        }
    }

    public function openFormAddData()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            $response = $client->request('GET', ENV('API') . 'Perusahaan?pil=9', ['headers' => $headers]);
            $response_jenis_perusahaan = $client->request('GET', ENV('API') . 'Perusahaan?pil=8', ['headers' => $headers]);

            $responseData = json_decode($response->getBody()
                ->getContents() , true);
            $responseDatajenisperusahaan = json_decode($response_jenis_perusahaan->getBody()
                ->getContents() , true);
            return view('lowongan' . '/add')
                ->with(['responseData' => $responseData, 'responseDatajenisperusahaan' => $responseDatajenisperusahaan]);
        }
    }

    public function openFormData(Request $request)
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            $response = $client->request('GET', ENV('API') . 'Perusahaan?pil=9', ['headers' => $headers]);
            $response_jenis_perusahaan = $client->request('GET', ENV('API') . 'Perusahaan?pil=8', ['headers' => $headers]);
            $response_lowongan = $client->request('GET', ENV('API') . 'Pelamar?pil=1&id_lowongan=' . $request->id, ['headers' => $headers]);

            $responseData = json_decode($response->getBody()
                ->getContents() , true);
            $responseDatajenisperusahaan = json_decode($response_jenis_perusahaan->getBody()
                ->getContents() , true);
            $response_lowongan = json_decode($response_lowongan->getBody()
                ->getContents() , true);
            return view('lowongan' . '/edit')
                ->with(['responseData' => $responseData, 'responseDatajenisperusahaan' => $responseDatajenisperusahaan, 'responseDataLowongan' => $response_lowongan, ]);
        }
    }

    public function insertData(Request $request)
    {
        $client = new Client();

        $request['pil'] = '1';

        $url = ENV('API') . 'perusahaan';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('lowongan')
                ->with('message', 'berhasil menambah data');
        }
        catch(\Exception $e)
        {
            return redirect('lowongan')
            ->with('message', 'error messages: ' . $e);
        };
    }

    public function updateData(Request $request)
    {
        $client = new Client();

        $request['pil'] = '3';

        $url = ENV('API') . 'perusahaan';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('lowongan')
                ->with('message', 'berhasil mengubah data');
        }
        catch(\Exception $e)
        {
            return redirect('lowongan')
            ->with('message', 'error messages: ' . $e);
        };
    }
}

