<?php
    $date = date("d M Y" . " - " . "H:i:s");

    // connect to database
    $db_conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PSSWD'], $_ENV['DB_NAME']);

    // insert a quote into the table
    if (mysqli_connect_error()) {
        //die("Connection failed: " . mysqli_connect_error());
        $value = "Connection failed: " . mysqli_connect_error();
    }
    else 
    {
        $value = "Tarea ingresada por una Function [ " . $date . " ]";
        $sql = "INSERT INTO tasks (task) VALUES ('" . $value . "')";
        mysqli_query($db_conn, $sql);
    }
    echo $value;
?>