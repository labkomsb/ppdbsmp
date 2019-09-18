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

}

