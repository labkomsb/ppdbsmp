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

  public function form(){
    $this->view('cpd/form');
  }
}
