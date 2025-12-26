<?php
class Admin extends CI_Controller{
    public function adminka(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_adm.php');
    $this->load->model('record');
    $data['record'] = $this->record->sel_record();
    $this->load->view('adminka.php', $data);
    $this->load->view('temp/footer.php');
   }
   public function zak(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_adm.php');
    $this->load->model('services');
    $this->load->model('mastera');
    $this->load->model('record');
    $data['services'] = $this->services->selectServices();
    $data['masters'] = $this->mastera->selectMasters();
    if(!empty($_POST)){
        $id_users = $this->session->userdata('id_users');
        $id_record = $_POST['id_record'];
        $data = $_POST['data'];
        $time = $_POST['time'];
            $id_masters = $_POST['id_masters'];
            $id_services = $_POST['id_services'];
            $this->load->model('record');
            $this->record->newrecord($id_users, $id_record, $data, $time, $id_masters, $id_services);
             redirect('admin/zak');
        }
    $this->load->view('zakazuser.php', $data);
    $this->load->view('temp/footer.php');
   }
}
?>