<?php 
class Record extends CI_Model{
  public function new_rec($id_masters, $id_users, $data, $time, $id_services) {
  $sql = "INSERT INTO record (id_masters, id_users, data, time, id_services) VALUES (?, ?, ?, ?, ?)";
  $result = $this->db->query($sql, array($id_masters, $id_users, $data, $time,$id_services));
  return $result;
  }
public function ins_recod($id_record, $id_masters, $data, $time, $id_services, $statys){
    $sql = "INSERT INTO `record`(id_record, id_masters, data, time, id_services, statys) VALUES(?, ?, ?, ?, ?, ?)";
    $result = $this->db->query($sql, array($id_record, $id_masters, $data, $time, $id_services, $statys));
    return $this->db->insert_id();
    }
  public function sel_record(){
    $sql = "SELECT * FROM `record`";
    $result = $this->db->query($sql);
    return $result->result_array();
  }
   public function newrecord($id_users, $id_record, $data, $time, $id_masters, $id_services) {
  $sql = "INSERT INTO record (id_users, id_record, data, time, id_masters, id_services) VALUES (?, ?, ?, ?, ?, ?)";
  $result = $this->db->query($sql, array($id_users, $id_record, $data, $time, $id_masters, $id_services));
  return $result;
  }
  public function users(){
    $sql = "SELECT * FROM record join users on record.id_users = users.id_users";
    $result = $this->db->query($sql);
    return $result->result_array();
  }
    public function serv(){
    $sql = "SELECT * FROM record join services on record.id_services = services.id_services";
    $result = $this->db->query($sql);
    return $result->result_array();
  }
  }
?>