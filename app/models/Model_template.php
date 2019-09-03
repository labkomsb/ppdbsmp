<?php
class Model_template
{
    private $table = "nama tabel";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    
    public function contohQueryDB($data){
        /*
        $sql = "sebuah query ke sql. Misal: INSERT INTO tabel
        VALUES ( :kolom1 , :kolom2 , :kolom3 , :kolomX) "
        $this->db->query($sql);

        // binding data, mengamankan karakter aneh
        $this->db->bind('kolom1', $data['kolom1']);
        $this->db->bind('kolom2', $data['kolom2']);
        $this->db->bind('kolom3', $data['kolom3']);
        $this->db->bind('kolomX', $data['kolomX']);

        //eksekusi query setelah binding data
        $this->db->execute();

        // pesan baris terpengaruh
        return $this->db->rowCount();

        // kembalikan hasil pembacaan data, 1 baris;
        return $this->db->resultSet();

        // kembalikan hasil pembacaan data, banyak baris;
        return $this->db->resultOne();
        */
    }

}
