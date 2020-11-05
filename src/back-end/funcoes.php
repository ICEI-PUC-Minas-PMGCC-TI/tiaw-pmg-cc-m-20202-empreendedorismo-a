<?php

function inputVazio($nome, $email, $usuario, $senha, $senhaconf){

    $result;
    if(empty($nome) || empty($email) || empty($usuario) || empty($senha) || empty($senhaconf)){

            $result = true;
    }else{

        $result = false;
    }

    return $result;
}

function usuarioInvalido($usuario){

    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $usuario)){

        $result = true;
    }else{

        $result = false;
    }

    return $result;
}

function emailInvalido($email){

    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $result = true;
    }else{

        $result = false;
    }
    
    return $result;
}

function senhaNaoBate($senha, $senhaconf){

    $result;
    if($senha !== $senhaconf){

        $result = true;
    }else{

        $result = false;
    }
    
    return $result;
}

function usuarioExiste($conn, $usuario, $email){

    $sql = "SELECT * FROM usuario WHERE usu_usuario = ? OR usu_email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("location: ../front-end/signup.php?error=stmtfalhou");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $usuario, $email);

    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultado)){

        return $row;
    }else{

        $result = false;

        return $result;
    }

    mysqli_stmt_close($stmt);
}

function criarUsuario($conn, $nome, $usuario, $email, $senha){

    $sql = "INSERT INTO usuario (usu_nome, usu_usuario, usu_email, usu_senha) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){

        header("location: ../front-end/signup.php?error=stmtfalhou");
        exit();
    }

    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $nome, $usuario, $email, $hashedSenha);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../../index.php?error=nenhum");
    exit();
}

function inputVazioLogin($nome, $senha){

    $result;
    if(empty($nome) || empty($senha)){

            $result = true;
    }else{

        $result = false;
    }

    return $result;
}

function loginUsuario($conn, $nome, $senha){

    $usuarioExiste = usuarioExiste($conn, $nome, $nome);

    if($usuarioExiste == false){

        header("location: ../front-end/login.php?error=loginfalhou");
        exit();
    }

    $pwd_hashed = $usuarioExiste["usu_senha"];
    $checkPwd = password_verify($senha, $pwd_hashed);

    if($checkPwd == false){

        header("location: ../front-end/login.php?error=loginfalhou");
        exit();
    }else if($checkPwd == true){

        session_start();
        $_SESSION["usu_id"] =  $usuarioExiste["usu_id"];
        $_SESSION["usu_usuario"] =  $usuarioExiste["usu_usuario"];
        header("location: ../../index.php");
        exit();
    }
}

?>