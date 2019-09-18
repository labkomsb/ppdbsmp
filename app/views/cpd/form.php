<form action="<?=BASEURL;?>Cpd/baru" method="post">
        <!--input teks untuk nisn-->
        <label for="nisn">NISN</label>
        <input type="text" name="nisn" id="nisn"><br/>

        <!--input teks untuk nama-->
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br/>

        <!--input password untuk jumlah password-->
        <label for="password">Password</label>
        <input type="password" name="password" id="pasword"><br/>

        <!--select untuk jenis kelamin-->
        <label for="jkel">Jenis Kelamin</label>
        <select name="jnKel" id="jnKel">
            <option value="L">Laki - Laki</option>
            <option value="P">Perempuan</option>
<<<<<<< HEAD
        </select><br/>
        
=======
        </select><br>
       
>>>>>>> 359aa88abc7f2f772ea3a693efef29b41d5513cc
        <!--input teks untuk tplahir-->
        <label for="tplahir">Tempat Lahir</label>
        <input type="text" name="tplahir" id="tplahir"><br/>

        <!--input teks untuk tanggal lahir-->
        <label for="tglahir">Tanggal Lahir</label>
        <input type="date" name="tglahir" id="tglahir"><br/>

        <!--input teks untuk sd-->
        <label for="sd">SD</label>
        <input type="text" name="sd" id="sd" list="datasd">
        <datalist id="datasd"></datalist>
        <br/>

        <!--input teks untuk smp-->
        <label for="smp">SMP</label>
        <input type="text" name="smp" id="smp"><br/>

        <!--input teks untuk nilai b.indonesia-->
        <label for="nbin">Nilai Bahasa indonesia</label>
        <input type="text" name="nbin" id="nbin"><br/>

        <!--input teks untuk nilai matematika-->
        <label for="nmat">Nilai Matematika</label>
        <input type="text" name="nmat" id="nmat"><br/>

        <!--input teks untuk nilai IPA-->
        <label for="nipa">Nilai IPA</label>
        <input type="text" name="nipa" id="nipa"><br/>

        <!--input teks untuk alamat-->
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat"><br/>
<<<<<<< HEAD
       
        <input type="submit" value="Daftar!">
    </form>
=======
        
        <input type="submit" value="Daftar !">
    </form>

<?php $this->view('template/jquery'); ?>

<script>

$(document).ready( function(){
    $("#sd").keyup( function(){
        // let namaSD = $("#sd").val();
        let namaSD = $(this).val();
        $.getJSON(
            `https://sarpras.dindikpora.banjarnegarakab.go.id/sd/datasources/Sekolah/sekolahCari/${namaSD}` , function(namasd){
                // bersihkan elemen dengan id=datasd dari komponen option
                $("#datasd option").remove();

                // baca satu per satu variabel namasd
                $.each( namasd , function(i,data){
                    // tambahkan option berisi npsn dan nama sd ke datalist datasd
                    $("#datasd").append(`
                    <option value='${data.npsn}'>${data.nama}</option>
                    `);
                })
            }
        )
    })
})

</script>
>>>>>>> 359aa88abc7f2f772ea3a693efef29b41d5513cc
