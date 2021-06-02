<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {
  // Fungsi untuk menampilkan semua data barang
  public function view(){
    return $this->db->get('t_uas11189')->result();
  }
  

  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, kd_brg tidak harus divalidasi
    // Jadi kd_brg di validasi hanya ketika menambah data barang saja
    if($mode == "save")
      $this->form_validation->set_rules('input_nota', 'nota', 'required');
    
    $this->form_validation->set_rules('input_nama', 'nama', 'required');
    $this->form_validation->set_rules('input_harga', 'harga', 'required');
    $this->form_validation->set_rules('input_satuan', 'satuan', 'required');
    $this->form_validation->set_rules('input_tanggal', 'tanggal', 'required');
    $this->form_validation->set_rules('input_jumlah', 'jumlah', 'required');
    $this->form_validation->set_rules('input_total', 'total', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel barang
  public function save(){
    $data = array(
      "nota" => $this->input->post('input_nota'),
      "nama" => $this->input->post('input_nama'),
      "harga" => $this->input->post('input_harga'),
      "satuan" => $this->input->post('input_satuan'),
      "tanggal" => $this->input->post('input_tanggal'),
      "jumlah" => $this->input->post('input_jumlah'),
      "total" => $this->input->post('input_total')
    );
    
    $this->db->insert('t_uas11189', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data barang berdasarkan kd_brg barang
  
  
  // Fungsi untuk melakukan menghapus data barang berdasarkan kd_brg barang
  public function delete($nota){
    $this->db->where('nota', $nota);
    $this->db->delete('t_uas11189'); // Untuk mengeksekusi perintah delete data
  }
}