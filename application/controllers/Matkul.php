<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Mahasiswa_model', 'mahasiswa');
      $this->load->library(['form_validation', 'session']);
      $this->load->helper(array('auto_check_input'));
  }

  public function addMatkulMhs($id)
  {
      $data["judul"] = "Add Mata Kuliah Mahasiswa";
      $data["mahasiswa"] = $this->mahasiswa->getMahasiswaById($id);
      $data["matkul"] = $this->mahasiswa->getMatkul($data["mahasiswa"]["jurusan_id"]);
      $nim = $data["mahasiswa"]["nim"];
      $data["semester"] = $this->mahasiswa->getMatkulMhs("$nim");

      $this->form_validation->set_rules('matkul[]', 'Mata Kuliah', 'required');
      if ($this->form_validation->run()) {
        $nim = $data["mahasiswa"]["nim"];
        $matkul = $this->input->post('matkul');
        foreach ($matkul as $row_matkul) {
          $semester = $this->db->get_where('semester', ["nim" => $nim, "matkul_id" => $row_matkul])->row_array();
          if ($semester) {
              // sementara ganti dengan alert bootstrap
              echo "<script>alert('gagal');</script>";
            } else {
              $this->mahasiswa->addMatkul($nim, $row_matkul);
          }
        }
        redirect('mahasiswa/detailMhs/' . $data["mahasiswa"]["id"]);
      }

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/navbar');
      $this->load->view('matkul/addMatkul', $data);
      $this->load->view('templates/footer');
  }
}
?>
