<?php
class Rejestracja extends CI_Controller {

  public function index()
  {
    $this->load->helper(array('rejestracja', 'url'));

    $this->load->library('form_validation');

    if ($this->form_validation->run()==FALSE)
    {
      $this->load->view('myform');
    }
    else
     {
      $this->load->view('formsuccess');
     }
    }
  }
 ?>
