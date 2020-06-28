<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use DB;
class Administrator extends Controller
{
    public function __construct(){}
    
    public function index(){}

    public function openFormData(Request $request)
    {
        if (Session::get('id_admin') == '') {
            return view('admin' . '/dashboard');
        } else {
            return view('admin' . '/dashboard');
        }
    }

    public function dashboard() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                // $client = new Client();

                // $headers = [
                // 'Accept' => 'application/json', ];
    
                // $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=3', ['headers' => $headers]);
    
                // $responseData = json_decode($responseData->getBody()
                //             ->getContents() , true);
                // $title = "Sertifikat";
                return view('admin/dashboard' . '');
                    // ->with([    'responseData' => $responseData, 
                    //             'title' => $title, 
                    // ]);
            } catch (\Throwable $th) {
                
            }           
        }
    }

    public function sertifikat() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=3', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Sertifikat";
                return view('admin/sertifikat' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                    ]);
            } catch (\Throwable $th) {
                
            }           
        }
    }

    public function sertifikatAll() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=3', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Sertifikat";
                $isAll = "1";
                return view('admin/sertifikat' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                                'isAll' => $isAll, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }    

    public function nilai() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=1', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Nilai";
                return view('admin/pendidikan' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }

    public function nilaiAll() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=1', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Nilai";
                $isAll = "1";
                return view('admin/pendidikan' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                                'isAll' => $isAll, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }

    public function pengalaman() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=2', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Pengalaman";
                return view('admin/pengalaman' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }

    public function pengalamanAll() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=2', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                $title = "Pengalaman";
                $isAll = "1";
                return view('admin/pengalaman' . '/view')
                    ->with([    'responseData' => $responseData, 
                                'title' => $title, 
                                'isAll' => $isAll, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }

    public function postVerify(Request $request) {
        $client = new Client();

        $request['pil'] = '9';

        $url = ENV('API') . 'Pelamar';

        $headers = [
            'Accept' => 'application/json', 
        ];

        // \print_r($request);
        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect($request['halaman'])
                ->with('alert-success', 'berhasil mem-verifikasi berkas');
        }
        catch(\Exception $e)
        {
            return redirect($request['halaman'])
            ->with('message', 'error messages: ' . $e);
        };        
    }

    public function perusahaan() {
        if (Session::get('id_admin') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Pelamar?pil=8&tipe_dokumen=4', ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                            ->getContents() , true);
                // $responseData = $responseData->reverse();
                $title = "Perusahaan";
                return view('admin/perusahaan' . '/view')
                    ->with([    'responseData' => $responseData,
                                'title' => $title, 
                    ]);
            } catch (\Throwable $th) {
                
            }            
        }
    }
}