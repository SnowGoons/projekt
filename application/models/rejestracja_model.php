<?php
class Rejestracja_model extends CI_Model {

public function dodaj($data)
{
    $count = $this->db->insert('uzytkownicy', $data);
    if($count>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
