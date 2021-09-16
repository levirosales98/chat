<?php

    include "config.php";
    if($_POST) //si me mandan datos yo lo ejecuto
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $address = $_POST['address'];

        $sql = "INSERT INTO `register`(`name`, `email`, `password`, `number`, `address`) VALUES('".$name."','".$email."','".$password."','".$number."','".$address."')";

        $query = mysqli_query($conn, $sql); //aquí se ejecuta la instrucción

        if($query) //si se ejecutó la inserción de datos
        {
            session_start(); //permite trabajar con variables de sesion
            $_SESSION['name'] = $name;
            header('Location: home.php');
        }
        else{
            echo "Algo salió mal";
        }
    }
?>