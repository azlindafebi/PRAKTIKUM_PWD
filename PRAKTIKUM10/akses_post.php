
<?php
    $search='NIM';
    // Percabangan jika submit diklik maka eksekusi
    if(isset($_POST['submit'])){
        // untuk post 'cari' kosong tampilkan kata 'NIM' jika ada tampilkan isi dari variable cari
        $search = empty($_POST['cari']) ? 'NIM' : strtoupper($_POST['cari']);
        //Definisikan url untuk web service dengan post dari cari
        $url = "https://azlindafebi.000webhostapp.com/getdatapost.php?cari=" . $_POST['cari'];
        error_reporting(0);
    } else {
        //Definisikan url untuk web service
        $url = "https://azlindafebi.000webhostapp.com/getdatapost.php";
    }
?>
<div>
    <h3>Cari Mahasiswa [<?=$search?>]</h3>
    <!-- Form Pencarian dengan method POST -->
    <form action="#" method="POST">
        <!-- input dengan name cari -->
        <input name='cari' type="text">
        <!-- button dengan name submit --> 
        <button name='submit'> Cari </button>
    </form>
</div>

<?php
    //Buat http request ke url web service
    $client = curl_init($url);

    //Set option data dikembalikan sebagai string
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

    //Set option data dikembalikan sebagai string
    $response = curl_exec($client);

    //Dekode dari format json menjadi array
    //Simpan ke variabel result
    $result = json_decode($response);
    foreach ($result as $r) {
        echo "<p>";
        echo "NIM : " . $r -> nim . "<br />";
        echo "Nama : " . $r -> nama . "<br />";
        echo "jenis kel : " . $r -> jkel . "<br />";
        echo "Alamat : " . $r -> alamat . "<br />";
        echo "Tgl Lahir : " . $r -> tgllhr . "<br />";
        echo "</p>";
    }

