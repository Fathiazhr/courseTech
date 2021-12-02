<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/Header');
        $this->load->view('layout/Navbar', ["forAct" => 'account']);
        $this->load->view('account/layout/sidebar', ["content" => 'account/dashboard']);
        $this->load->view('layout/Footer');
    }

    public function kategori()
    {
        $this->load->view('layout/Header');
        $this->load->view('layout/Navbar', ["forAct" => 'account']);
        $this->load->view('account/layout/sidebar', ["content" => 'account/kategori']);
        $this->load->view('layout/Footer');
    }

    public function produk()
    {
        $this->load->view('layout/Header');
        $this->load->view('layout/Navbar', ["forAct" => 'account']);
        $this->load->view('account/layout/sidebar', ["content" => 'account/produk']);
        $this->load->view('layout/Footer');
    }
}
