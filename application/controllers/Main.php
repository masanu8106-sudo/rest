<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
  public function index(){
    $role = $this->session->userdata('role');
    $this->load->view('temp/header.php');
    if(!empty($role)){
      if($role == 'Администратор'){
        $this->load->view('temp/nav_adm.php');
     }elseif($role == 'бухгалтер'){
        $this->load->view('temp/nav_byx.php');
      }elseif($role == 'Мастер'){
          $this->load->view('temp/nav_mas.php');
      }elseif($role == 'Клиент'){
        $this->load->view('temp/nav_cli.php');
      }
    }else{
        $this->load->view('temp/navbar.php');
      }
    $this->load->model('services');
    $data['services'] = $this->services->selectServices();
    $this->load->view('index.php', $data);
    $this->load->view('temp/footer.php');
   }
     public function index1(){
    $role = $this->session->userdata('role');
    $this->load->view('temp/header.php');
    if(!empty($role)){
      if($role == 'Администратор'){
        $this->load->view('temp/nav_adm.php');
     }elseif($role == 'бухгалтер'){
        $this->load->view('temp/nav_byx.php');
      }elseif($role == 'Мастер'){
          $this->load->view('temp/nav_mas.php');
      }elseif($role == 'Клиент'){
        $this->load->view('temp/nav_cli.php');
      }
    }else{
        $this->load->view('temp/navbar.php');
      }
    $this->load->model('services');
    $data['services'] = $this->services->selectServices();
    $this->load->view('index1.php', $data);
    $this->load->view('temp/footer.php');
   }
   public function reg(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/navbar.php');
    $this->load->view('registrations.php');
    $this->load->view('temp/footer.php');
   }
   public function reg_db(){
   if(!empty($_POST)){
    $fio = $_POST['fio'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $login = $_POST['login'];
      $password = $_POST['password'];
      $this->load->model('users');
      $this->users->ins_users($fio, $phone, $email, $login, $password);
      redirect('main/vx');
   }
   }
   public function vx(){
    $this->load->view('temp/header.php');
    $this->load->view('temp/navbar.php');
    $this->load->view('avtor.php');
    $this->load->view('temp/footer.php');
   }
   
   public function vx_db(){
    if(!empty($_POST)){
      $login = $_POST['login'];
      $password = $_POST['password'];
      $this->load->model('users');
      $users =  $this->users->sel_users($login, $password);
      if(!empty($users)){
        $this->session->set_userdata($users);
				redirect('main/index1');
			} else {
				echo 'Не верный логин и пароль';
			}
    }
   }
   public function exed(){
      $this->session->unset_userdata('role');
		redirect('main/index');
   }
}   
?>