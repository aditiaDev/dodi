<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settingcross extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('template/back/header');
    $this->load->view('template/back/topmenu');
    $this->load->view('pages/back/settingcross');
    $this->load->view('template/back/footer');
  }

  public function getAllData()
  {
    $query = "SELECT A.id_setting_cross, A.id_barang, A.id_barang_rujukan, 
    B.nm_barang, C.nm_barang as nm_rujukan
    FROM tb_setting_cross A
    INNER JOIN tb_barang B ON A.id_barang = B.id_barang 
    INNER JOIN tb_barang C ON A.id_barang_rujukan = C.id_barang";
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
    $this->form_validation->set_rules('id_barang_rujukan', 'Barang Rujukan', 'required');

    if ($this->form_validation->run() == FALSE) {
      $output = array("status" => "error", "message" => validation_errors());
      echo json_encode($output);
      return false;
    }

    $data = array(
      "id_barang" => $this->input->post('id_barang'),
      "id_barang_rujukan" => $this->input->post('id_barang_rujukan'),
    );
    $this->db->insert('tb_setting_cross', $data);
    $output = array("status" => "success", "message" => "Data Berhasil Disimpan");
    echo json_encode($output);
  }

  public function deleteData()
  {
    $this->db->where('id_setting_cross', $this->input->post('id'));
    $this->db->delete('tb_setting_cross');

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
    );
    $this->db->where('id_setting_cross', $this->input->post('id'));
    $this->db->update('tb_setting_cross', $data);
    if ($this->db->error()['message'] != "") {
      $output = array("status" => "error", "message" => $this->db->error()['message']);
      echo json_encode($output);
      return false;
    }
    $output = array("status" => "success", "message" => "Data Berhasil di Update");
    echo json_encode($output);
  }
}
