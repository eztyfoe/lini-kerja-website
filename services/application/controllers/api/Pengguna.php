<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Pengguna extends BD_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        // $this->auth();
    }

    var $tbl_pengguna = 'tbl_pengguna';
    var $tbl_pelamar = 'tbl_pelamar';
    var $tbl_perusahaan = 'tbl_perusahaan';

    function index_get() {
        $id = $this->get('id_pengguna');
        if ($id == '') {
            $pengguna = $this->db->get('tbl_pengguna')->result();
        } else {
            $this->db->where('id_pengguna', $id);
            $pengguna = $this->db->get('tbl_pengguna')->result();
        }
        $this->response($pengguna, 200);
    }

    function index_post() {
        $pil = $this->post('pil');

        if ($pil == '1') {
            $u = $this->post('username'); //email Posted
            $p = md5($this->post('password')); //Pasword Posted
            $q = array('username' => $u); //For where query condition
            $tkey = $this->config->item('thekey');
            $invalidLogin = ['status' => 'invalid']; //Respon if login invalid
            $successLogin = ['status' => 'success']; //Respon if login valid
            $val = $this->M_user->getPengguna($q)->row(); //Model to get single data row from database base on email
            if($this->M_user->getPengguna($q)->num_rows() == 0){$this->response($invalidLogin, 404);}
            $match = $val->password;   //Get password for user from database
            if($p == $match){  //Condition if password matched
                $token['id'] = $val->id_pengguna;  //From here
                // $token['id'] = $val->id;  //From here
                $token['username'] = $u;
                $date = new DateTime();
                $token['iat'] = $date->getTimestamp();
                $token['exp'] = $date->getTimestamp() + 60*60*5; //To here is to generate token
                $output['token'] = JWT::encode($token, $tkey ); //This is the output token
                $this->set_response($successLogin, 200); //This is the respon if success
            }
            else {
                $this->set_response($invalidLogin, 404); //This is the respon if failed
            }
        } else if ($pil == '2') {
            $id_pengguna = $this->M_user->getIdPengguna();
            $id_pelamar = $this->M_user->getIdPelamar();
            $username = $this->post('username');
            $email = $this->post('email');
            $password = md5($this->post('password'));

            $data_pengguna = array(
                'id_pengguna' => $id_pengguna,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => '1',
                'is_active' => '1',
            );

            $data_pelamar = array(
                'id_pengguna' => $id_pengguna,
                'id_pelamar' => $id_pelamar,
                'nama' => $username,
                'jenis_kelamin' => '-',
                'alamat' => '-',
                'tempat_lahir' => '-',
                'tanggal_lahir' => '-',
                'agama' => '-',
                'status' => '1'
            );

            $insert_pengguna = $this->Model_main->addRecord($this->tbl_pengguna, $data_pengguna);
            $insert_pelamar = $this->Model_main->addRecord($this->tbl_pelamar, $data_pelamar);


            $success = array(
                'status' => 'success',
                'data_pengguna' => $data_pengguna,
                'data_pelamar' => $data_pelamar
            );

            $fail = array(
                'status' => 'failed'
            );
            if ($insert_pengguna && $insert_pelamar){
                $this->response($success, 201);
            }else{
                $this->response($fail, 502);
            }
        } else if ($pil == '3') {
            $id_pengguna = $this->M_user->getIdPengguna();
            $id_perusahaan = $this->M_user->getIdPerusahaan();
            $username = $this->post('username');
            $email = $this->post('email');
            $password = md5($this->post('password'));

            $data_pengguna = array(
                'id_pengguna' => $id_pengguna,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => '2',
                'is_active' => '1',
            );

            $data_perusahaan = array(
                'id_perusahaan' => $id_perusahaan,
                'id_pengguna' => $id_pengguna,
                'nama' => $username,
                'alamat' => '-',
                'telepon' => '-',
                'jenis' => '-'
            );

            $insert_pengguna = $this->Model_main->addRecord($this->tbl_pengguna, $data_pengguna);
            $insert_perusahaan = $this->Model_main->addRecord($this->tbl_perusahaan, $data_perusahaan);


            $success = array(
                'status' => 'success',
                'data_pengguna' => $data_pengguna,
                'data_perusahaan' => $data_perusahaan
            );

            $fail = array(
                'status' => 'failed'
            );
            if ($insert_pengguna && $insert_perusahaan){
                $this->response($success, 201);
            }else{
                $this->response($fail, 502);
            }
        } else {
            $fail = array(
                'status' => 'not found'
            );

            $this->response($fail, 404);
        }
        
    }

    function index_put() {
        $pil_put = $this->put('pil');
        if ($pil_put == '1') {
            $id_pengguna = $this->put('id_pengguna');
            $id_pelamar = $this->put('id_pelamar');
            $username = $this->put('username');
            $email = $this->put('email');
            $password = md5($this->put('password'));
            $role = $this->put('role');
            $nama = $this->put('nama');
            $jk = $this->put('jk');
            $alamat = $this->put('alamat');
            $tempat_lahir = $this->put('tempat_lahir');
            $tanggal_lahir = $this->put('tanggal_lahir');
            $agama = $this->put('agama');
            $status = $this->put('status');

            $data_pengguna = array(
                'id_pengguna' => $id_pengguna,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role
            );

            $data_pelamar = array(
                'id_pengguna' => $id_pengguna,
                'id_pelamar' => $id_pelamar,
                'nama' => $nama,
                'jk' => $jk,
                'alamat' => $alamat,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'agama' => $agama,
                'status' => $status
            );

            $update_pengguna = $this->Model_main->updateRecord($this->tbl_pengguna, $data_pengguna, $id_pengguna);
            $update_pelamar = $this->Model_main->updateRecord($this->tbl_pelamar, $data_pelamar, $id_pelamar);


            $success = array(
                'status' => 'success',
                'data_pengguna' => $data_pengguna,
                'data_pelamar' => $data_pelamar
            );

            $fail = array(
                'status' => 'failed'
            );
            if ($update_pengguna && $update_pelamar){
                $this->response($success, 201);
            }else{
                $this->response($fail, 502);
            }
        } else if ($pil_put == '2') {
            $id_pengguna = $this->put('id_pengguna');
            $id_perusahaan = $this->put('id_perusahaan');
            $username = $this->put('username');
            $email = $this->put('email');
            $password = md5($this->put('password'));
            $role = $this->put('role');
            $nama = $this->put('nama');
            $alamat = $this->put('alamat');
            $telepon = $this->put('telepon');
            $jenis = $this->put('jenis');

            $data_pengguna = array(
                'id_pengguna' => $id_pengguna,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role
            );

            $data_perusahaan = array(
                'id_perusahaan' => $id_perusahaan,
                'id_pengguna' => $id_pengguna,
                'nama' => $nama,
                'alamat' => $alamat,
                'telepon' => $telepon,
                'jenis' => $jenis
            );

            $update_pengguna = $this->Model_main->updateRecord($this->tbl_pengguna, $data_pengguna, $id_pengguna);
            $update_perusahaan = $this->Model_main->updateRecord($this->tbl_perusahaan, $data_perusahaan, $id_perusahaan);


            $success = array(
                'status' => 'success',
                'data_pengguna' => $data_pengguna,
                'data_perusahaan' => $data_perusahaan
            );

            $fail = array(
                'status' => 'failed'
            );
            if ($update_pengguna && $update_perusahaan){
                $this->response($success, 201);
            }else{
                $this->response($fail, 502);
            }
        } else {
            $fail = array(
                'status' => 'not found',
                'pil_put' => $pil_put
            );

            $this->response($fail, 404);
        }
    }

}
