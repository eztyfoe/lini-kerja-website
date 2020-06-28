<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class User extends Controller
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
    public function checkLogin()
    {
        if (Session::get('id') != '') {
            return true;
        } else {
            return false;
        }
        
    }
    public function getDataUser()
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        $response = $client->request('GET', ENV('API') . 'pengguna', ['headers' => $headers]);
        $responseData = json_decode($response->getBody()
            ->getContents() , true);
        return $responseData;
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        /*$username = $request->username;
        $password = $request->password;
        
        $data = ModelUser::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau User Name, Salah !');
            }
        }
        else{di
            return redirect('login')->with('alert','Password atau User Name, Salah!');
        }*/
        $client = new Client();
        $request['pil'] = 1;
        $url = ENV('API') . 'pengguna';
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            if ($responseData['role'] == '2') {
                Session::put('email', $responseData['email']);
                Session::put('id', $responseData['id_perusahaan']);
                Session::put('username', $responseData['username']);
                // return redirect('home_user?id=' . $responseData['id_perusahaan']);
                return redirect('dashboard');
            } else if ($responseData['role'] == '0') {
                Session::put('email', $responseData['email']);
                Session::put('id', $responseData['id_pengguna']);
                Session::put('id_admin', $responseData['id_pengguna']); 
                Session::put('username', $responseData['username']);
                // return redirect('home_user?id=' . $responseData['id_perusahaan']);
                return redirect('adminDashboard');
            } else {
                return redirect('login')->with('message', 'username/password tidak ditemukan ');
            }
        }
        catch(\Exception $e)
        {
            return redirect('login')->with('message', 'username/password tidak ditemukan ');
        };
    }

    // public function home_user(Request $request)
    // {
    //     $client = new Client();
    //     /* $token = Session::get('token');*/
    //     $headers = [
    //     /*  'Authorization' => 'Bearer ' . $token, */
    //     'Accept' => 'application/json', ];
    //     $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . $request->id, ['headers' => $headers]);

    //     $responseData = json_decode($responseData->getBody()
    //         ->getContents() , true);
    //     //return $responseDatajenisperusahaan;
    //     //return $responseData;
    //     return view('home_user')
    //         ->with(['responseData' => $responseData, ]);
    // }

    public function dashboard(){
        if (Session::get('id') == '') {
            return redirect('login');
        } else {
            try {
                $client = new Client();

                $headers = [
                'Accept' => 'application/json', ];
    
                $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseCountPelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=14&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseCountLowongan = $client->request('GET', ENV('API') . 'Perusahaan?pil=15&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseDataLowongan = $client->request('GET', ENV('API') . 'Perusahaan?pil=16&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseDataPelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=17&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
    
                $responseData = json_decode($responseData->getBody()
                    ->getContents() , true);
                $responseCountPelamar = json_decode($responseCountPelamar->getBody()
                    ->getContents() , true);
                $responseCountLowongan = json_decode($responseCountLowongan->getBody()
                        ->getContents() , true);
                $responseDataLowongan = json_decode($responseDataLowongan->getBody()
                            ->getContents() , true);
                $responseDataPelamar = json_decode($responseDataPelamar->getBody()
                                ->getContents() , true);
                return view('home_user' . '')
                    ->with([    'responseData' => $responseData, 
                                'responseCountPelamar' => $responseCountPelamar, 
                                'responseCountLowongan' => $responseCountLowongan, 
                                'responseDataLowongan' => $responseDataLowongan, 
                                'responseDataPelamar' => $responseDataPelamar, 
                    ]);
            } catch (\Throwable $th) {
                // $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=14&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                
                // $responseData = json_decode($responseData->getBody()
                //     ->getContents() , true);
                // $arrayName = array('pelamar' => '0');
                // $arr = array(
                //     $arrayName
                // );

                // print_r($responseData);
                // print_r($arr);
                
                $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseCountPelamar = $client->request('GET', ENV('API') . 'Perusahaan?pil=14&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                $responseCountLowongan = $client->request('GET', ENV('API') . 'Perusahaan?pil=15&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);
                
                $responseData = json_decode($responseData->getBody()
                    ->getContents() , true);
                $responseCountPelamar = json_decode($responseCountPelamar->getBody()
                    ->getContents() , true);
                $responseCountLowongan = json_decode($responseCountLowongan->getBody()
                        ->getContents() , true);

                return view('home_user' . '')
                    ->with([    'responseData' => $responseData, 
                                'responseCountPelamar' => $responseCountPelamar, 
                                'responseCountLowongan' => $responseCountLowongan, 
                                'responseDataLowongan' => null, 
                                'responseDataPelamar' => null, 
                    ]);
            }
            
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
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
        $request['pil'] = 3;
        $url = ENV('API') . 'pengguna';
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);
            return redirect('login')
                ->with('message', 'anda berhasil registrasi, login terlebih dahulu');
        }
        catch(\Exception $e)
        {
            return redirect('register')->with('message', 'Kamu harus login dulu');
        };
    }

    public function view_profil()
    {
        $client = new Client();
        /* $token = Session::get('token');*/
        $headers = [
        /*  'Authorization' => 'Bearer ' . $token, */
        'Accept' => 'application/json', ];
        $responseData = $client->request('GET', ENV('API') . 'Perusahaan?pil=12&id_perusahaan=' . Session::get('id'), ['headers' => $headers]);

        $responseData = json_decode($responseData->getBody()
            ->getContents() , true);
        //return $responseDatajenisperusahaan;
        //return $responseData;
        return view('profil' . '/view_profil')
            ->with(['responseData' => $responseData, ]);
    }

    public function accLogOut()
    {
        auth()->logout();
        Session::put('id', '');
        Session::put('id_admin', '');
        return redirect('/login');
    }

    public function openCheckEmail()
    {
        return view('auth' . '/check');
    }

    public function sendEmailReq(Request $request)
    {
        $client = new Client();

        $request['pil'] = '5';

        $url = ENV('API') . 'pengguna';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('login')
                ->with('alert-success', 'berhasil mengirim url untuk mengubah kata sandi');
        }
        catch(\Exception $e)
        {
            return redirect('login')
            ->with('message', 'error messages: ' . $e);
        };
    }

    public function openForgetPass(Request $request)
    {
        if ($request->token == '') {
            return redirect('checkEmail')->with('message', 'Kamu harus mengisi email dulu');
        } else {
            return view('auth' . '/forget')
                ->with(['token' => $request->token, 
                ]);
        }
    }

    public function updatePass(Request $request)
    {
        $client = new Client();

        $request['pil'] = '6';

        $url = ENV('API') . 'pengguna';

        $headers = [
        'Accept' => 'application/json', ];

        try
        {
            $responseData = $client->request('POST', $url, ['headers' => $headers, 'json' => $request->all() ]);
            $responseData = json_decode($responseData->getBody()
                ->getContents() , true);

            return redirect('login')
                ->with('alert-success', 'berhasil mengubah password');
        }
        catch(\Exception $e)
        {
            return redirect('login')
            ->with('message', 'error messages: ' . $e);
        };
    }
}

