<?php
// sesuaikan nama kelas, tetap extends ke Controller
class Home extends Controller
{
  // method default
  public function index()
  {
<<<<<<< HEAD
    $this->view('cpd/index');
=======
    $this->view('Sd/index');
>>>>>>> 10f3e757c2ca89a3c4fc78cac86f38896e7eb897
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
}
