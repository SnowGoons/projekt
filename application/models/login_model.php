<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function get_user()
    {
        $query = $this->db->get('nick');
        return $query->result();


    }

    public function login($nick, $haslo)
    {
        $this->db->where('nick', $nick);
        $this->db->where('haslo', $haslo);
        $query = $this->db->get('uzytkownicy');

        if($query->num_rows()>0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

}
