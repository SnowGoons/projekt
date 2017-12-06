<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
  $this->load->library('session');
  $this->load->library('form_validation');
  $this->load->helper(array('url', 'form'));
  $this->load->model('login_model');
}
public function index() {
  $this->form_validation->set_rules('nick', 'Nick', 'required');
  $this->form_validation->set_rules('haslo', 'Haslo', 'required');
if ($this->form_validation->run()) {
  $nick = $this->input->post('nick');
  $haslo = $this->input->post('haslo');
  if($this->login_model->login($nick, $haslo))
  {
    $session_data = array (
      'nick' => $nick );
  }
  $this->session->set_userdata($session_data);
  redirect('Welcome/');
}
else {
  $this->load->view('templates/header');
  $this->load->view('login/login');
  $this->load->view('templates/footer');
}
}
public function logout()
{
  $this->session->unset_userdata('nick');
  $this->load->view('templates/header');
  $this->load->view('login/login');
  $this->load->view('templates/footer');
}
}
