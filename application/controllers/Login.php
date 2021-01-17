<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Sign In';
        $this->load->view('tamplate/header_login', $data);
        $this->load->view('login', $data);
        $this->load->view('tamplate/footer_login');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $where = array('email' => $email, 'password' => md5($password));

            $data = $this->M_projek->edit_data($where, 'admin');
            $d = $this->M_projek->edit_data($where, 'admin')->row();
            $cek = $data->num_rows();

            if ($cek > 0) {
                $session = array('id' => $d->id_admin, 'nama_admin' => $d->nama_admin, 'gambar' => $d->gambar, 'status' => 'login');
                $this->session->set_userdata($session);
                redirect('admin');
            } else {
                $dt = $this->M_projek->edit_data($where, 'user');
                $hasil = $this->M_projek->edit_data($where, 'user')->row();
                $proses = $dt->num_rows();

                if ($proses > 0) {
                    $session = array('id_user' => $hasil->id_user, 'nama_user' => $hasil->nama_user, 'gambar' => $hasil->gambar, 'status' => 'login');
                    $this->session->set_userdata($session);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Login gagal! Username atau password salah.</div>');
                    redirect('login');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Anda Belum mengisi username atau password</div>');
            redirect('login');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus Di Isi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Ini Telah Terdaftar!',
            'valid_email' => 'Email Ini Tidak Valid!',
            'required' => 'Email Harus Di Isi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password Minimal 3 character!',
            'required' => 'Password Harus Di Isi!'
        ]);
        $this->form_validation->set_rules('passwordconf', 'Password Konfirmasi', 'required|trim|min_length[3]|matches[password]', [
            'min_length' => 'Password Minimal 3 character!',
            'matches' => 'Password Tidak Cocok!',
            'required' => 'Password Konfirmasi Harus Di Isi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sign Up';
            $this->load->view('tamplate/header_login', $data);
            $this->load->view('signup');
            $this->load->view('tamplate/footer_login');
        } else {
            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => md5($this->input->post('password', true)),
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Anda Berhasil Di Daftarkan,Mohon Segera Login Akun Anda</div>');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Thank You!</div>');
        redirect('login');
    }
}
