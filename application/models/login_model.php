<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }
  public function resolve_ser_login($nick, $haslo) {
    $this->db->select('haslo');
    $this->db->from('uzytkownicy');
    $this->db->where('nick', $nick);
    $hash = $this->db->get()->row('haslo');
    return $this->verify_password_hash($haslo, $hash);
  }
  public function get_user_id_from_nick($nick) {
    $this->db->select('id');
    $this->db->from('uzytkownicy');
    $this->db->where('nick', $nick);
    return $this->db->get()->row('id');
  }
  public function get_user($user_id) {
    $this->db->from('uzytkownicy');
    $this->db->where('id'. $user_id);
    return $this->db->get()->row();
  }
  private function hash_password($haslo) {
  return password_hash($haslo, PASSWORD_BCRYPT);
  }
  private function verify_password_hash($haslo, $hash) {
    return password_verify($haslo, $hash);
  }
}
