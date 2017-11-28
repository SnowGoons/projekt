<?php
class Rejestracja extends CI_Controller {

  public function index()
  {
    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('nick','Nick','required|min_length[5]|max_length[16]|is_unique[uzytkownicy.nick]',
    array('required'=>'Nie wprowadziles/as nick`u.','is_unique'=>'Ten nick juz istnieje.','min_length'=>'Nick musi skladac sie z conajmniej 5 znakow.','max_length'=>'Nick nie moze byc dluzszy niz 16 znakow'));
    $this->form_validation->set_rules('haslo','Haslo','required|min_length[4]|max_length[12]',
  array('required'=>'Nie wprowadziles/as hasla.','min_length'=>'Haslo musi skladac sie z conajmniej 4 znakow.','max_length'=>'Haslo nie moze byc dluzsze niz 12 znakow'));
    $this->form_validation->set_rules('potwhaslo','Potwierdzenie Hasla','required|matches[haslo]',
  array('required'=>'Musisz potwierdzic haslo.','matches'=>'Hasla sie nie zgadzaja'));
    $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[uzytkownicy.email]',
  array('required'=>'Nie wprowadziles/as adresu email.','valid_email'=>'Adres email musi byc wazny.','is_unique'=>'Adres email juz istnieje.'));
    $this->form_validation->set_rules('imie','Imie','required',
  array('required'=>'Nie wprowadziles/as imienia.'));
    $this->form_validation->set_rules('nazwisko','Nazwisko','required',
  array('required'=>'Nie wprowadziles/as nazwiska.'));
    $this->form_validation->set_rules('kodpocz','Kod Pocztowy','required',
  array('required'=>'Nie wprowadziles/as kodu pocztowego.'));
    $this->form_validation->set_rules('miasto','Miejscowosc','required',
  array('required'=>'Nie wprowadziles/as miejscowosci.'));
    $this->form_validation->set_rules('ulica','Ulica','required',
  array('required'=>'Nie wprowadziles/as ulicy.'));

    if ($this->form_validation->run()==FALSE)
    {
      $this->load->view('rejestracja');
    }
    else
     {
      $this->load->view('rejestracjaudana');
     }
    }
  }
 ?>
