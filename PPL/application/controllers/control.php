<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Control extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Model'); // Load Model ke controller ini

  }
  
  public function index(){
    $data['t_uas11189'] = $this->Model->view();
    $this->load->view('index', $data);
  }

  public function jadwal(){
    $data['t_uas11189'] = $this->Model->view();
    $this->load->view('jadwal', $data);
  }

  public function peringkat(){
    $data['t_uas11189'] = $this->Model->view();
    $this->load->view('peringkat', $data);
  }

  public function berita(){
    $data['t_uas11189'] = $this->Model->view();
    $this->load->view('berita', $data);
  }
 
  public function login(){
    $data['t_uas11189'] = $this->Model->view();
    $this->load->view('login', $data);
  }

}