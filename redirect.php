<?php
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['tlp']) && isset($_GET['alamat']) && isset($_GET['date']) && isset($_GET['pesan']) && isset($_GET['tipe']) && isset($_GET['ug']))
{

    $name = $_GET['name'];
    $email = $_GET['email'];
    $tlp = $_GET['tlp'];
    $alamat = $_GET['alamat'];
    $date = $_GET['date'];
    $pesan = $_GET['pesan'];
    $tipe = $_GET['tipe'];
    $text = '&text=➸ *Nama :* ' . $name . '%0A➸ *Email :* ' . $email . '%0A➸ *No Tlp :* ' . $tlp . '%0A➸ *Alamat :* ' . $alamat . '%0A➸ *Keperluan :* Saya ingin membuat janji temu pada ' . $date . '%0A➸ *Tipe :* ' . $tipe . '%0A➸ *Pesan :* ' . $pesan;
    $url_wa = $_GET['ug'];;
    header('Location:' . $url_wa . $text);
    exit;

};
?>
