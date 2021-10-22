<?php 
$file_counter = "counter.txt";

$fl = fopen($file_counter, "r+"); # fungsi untuk embuka file dengan read dan write kemudian ditampung dalam $fileload
$hit = fread($fl,filesize($file_counter)); #fungsi untuk membaca file counter.txt dan ditampung dalam variabel $hit

# menampilkan output dari ciunter.txt
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF> <tr>");
echo("<td width=250 valign=middle align=center>");
echo("<font face=verdana size=2 color=#FF0000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");

fclose($fl); #fungsi untuk menutup file

$fl=fopen($file_counter,"w+"); #untuk membuka file dengan fitur read dan write
$hit=$hit+1; #membuat increment dalam variabel $hit
fwrite($fl,$hit,strlen($hit)); #membuat fungsi untuk menulis isi dari variabel $hit ke dalam file counter.txt
fclose($fl); #fungsi untuk menutup file
?>
