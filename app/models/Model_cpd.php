<?php
class Model_template
{
    private $table = "cpd";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // tambah calon peserta didik
    public function cpdTambah($data){
        // tulis perintah insert
        $sql = "INSERT INTO cpd SET nama = :nama ,	sandi = :md5sandi	, jkel = :jnkel	, tplahir	= :tplahir , tglahir = :tglahir ,	sd = :npsnsd	, smp = :npsnsmp ,	nbin = :nbin ,	nmat = :nmat ,	nipa	= :nipa , alamat = :alamat , nisn = :nisn";

        // buat query
        $this->db->query($sql);

        // binding data
        $this->db->bind('nisn' , $data['nisn']);
        $this->db->bind('nama' , $data['nama']);
        $this->db->bind('md5sandi' , $data['']);
        $this->db->bind('jnkel' , $data['jnKel']);
        $this->db->bind('tplahir' , $data['tplahir']);
        $this->db->bind('tglahir' , $data['tglahir']);
        $this->db->bind('npsnsd' , $data['sd']);
        $this->db->bind('npsnsmp' , $data['smp']);
        $this->db->bind('nbin' , $data['nbin']);
        $this->db->bind('nmat' , $data['nmat']);
        $this->db->bind('nipa' , $data['nipa']);
        $this->db->bind('alamat' , $data['alamat']);

        //eksekusi
        $this->db->execute();

        //laporkan hasil penyimpanan
        return $this->db->rowCount();
    }
    
    // update calon peserta didik
    public function cpdUpdate($data){
    
    }
    
    // hapus calon peserta didik
    public function cpdHapus($data){
        
    }
    
    // menampilkan detil calon peserta didik
    public function cpdData($data){
        
    }
    
    // menampilkan daftar calon peserta didik
    public function cpdDaftar($data){
        
    }

}
