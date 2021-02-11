<?php
if (isset($_POST['jenis']) && isset($_POST['produk']) && isset($_POST['ug']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tlp']) && isset($_POST['alamat']) && isset($_POST['date']) && isset($_POST['note']))
{
    $jenis = $_POST['jenis'];
    $produk = $_POST['produk'];
    $ug = $_POST['ug'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $date = $_POST['date'];
    $note = $_POST['note'];
    if ($jenis == '1')
    {
        $text = '&text=Assalamualaikum, dibawah ini adalah identitas saya :%0A%0A➸ *Nama :* ' . $name . '%0A➸ *No tlp :* ' . $tlp . '%0A➸ *Email :* ' . $email . '%0A➸ *Alamat :* ' . $alamat . '%0A%0AKeperluan saya adalah ingin membuat janji temu pada ' . $date . ', untuk membahas ' . $produk . ' terima kasih.%0A%0A*Note :* ' . $note;
        $url_wa = $_POST['ug'];;
        header('Location:' . $url_wa . $text);
        exit;
    }
    else
    {
        $text = '&text=Assalamualaikum, dibawah ini adalah identitas saya :%0A%0A➸ *Nama :* ' . $name . '%0A➸ *No tlp :* ' . $tlp . '%0A➸ *Email :* ' . $email . '%0A➸ *Alamat :* ' . $alamat . '%0A%0AKeperluan saya adalah ingin berkonsultasi tentang ' . $produk . ' terima kasih.%0A%0A*Note :* ' . $note;
        $url_wa = $_POST['ug'];;
        header('Location:' . $url_wa . $text);
        exit();
    }
  
};
?>
