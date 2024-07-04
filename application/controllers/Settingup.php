<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settingup extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('template/back/header');
    $this->load->view('template/back/topmenu');
    $this->load->view('pages/back/settingup');
    $this->load->view('template/back/footer');
  }

  public function getAllData()
  {
    $query = "SELECT A.id_setting_up, A.id_barang, A.id_barang_rujukan, 
    B.nm_barang, C.nm_barang as nm_rujukan, A.biaya, A.type, A.min_beli,
    CASE WHEN A.type = 0 Then 'Pemeblian Banyak' Else 'Referensi Barang Serupa' End as nm_type
    FROM tb_setting_up A
    LEFT JOIN tb_barang B ON A.id_barang = B.id_barang 
    LEFT JOIN tb_barang C ON A.id_barang_rujukan = C.id_barang";
    $data['data'] = $this->db->query($query)->result();
    echo json_encode($data);
  }

  public function getBarang()
  {
    $this->db->from('tb_barang');
    $data['data'] = $this->db->get()->result();
    echo json_encode($data);
  }

  public function saveData()
  {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_barang', 'Barang', 'required');
    $this->form_validation->set_rules('type', 'type', 'required');

    if ($this->form_validation->run() == FALSE) {
      $output = array("status" => "error", "message" => validation_errors());
      echo json_encode($output);
      return false;
    }

    $type = $this->input->post('type');

    if ($type == 1) {
      $data = array(
        "id_barang" => $this->input->post('id_barang'),
        "id_barang_rujukan" => $this->input->post('id_barang_rujukan'),
        "biaya" => $this->input->post('biaya_rujukan'),
        "type" => 1,
      );
      $this->db->insert('tb_setting_up', $data);
    } else {
      $data = array(
        "id_barang" => $this->input->post('id_barang'),
        "min_beli" => $this->input->post('min_beli'),
        "biaya" => $this->input->post('biaya'),
        "type" => 0,
      );
      $this->db->insert('tb_setting_up', $data);
    }


    $output = array("status" => "success", "message" => "Data Berhasil Disimpan");
    echo json_encode($output);
  }

  public function deleteData()
  {
    $this->db->where('id_setting_up', $this->input->post('id'));
    $this->db->delete('tb_setting_up');

    $output = array("status" => "success", "message" => "Data Berhasil di Hapus");
    echo json_encode($output);
  }

  public function updateData()
  {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_barang', 'Barang', 'required');
    $this->form_validation->set_rules('id_barang_rujukan', 'Barang Rujukan', 'required');

    if ($this->form_validation->run() == FALSE) {
      $output = array("status" => "error", "message" => validation_errors());
      echo json_encode($output);
      return false;
    }

    $data = array(
      "id_barang" => $this->input->post('id_barang'),
      "id_barang_rujukan" => $this->input->post('id_barang_rujukan'),
      "biaya" => $this->input->post('biaya'),
    );
    $this->db->where('id_setting_up', $this->input->post('id'));
    $this->db->update('tb_setting_up', $data);
    if ($this->db->error()['message'] != "") {
      $output = array("status" => "error", "message" => $this->db->error()['message']);
      echo json_encode($output);
      return false;
    }
    $output = array("status" => "success", "message" => "Data Berhasil di Update");
    echo json_encode($output);
  }
}
