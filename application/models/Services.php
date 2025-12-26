<?php 
class Services extends CI_Model{
    public function ins_services($name_services){
    $sql = "INSERT INTO `services`(`name_services`) VALUES(?)";
    $result = $this->db->query($sql, array($name_services));
    return $this->db->insert_id();
    }
    public function sel_services($id_services){
        $sql = "SELECT * FROM services WHERE id_services=?";
        $result = $this->db->query($sql, array($id_services));
        return $result->result_array();
    }

  public function selectServices() {
    $sql = "SELECT * FROM services";
    $result = $this->db->query($sql);
    return $result->result_array();
}
}
?>