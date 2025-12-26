<?php 
class Client extends CI_Controller{
    public function users1(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_cli.php');
    $this->load->model('record');
    $data['record'] = $this->record->sel_record();
    $data['record'] = $this->record->serv();
    $this->load->view('users.php',$data);
    $this->load->view('temp/footer.php');
    }
    public function zakaz(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_cli.php');
    $this->load->model('services');
    $this->load->model('mastera');
    $this->load->model('record');
    $data['services'] = $this->services->selectServices();
    $data['masters'] = $this->mastera->selectMasters();
      if(!empty($_POST)){
            $id_masters = $_POST['id_masters'];
            $id_users = $this->session->userdata('id_users');
            $data = $_POST['data'];
            $time = $_POST['time'];
            $id_services = $_POST['id_services'];
            $this->load->model('record');
            $this->record->new_rec($id_masters, $id_users, $data, $time, $id_services);
             redirect('client/users1');
        }
    $this->load->view('zakaz.php', $data);
    $this->load->view('temp/footer.php');
    }
}
?>