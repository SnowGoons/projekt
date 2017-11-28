<?php
class Rejestracja extends CI_Controller {

  public function index()
  {
    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('nick','Nick','required');
    $this->form_validation->set_rules('haslo','Haslo','required');
    $this->form_validation->set_rules('potwhaslo','Potwierdzenie Hasla','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('imie','Imie','required');
    $this->form_validation->set_rules('nazwisko','Nazwisko','required');
    $this->form_validation->set_rules('kodpocz','Kod Pocztowy','required');
    $this->form_validation->set_rules('miasto','Miejscowosc','required');
    $this->form_validation->set_rules('ulica','Ulica','required');

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
