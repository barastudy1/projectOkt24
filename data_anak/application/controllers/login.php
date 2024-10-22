<?php

defined('BASEPATH') or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin','login');
    }

    public function index()
    {
        if ($this->login->is_logged_in()) {
            $this->login->is_role() === 'admin' ? redirect('v_admin') : redirect('v_home');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

            if ($this->form_validation->run() === true) {
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);

                $checking = $this->login->check_login('user', ['username' => $username], ['password' => $password]);

                if ($checking !== false) {
                    foreach ($checking as $data) {
                        $session_data = [
                            'user_id' => $data->user_id,
                            'user_name' => $data->user_name,
                            'user_email' => $data->user_email,
                            'user_password' => $data->user_password,
                            'user_akses' => $data->user_akses,
                            'user_status' => $data->user_status,
                        ];

                        $this->session->set_userdata($session_data);

                        if ($this->session->userdata('user_akses') === 'admin') {
                            redirect('v_admin');
                        } elseif ($this->session->userdata('user_akses') === 'masyarakat') {
                            redirect('v_home');
                        }
                    }
                } else {
                    $this->load->view('login');
                }
            } else {
                $this->load->view('login');
            }
        }
    }
}
