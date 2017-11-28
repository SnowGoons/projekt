<?php
class Rejestracja_baza extends CI_Controller {

  public function do_bazy()
  {
    $nick=$this->input->post('nick');
    $haslo=$this->input->post('haslo');
    $email=$this->input->post('email');
    $imie=$this->input->post('imie');
    $nazwisko=$this->input->post('nazwisko');
    $kodpocz=$this->input->post('kodpocz');
    $miasto=$this->input->post('miasto');
    $ulica=$this->input->post('ulica');

    $data=array('nick'=>$nick, 'haslo'=>$haslo, 'email'=>$email, 'imie'=>$imie, 'nazwisko'=>$nazwisko, 'kodpocz'=>$kodpocz, 'miasto'=>$miasto, 'ulica'=>$ulica);
    $this->load->model('rejestracja_model');
    if ($this->rejestracja_model->dodaj($data))
    {
      $this->load->view('templates/header');
      $this->load->view('rejestracjaudana');
      $this->load->view('templates/footer');
    }
    else {
      echo "Nie udalo sie dodac informacji do bazy."
    }
    }
    }

?>
