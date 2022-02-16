<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    /* public function index()
    {
        //$data['title'] = 'Login Page';
        $this->load->view('templates/auth_header');
        $this->load->view('login');
        $this->load->view('templates/auth_footer');
    } */

    public function index()
    {
        $this->form_validation->set_rules('USERNAME', 'username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('PASSWORD', 'password', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
        $this->form_validation->set_rules('AREA_KODE', 'area_kode', 'required|trim');

        //$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/header', $data);
            $this->load->view('Registrasi');
            $this->load->view('templates/footer');
            $this->load->view('templates/sidebar');
        } else {
            $data = [
                'Username' => $this->input->post('Username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'jabatan' => $this->input->post('jabatan'),
                'area_kode' => $this->input->post('area_kode'),
            ];

            $this->db->insert('', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your accout has been created. Please Login</div>');
            redirect('Login');
        }
    }
}
