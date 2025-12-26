<?php 
class byxgal extends CI_Controller{
    public function byxg(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/nav_byx.php');
    $this->load->model('record');
    $data['record'] = $this->record->sel_record();
    $data['record'] = $this->record->serv();
    $this->load->view('byxgalter.php', $data);
    $this->load->view('temp/footer.php');
    }
}
?>