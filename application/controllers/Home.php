<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('id_user'))
      redirect('login', 'refresh');

    // if ($this->session->userdata('level') == "ADMIN_PENJUALAN")
    //   redirect('front', 'refresh');

    if ($this->session->userdata('level') == "PELANGGAN")
      redirect('front', 'refresh');
  }

  public function index()
  {


    $this->load->view('template/back/header');
    $this->load->view('template/back/topmenu');
    $this->load->view('pages/back/home');
    $this->load->view('template/back/footer');
  }
}
