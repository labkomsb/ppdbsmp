<?php
// sesuaikan nama kelas, tetap extends ke Controller
class Smp extends Controller
{
  // method default
  public function index()
  {
      $this->view('smp/index');
    // membambil dara dari model Model
    /*
    $data['xxx'] = $this->model('Model_xxx')->method();
    // variabel untuk title bar
    $data['title']="Home Page";

    //
    $this->view('template/header',$data);
    $this->view('template/navbar');
    // mengirim $data ke body
    $this->view('home/index',$data);

    // bodh halaman
    $this->view('template/footer');
    */
  }

  // method default
  public function login()
  {
      $this->view('smp/login');
    
  }
  
  public function jurnal ()
  {
    $this->view('smp/jurnal');
  }
  

  public function registrasi(){
    $this->view('smp/registrasi');
  }

  public function baru(){
    if( $this->model('Model_smp')->registrasi($_POST) > 0 ){
      header("Location:".BASEURL."smp");
    }
  }
  public function otorisasi(){
    $this->view('smp/otorisasi');

  }
  public function ganti password(){
    $this->model('Model_smp')->gantiPassword($data);
  }
}
