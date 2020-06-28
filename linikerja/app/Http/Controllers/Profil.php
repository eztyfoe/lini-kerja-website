<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Profil extends Controller
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

    public function viewData()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);

            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);
            return view('profil' . '/view')
                ->with(['responseData' => $responseData, ]);
        }
    }

    public function openFormData()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                        $list_jenis = $client->request('GET', ENV('API') . 'Perusahaan?pil=3', ['headers' => $headers]);
			            $list_jenis = json_decode($list_jenis->getBody()
                ->getContents() , true);

            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);
            // // echo $responseData;
            // print_r($responseData);
            return view('profil' . '/edit')
                ->with(['responseData' => $responseData, 'list_jenis' => $list_jenis]);
        }
    }


    public function updateData(Request $request)
    {
        $client = new Client();

        $request['pil'] = '2';

        $url = ENV('API') . 'perusahaan';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('myProfile')
                ->with('message', 'Berhasil mengubah data');
        }
        catch(\Exception $e)
        {
            return redirect('editProfile')
            ->with('message', 'error messages: ' . $e);
        };
    }

    public function updatePhoto(Request $request)
    {
        $client = new Client();

        $request['pil'] = '8';

        $url = ENV('API') . 'Pengguna';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('myProfile')
                ->with('message', 'Berhasil mengubah foto profil');
        }
        catch(\Exception $e)
        {
            return redirect('editProfile')
            ->with('message', 'error messages: ' . $e);
        };
    }

    public function legality()
    {
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            $client = new Client();

            $headers = [
            'Accept' => 'application/json', ];

            $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=4', ['headers' => $headers]);

            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);
            // // echo $responseData;
            // print_r($responseData);
            return view('profil' . '/legality')
            ->with(['responseData' => $responseData, 
            ]);
        }
    }

    public function postLegality(Request $request)
    {
        $client = new Client();

        $request['pil'] = '6';

        $url = ENV('API') . 'perusahaan';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('myProfile')
                ->with('message', 'Berhasil mengirim berkas');
        }
        catch(\Exception $e)
        {
            return redirect('editProfile')
            ->with('message', 'error messages: ' . $e);
        };
    }
}

