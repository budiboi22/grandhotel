<?php

Class Model_admin extends CI_Model {

    function check_admin($username, $password) {
        $this->db->select('id_admin, username, password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
?>

