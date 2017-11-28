<?php
class Rejestracja extends CI_Controller {

  public function index()
  {
    $this->load->helper(array('rejestracja', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('nick','Nick','wymagany');
    $this->form_validation->set_rules('haslo','Haslo','wymagane');
    $this->form_validation->set_rules('potwhaslo','Potwierdzenie Hasla','wymagane');
    $this->form_validation->set_rules('email','Email','wymagany');
    $this->form_validation->set_rules('imie','Imie','wymagane');
    $this->form_validation->set_rules('nazwisko','Nazwisko','wymagane');
    $this->form_validation->set_rules('kodpocz','Kod Pocztowy','wymagany');
    $this->form_validation->set_rules('miasto','Miejscowosc','wymagana');
    $this->form_validation->set_rules('ulica','Ulica','wymagana');

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
