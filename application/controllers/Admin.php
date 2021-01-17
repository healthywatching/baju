<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $data['title'] = 'Hallo, Selamat Datang';
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/dashboard');
        $this->load->view('tamplate/footer_admin');
    }

    public function produk()
    {
        $data['title'] = 'Produk';
        $data['produk'] = $this->M_projek->get_data('produk')->result();
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/produk', $data);
        $this->load->view('tamplate/footer_admin');
    }

    public function tambahProduk()
    {
        $data['title'] = 'Tambah Produk';
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/tambah_produk', $data);
        $this->load->view('tamplate/footer_admin');
    }

    public function tambahProdukact()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        if ($this->form_validation->run() != false) {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '5048';
            $config['upload_path'] = './assets/image/produk/';
            $config['file_name'] = 'Ajagijig';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $data = [
                    'nama_produk' => $nama,
                    'harga' => $harga,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar['file_name']
                ];
                $this->M_projek->insert_data($data, 'produk');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Data Produk Telah Ditambahkan</div>');
                redirect('admin/produk');
            } else {
                redirect('admin/tambahProduk');
            }
        }
    }

    public function detailProduk($id)
    {
        $data['title'] = 'Detail Produk';
        $data['detail'] = $this->M_projek->edit_data(['id_produk' => $id], 'produk')->row_array();
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/detail_produk', $data);
        $this->load->view('tamplate/footer_admin');
    }

    public function editProduk($id)
    {
        $data['title'] = 'Edit Produk';
        $data['produk'] = $this->M_projek->edit_data(['id_produk' => $id], 'produk')->row_array();

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/header_admin', $data);
            $this->load->view('tamplate/sidebar_admin');
            $this->load->view('admin/edit_produk', $data);
            $this->load->view('tamplate/footer_admin');
        } else {
            $id_produk = $id;
            $nama_produk = $this->input->post('nama');
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');

            // Apakah ada gambar ?
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '5048';
                $config['upload_path']   = './assets/image/produk/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('harga', $harga);
            $this->db->set('nama_produk', $nama_produk);
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Di Update!</div>');
            redirect('admin/produk');
        }
    }

    public function deleteProduk($id)
    {
        $where = ['id_produk' => $id];
        $this->M_projek->delete_data($where, 'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Terhapus!</div>');
        redirect('admin/produk');
    }

    public function checkout()
    {
        // no code
        $data['title'] = 'Pemesanan - Checkout';
        $data['checkout'] = $this->M_projek->get_data('checkout')->result();
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/pemesanan', $data);
        $this->load->view('tamplate/footer_admin');
    }

    public function detailpesan($id)
    {
        $data['title'] = 'Pemesanan - Detail Checkout';
        $data['checkout'] = $this->M_projek->edit_data(['id_checkout' => $id], 'checkout')->row_array();
        $this->load->view('tamplate/header_admin', $data);
        $this->load->view('tamplate/sidebar_admin');
        $this->load->view('admin/detailpesan', $data);
        $this->load->view('tamplate/footer_admin');
    }

    public function deletepesan($id)
    {
        $where = ['id_checkout' => $id];
        $this->M_projek->delete_data($where, 'checkout');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Terhapus!</div>');
        redirect('admin/checkout');
    }

    public function editpesan($id)
    {
        $data['title'] = 'Edit Status Pemesanan';
        $data['checkout'] = $this->M_projek->edit_data(['id_checkout' => $id], 'checkout')->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('tamplate/header_admin', $data);
            $this->load->view('tamplate/sidebar_admin');
            $this->load->view('admin/editpesan', $data);
            $this->load->view('tamplate/footer_admin');
        } else {
            $id_checkout = $id;
            $status = $this->input->post('status');

            $this->db->set('status', $status);
            $this->db->where('id_checkout', $id_checkout);
            $this->db->update('checkout');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Di Update!</div>');
            redirect('admin/checkout');
        }
    }
}
