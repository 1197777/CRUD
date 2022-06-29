<?php

    if(isset($_POST['send'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $address= $_GET['address'];
        $besteming = $_GET['besteming'];
        $personen = $_GET['personen'];
        $besteming = $_GET['besteming'];
        $startDatum = $_GET['startDatum'];
        $eindDatum = $_GET['eindDatum'];

        $_REQUEST = " insert into boekingen(name, email, phone, address, bestemming, personen, besteming, startDatum, eindDatum,) values 
        ('$name', '$email', '$phone', '$address' ,'$bestemming' ,'$personen' ,'$besteming' ,'$startDatum' , '$eindDatum')";

        mysqli_quary($connection, $_REQUEST);

        header('from.php');
    }else{
        echo'er is een fout probeer opnieuw'
    }
?>