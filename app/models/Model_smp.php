<?php
class Model_smp
{
    private $table = "cpd";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function dataCPD(){
        // perintah menampilkan data (npsn,nama,jkel,tplahir,tglahir,sd)
        $sql = "";

        // bungkus perintah
        $this->db->query($sql);

        // binding bila perlu


        // eksekusi
        $this->db->execute();

        // tampung hasil pembacaan ke dalam variabel output
        $output = $this->db->fetch();

        // kembalikan output
        return $output;

    }

    public function registrasi($data){
        $sql = "INSERT INTO smp SET nama = :nama ,	alamat = :alamat , kecamatan = :kecamatan , password = :md5password , quota = :quota , npsn = :npsn";

        $this->db->query($sql);

        $md5password = md5($data['npsn']."_".$data['password']);

        $this->db->bind('nama' , $data['nama']);
        $this->db->bind('alamat' , $data['alamat']);
        $this->db->bind('kecamatan' , $data['kecamatan']);
        $this->db->bind('md5password' , $md5password);
        $this->db->bind('quota' , $data['quota']);
        $this->db->bind('npsn' , $data['npsn']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahProfil($data){
        $sql = "UPDATE smp SET nama = :nama ,	alamat = :alamat , kecamatan = :kecamatan , quota = :quota , WHERE npsn = :npsn";

        $this->db->query($sql);

        $this->db->bind('nama' , $data['nama']);
        $this->db->bind('alamat' , $data['alamat']);
        $this->db->bind('kecamatan' , $data['kecamatan']);
        $this->db->bind('quota' , $data['quota']);
        $this->db->bind('npsn' , $data['npsn']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function gantiPassword($data){
        $sql =
        $md5password = md5($data['npsn']."*".$data['password']); 
    }
    
    public function login ($data){
        $md5password=md5($data['npsn']."_".$data['password']);
        $sql="SELECT * from smp where password=:md5password";
        $this->db->query($sql);
        $this->db->bind('md5password' , $md5password);
        $this->db->execute();
        $baris=$this->db->rowcount();
        $login=$this->db->resultone();

        return array('rows'=>$baris , 'data'=>$login);

    }
}