<?php

    // integrasikoneksi 
    require_once('conection.php');

    // buat database
    $sql = "CREATE DATABASE higland_roastery";

    // buat database baru
    $sql = "CREATE DATABASE nokensoft";

    if ($conn->query($sql) === TRUE) {
        echo "database berasil dibuat";
    } else {
        echo "Database tidak berasil dibuat";
    }

?>