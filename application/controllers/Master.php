<?php 
class Master extends CI_Controller{
    public function mas(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_mas.php');
    $this->load->model('record');
    $data['record'] = $this->record->sel_record();
    $data['record'] = $this->record->users();
    $this->load->view('master.php',$data);
    $this->load->view('temp/footer.php');
    }
}
?>