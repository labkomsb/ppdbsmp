<?php
// sesuaikan nama kelas, tetap extends ke Controller
class Cpd extends Controller
{
  // method default
  public function index()
  {
    $this->view('cpd/index');
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

  public function login()
  {
    $this->view('cpd/login');
  }
  
  public function form(){
    $this->view('cpd/form');
  // method default
  }
  
  public function baru(){
    // $this->view('cpd/cpd-baru');
    if ( $this->model('Model_cpd')->cpdTambah($_POST) > 0 ){
      header("Location:".BASEURL."cpd/");
    }else{
      echo "Pendaftaran Gagal";
    }
  // method default
  }

  public function jurnal()
  {
    $this->view('cpd/jurnal');
  }

  public function baru ()
  {
    $this->view('cpd/cpdBaru');
    $this->model('Model_cpd')->cpdTambah($_POST);
  }

}
