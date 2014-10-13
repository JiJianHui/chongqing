<?php
class UserModel extends CI_Model {
    public function exists($username, $password) {
        $res = $this->db->query('SELECT * FROM Users WHERE eMail = \''.$username.'\'');
        
        if($res->num_rows() <= 0) {
            return -1; // User doesn't exist
        } else {
            $res = $this->db->query('SELECT * FROM Users '
                    . 'WHERE eMail = \''.$username.'\' and passWord = \''.$password.'\'');
            if($res->num_rows() <= 0) {
                return 0; // Password isn't correct
            } else {
                return 1;
            }
        }
    }
}