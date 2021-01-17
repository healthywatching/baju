<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //cek Login
        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Belum Login!</div>');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Selamat Datang ' . $this->session->userdata('nama_user');
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $data['produk'] = $this->M_projek->get_data('produk')->result();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function produk()
    {
        $data['title'] = 'Produk';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $data['produk'] = $this->M_projek->get_data('produk')->result();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/produk', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Produk';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $data['detail'] = $this->M_projek->edit_data(['id_produk' => $id], 'produk')->row_array();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/detail_produk', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function addtocart($id)
    {
        $data['detail'] = $this->M_projek->edit_data(['id_produk' => $id], 'produk')->row_array();
        $data = [
            'id_produk' => $id,
            'nama_produk' => $data['detail']['nama_produk'],
            'quantity' => $this->input->post('qty'),
            'harga' => $data['detail']['harga'],
            'gambar' => $data['detail']['gambar'],
            'size' => $this->input->post('size'),
            'id_user' => $this->session->userdata('id_user')
        ];

        $this->db->insert('keranjang', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Dimasukkan Kekeranjang</div>');
        redirect('user/keranjang');
    }

    public function keranjang()
    {
        $data['title'] = 'Keranjang';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $data['keranjang'] = $this->M_projek->edit_data(['id_user' => $this->session->userdata('id_user')], 'keranjang')->result();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function order()
    {
        $data['title'] = 'Pesan Kustom';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/kustom', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function checkout($id)
    {
        $data['title'] = 'Checkout';
        $data['keranjang'] = $this->M_projek->edit_data(['id_keranjang' => $id], 'keranjang')->row_array();
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/checkout', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function checkoutact($id)
    {
        // no code
        $data['keranjang'] = $this->M_projek->edit_data(['id_keranjang' => $id], 'keranjang')->row_array();
        $total = $data['keranjang']['quantity'] * $data['keranjang']['harga'];
        $data = [
            'id_keranjang' => $id,
            'id_user' => $this->session->userdata('id_user'),
            'nama_user' => $this->session->userdata('nama_user'),
            'nama_produk' => $data['keranjang']['nama_produk'],
            'qty' => $data['keranjang']['quantity'],
            'size' => $data['keranjang']['size'],
            'total' => $total,
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'gambar' => $data['keranjang']['gambar'],
            'status' => 'sedang dalam proses'
        ];

        // var_dump($data);
        $this->db->insert('checkout', $data);
        $this->M_projek->delete_data(['id_keranjang' => $id], 'keranjang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Produk Berhasil Dicheckout <a href="user/riwayat">Tracking Produk Disini</a></div>');
        redirect('user');
    }

    public function profile()
    {
        // no code
        $data['title'] = 'Profile';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('tamplate/footer_user', $data);
    }

    public function riwayat()
    {
        $data['title'] = 'Riwayat Checkout';
        $data['contact'] = $this->M_projek->get_data('contact')->row_array();
        $data['checkout'] = $this->M_projek->edit_data(['id_user' => $this->session->userdata('id_user')], 'checkout')->result();
        $this->load->view('tamplate/header_user', $data);
        $this->load->view('user/riwayat', $data);
        $this->load->view('tamplate/footer_user', $data);
    }
}
