<form action="<?=BASEURL;?>smp/baru" method="post">
<!-- npsn* , nama , alamat , kecamatan , password , quota -->
    <table>
        <tbody>
            <tr>
                <td>NPSN</td>
                <td>
                    <input type="text" name="npsn" id="npsn">
                </td>
            </tr>

            <tr>
                <td>Nama SMP</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            
            <tr>
                <td>Kecamatan</td>
                <td>
                    <input type="text" name="kecamatan" id="kecamatan">
                </td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>

            <tr>
                <td>Quota</td>
                <td>
                    <input type="number" name="quota" id="quota">
                </td>
            </tr>

            <tr>
                <td>Periksa Data</td>
                <td>
                    <input type="submit" value="Registrasi">g
                </td>
            </tr>
        </tbody>
    </table>
</form>