<?php
Class User_model extends CI_Model {

    function login($username, $password) {

        $this -> db -> select('id, nick, password, mail, realname');
        $this -> db -> from('DSCMS_users');
        $this -> db -> where('nick', $username);
        $this -> db -> where('password', hash('sha256', $password));
        $this -> db -> limit(1);
     
        $query = $this -> db -> get();
     
        if($query -> num_rows() == 1) {

            return $query->result();
        }

        else {

            return false;
        }
     }
}
