<?php
    #menampilkan output judul
    echo "<head><title>My Guest Book</title></head>";
    
    #membuka file guestbook.txt dengan mode read 
    $fp = fopen("guestbook.txt","r");
    echo "<table border=0>"; 

    #,e,buat perulangan untuk mengambil data dalam file.txt
    while ($isi = fgets($fp,80))
    {

        $pisah = explode("|",$isi); #memisahkan data

        #mengambil nilai dari variabel $pisah dengan index dimulai dari 0 
        echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>";
        echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr>
        <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }
    echo "</table>";

    #hyperlink dalam tampilan.html
    echo "<a href=tampilan.html> Klik Disini </a>Isi Form Buku Tamu";
?>