<?php
    session_start();

    if(empty($_POST) or (empty($_POST['usuario']) or (empty($_POST['senha'])))){
        print "<script>location.href='./index.html';</script>";
    }
    
    include('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario ='{$usuario}' AND senha ='{$senha}' ";

    $res = $conn -> query($sql) or die($conn->error);
?>