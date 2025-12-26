<?php 
class Mastera extends CI_Model{
  public function selectMasters() {
        $sql = "SELECT * FROM masters";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
   
}
?>