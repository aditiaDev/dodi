<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    // if(!$this->session->userdata('id_user'))
    //   redirect('login', 'refresh');
  }

  public function dtlProduct($id_barang)
  {
    $data['data'] = $this->db->query("SELECT * FROM tb_barang where id_barang='" . $id_barang . "'")->result();
    $data['cross'] = $this->db->query("SELECT B.id_barang, B.nm_barang, B.harga, B.foto_barang 
    FROM tb_setting_cross A 
    INNER JOIN tb_barang B ON A.id_barang_rujukan = B.id_barang
    WHERE A.id_barang = '" . $id_barang . "'")->result();

    $data['up'] = $this->db->query("SELECT B.id_barang, B.nm_barang, B.harga, B.foto_barang 
    FROM tb_setting_up A 
    INNER JOIN tb_barang B ON A.id_barang_rujukan = B.id_barang
    WHERE A.type = 1 AND A.id_barang = '" . $id_barang . "'")->result();

    $data['potongan'] = $this->db->query("SELECT * FROM tb_setting_up WHERE type=0 AND id_barang= '" . $id_barang . "'")->result();
    $data['rating'] = $this->db->query("SELECT ROUND(IFNULL(AVG(rating),0),1) as average_rating FROM tb_penilaian WHERE id_barang = '" . $id_barang . "'")->result();
    $data['jml_rate'] = $this->db->query("SELECT COUNT(*) AS jml_rate FROM tb_penilaian WHERE id_barang = '" . $id_barang . "'")->result();

    $this->load->view('template/front/header');
    $this->load->view('template/front/menu');
    $this->load->view('pages/front/dtlProduct', $data);
    $this->load->view('template/front/footer');
  }
}
