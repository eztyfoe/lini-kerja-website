<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class listpelamar extends Controller
{
    public function show( Request $request )
    {
        // $client = new Client();
        // $url = 'http://pkyuk.com/jkt/services/api/Perusahaan?pil=6&id_lowongan=';
        // try {
        //     $request = $client->get($url);
        //     $response = json_decode($request->getBody());
        //     return view('listpelamar',compact('response'));
        //     echo $response; 
        //     } catch (\Exception $e){
        //             return "Ada yg salah - ";
        //             return view('listpelamar')->with($response);
        //     }
            return view('list_pelamar');
    }

    public function index( Request $request)
    {
        $client = new Client();
        $url = 'http://pkyuk.com/jkt/services/api/Perusahaan?pil=6&id_lowongan='.$request->id;
        dd($request->id); die();
        // $request = $client->get($url);
        // $response = json_decode($request->getBody());
        // return view('listpelamar',['response' => $response]);
            
        // return view('list_pelamar');


        // try {
        
            $request = $client->get($url);
            $response = json_decode($request->getBody());
            // return redirect('search_perusahaan')->with(['response',$response]); //
            return view('list_pelamar',compact('response'));
            // echo json_decode($response, true);
            echo $response; 
            // } catch (\Exception $e){
            //         return "Ada yg salah - ";
            //         return redirect ('list_pelamar')->with($response);
            
        // }
    }

    // public function index( Request $request)
    // {
    //     $request['pil'] = 6;
    //     $client = new Client();
    //     $url = ENV('API').'Perusahaan'.$request->id;
        
    //     // $request = $client->get($url);
    //     // $response = json_decode($request->getBody());
    //     // return view('listpelamar',['response' => $response]);
            
    //     // return view('list_pelamar');


    //     try {
        
    //         $request = $client->get($url);
    //         $response = json_decode($request->getBody());
    //         // return redirect('search_perusahaan')->with(['response',$response]); //
    //         return view('list_pelamar',compact('response'));
    //         // echo json_decode($response, true);
    //         echo $response; 
    //         } catch (\Exception $e){
    //                 return "Ada yg salah - ";
    //                 return redirect ('list_pelamar')->with($response);
            
    //     }
    // }

}