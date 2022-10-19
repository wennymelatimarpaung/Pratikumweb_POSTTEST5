<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
  
        $query = mysqli_query($db,"INSERT INTO menu (nama_menu,harga) VALUES ('$nama','$harga')");
        if($query){
            header("Location:admin.php");
        } else {
            echo "Add Error";
        }
    }
?>