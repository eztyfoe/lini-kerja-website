<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class search extends Controller
{
    
    public function searchp(){
        $client = new Client();
        $url = 'http://pkyuk.com/jkt/services/api/perusahaan?pil=2&search=';
        // try {
            
        $request = $client->get($url);
        $response = json_decode($request->getBody());
        return view('search_perusahaan',['response' => $response]);
    }
    
public function searchPerusahaan(Request $request)
{
        $client = new Client();
        $url = 'http://pkyuk.com/jkt/services/api/perusahaan?pil=2&search='.$request->id;
    try {
        
    $request = $client->get($url);
    $response = json_decode($request->getBody());
    // return redirect('search_perusahaan')->with(['response',$response]); //
    return view('search_perusahaan',compact('response'));
    // echo json_decode($response, true);
    echo $response; 
    } catch (\Exception $e){
            return "Ada yg salah - ";
            return redirect ('search_perusahaan')->with($response);
    }
    
}
}
