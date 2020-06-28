<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class pelamar extends Controller
{
    public function getDataUser(){
        $client = new Client();
       /* $token = Session::get('token');*/
        $headers = [
          /*  'Authorization' => 'Bearer ' . $token, */       
            'Accept'        => 'application/json',
        ];
        $response = $client->request('GET', ENV('API').'pengguna', [
            'headers' => $headers
        ]);
        $responseData = json_decode($response->getBody()->getContents(),true);
        return $responseData;
    }

    public function getDataPerusahaan(Request $request)
    {
        echo $request->id;
    }
    public function lowonganPost(Request $request){
        /*$this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');*/
        $client = new Client();
        $request['pil'] = 2;
        $url = ENV('API').'pengguna';
       /* $token = Session::get('token');*/
        $headers = [
          /*  'Authorization' => 'Bearer ' . $token, */       
            'Accept'        => 'application/json',
        ];
        try{
            $responseData = $client->request('GET',$url,[
                'headers' => $headers,
                'json' =>  $request->all()
            ]);
            $responseData = json_decode($responseData->getBody()->getContents(),true);
            return redirect('listpelamar')->with('message','nih listnya kontol');
        }catch(\Exception $e){
            return redirect('listpelamar')->with('message','data salah');
        };
    }
}
