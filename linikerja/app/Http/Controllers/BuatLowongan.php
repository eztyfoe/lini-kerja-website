<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;
class BuatLowongan extends Controller
{
    public function index()
    {
        /* if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home_user');
        }*/
    }
    public function getDataUser()
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        $response = $client->request('GET', ENV('API') . 'perusahaan', ['headers' => $headers]);
        $responseData = json_decode($response->getBody()
            ->getContents() , true);
        return $responseData;
    }

    public function daftar_lowongan(Request $request)
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        $response = $client->request('GET', ENV('API') . 'Perusahaan?pil=9', ['headers' => $headers]);
        $response_jenis_perusahaan = $client->request('GET', ENV('API') . 'Perusahaan?pil=8', ['headers' => $headers]);
        $responseData = json_decode($response->getBody()
            ->getContents() , true);
        $responseDatajenisperusahaan = json_decode($response_jenis_perusahaan->getBody()
            ->getContents() , true);
        //return $responseDatajenisperusahaan;
        //return $responseData;
        return view('daftar_lowongan')
            ->with(['responseData' => $responseData, 'responseDatajenisperusahaan' => $responseDatajenisperusahaan]);
    }

    public function editlowongan(Request $request)
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
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
        //return $responseDatajenisperusahaan;
        //return $responseData;
        return view('edit_lowongan')
            ->with(['responseData' => $responseData, 'responseDatajenisperusahaan' => $responseDatajenisperusahaan, 'responseDataLowongan' => $response_lowongan, ]);
    }

    public function viewlowongan()
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        try
        {
            $response = $client->request('GET', ENV('API') . 'Perusahaan?pil=10&id_perusahaan=' . Session::get('id') , ['headers' => $headers]);
            $responseData = json_decode($response->getBody()
                ->getContents() , true);
            //return $responseDatajenisperusahaan;
            //return $responseData;
            return view('viewlowongan')
                ->with(['responseData' => $responseData, ]);
        }
        catch(\Exception $e)
        {
            return view('viewlowongan')->with(['responseData' => null, ]);
        }
    }

    public function detaillowongan(Request $request)
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];

        try
        {
            $response_pelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=6&id_lowongan=' . $request->id, ['headers' => $headers]);
            $response_lowongan = $client->request('GET', ENV('API') . 'Pelamar?pil=1&id_lowongan=' . $request->id, ['headers' => $headers]);
            $response_pelamar = json_decode($response_pelamar->getBody()
                ->getContents() , true);
            $response_lowongan = json_decode($response_lowongan->getBody()
                ->getContents() , true);
            //return $responseDatajenisperusahaan;
            //return $responseData;
            return view('detaillowongan')
                ->with(['responseDataPelamar' => $response_pelamar, 'responseDataLowongan' => $response_lowongan, 'id_lowongan' => $request->id, ]);
        }
        catch(\Exception $e)
        {
            $response_lowongan = $client->request('GET', ENV('API') . 'Pelamar?pil=1&id_lowongan=' . $request->id, ['headers' => $headers]);
            $response_lowongan = json_decode($response_lowongan->getBody()
                ->getContents() , true);
            //return $responseDatajenisperusahaan;
            //return $responseData;
            return view('detaillowongan')
                ->with(['responseDataPelamar' => null, 'responseDataLowongan' => $response_lowongan, 'id_lowongan' => $request->id, ]);
        }
    }

    public function lowonganPost(Request $request)
    {
        $client = new Client();
        $request['pil'] = '1';
        /*return $request->all();*/
        $url = ENV('API') . 'perusahaan';
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        //$data = $request->all();
        //return $data;
        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);
            /*return $responseData;*/
            return redirect('viewlowongan')
                ->with('message', 'anda berhasil membuat lowongan');
        }
        catch(\Exception $e)
        {
            return redirect('daftar_lowongan')->with('message', 'error karena:' . $e);
        };
    }

    public function show($id)
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        $response = $client->request('GET', ENV('API') . 'Perusahaan?pil=7' . $id, ['headers' => $headers]);
        $responseData = json_decode($response->getBody()
            ->getContents() , true);
        /*$city = DB::table('kabupaten')->where('id',$responseData['Data']['kota_id'])->first();*/

        return view('indexlowongan', ['items' => $responseData['Data'],
        /*'city' => $city*/
        ]);

    }

}

