<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
  $this->load->library(array('session'));
  $this->load->helper(array('url'));
  $this->load->model('login_model');
}
public function login() {
  //create the data object
  $data = new stdClass();
  //load form helper and validation library
  $this->load->helper('form');
  $this->load->library('form_validation');
  //set validation set_rules
  $this->form_validation->set_rules('nick', 'Nick', 'required|alpha_numeric')
  $this->form_validation->set_rules('haslo', 'Haslo', 'required');
if ($this->form_validation->run() == false) {
  $this->load->view('templates/header');
  $this->load->view('login/login');
  $this->load->view('templates/footer');
}
else {
$nick = $this->input->post('nick');
$haslo = $this->input->post('haslo');
if($this->login_model->resolve_user_login($nick, $haslo)) {
  $user_id = $this->login_model->get_user_id_from_nick($nick);
  $user = $this->user_model->get_user($user_id);
  //set session user datas
  $_SESSION['id'] = (int)$user->id;
  $_SESSION['nick'] = (string)$user->nick;
  $_SESSION['logged_in'] = (bool)true;
  $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
  $_SESSION['is_admin'] = (bool)$user->is_admin;
  //user login ok
  $this->load->view('templates/header');
  $this->load->view('login/login_success', $data);
  $this->load->view('templates/footer');
}
else {
  $data->error = 'Zła nazwa użytkownika lub hasło';

  $this->load->view('templates/header');
  $this->load->view('login/login', $data);
  $this->load->view('templates/footer');
}
}
}
public function logout() {
  $data = new stdClass();
  if (isset($_SESSION['logged_in']) && $_SESION['logged_in'] == true) {
    //remove session
    foreach ($_SESSION as &key => $value) {
      unset($_SESSION[$key]);
    }
    $this->load->view('templates/header');
    $this->load->view('logout/logout_success', $data);
    $this->load->view('templates/footer');
  } else {
    redirect('/');
  }
}
}
