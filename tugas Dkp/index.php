<html>

<head>


<body bgcolor="#A2D9FF" </head>




    <?php
echo "<center>";
echo "<font size=8>";
echo "<b>Kantin Brando<br>";
echo "<hr>";
echo "<table>";
$pilihpaket=$_POST['pilihpaket'];
$jumlah=$_POST['jumlah'];


$struk = [
    "pembelian tanpa struk = GERATIS!!",
    "pesanan tidak sesuai  = GERATIS!!",
 
];

echo "<h1>Struk Pembayaran:</h1>";
echo "<ul>";
foreach($struk as $note){
    echo "<li>$note</li>";
}
echo "</ul>";








class ucapan{
    var $pelangan;
    var $adik;
    function tampilkan_pelangan(){
        return "--Termakasih sudah berbelanja";

    }
    function pelangan_adik(){
        return " adik-adik--";
    }

}

if($pilihpaket=="paket 1")$harga="10000";
if($pilihpaket=="paket 2")$harga="15000";
if($pilihpaket=="paket 3")$harga="12000";
$totalharga=$jumlah*$harga;
$totalbayar=$totalharga;
echo "<tr><td>Pilihan Paket<td>: $pilihpaket";
echo "<tr><td>harga<td>: ";
echo "Rp." .number_format($harga,2,',',',');
echo "<tr><td>Jumlah<td>:$jumlah";
echo " <tr><td colspan=3><hr>";
echo "<tr><td> total harga<td>:";
echo "Rp." .number_format($totalharga,2,',',',');
echo "<tr><td> total bayar<td><br><br><br>:";
echo "Rp." .number_format($totalbayar,2,',',',');
$ucapan = new ucapan();
echo "<br>";
echo "<br>";
echo "<br>";
echo $ucapan->tampilkan_pelangan();
echo $ucapan->pelangan_adik();

?>