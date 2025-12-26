<?php
class Users extends CI_Model{
    public function ins_users($fio, $phone, $email, $login, $password){
        $sql = "INSERT INTO `users`(fio, phone, email, login, password, role) VALUES ('$fio', '$phone', '$email', '$login', '$password', 'Клиент')";
        $result = $this->db->query($sql);
        return $this->db->insert_id();
    }
    public function sel_users($login, $password){
        $sql =  "SELECT  * FROM users WHERE  login = ? AND password = ?";
        $result = $this->db->query($sql, array($login, $password));
        return $result->row_array();
    }
}
?>