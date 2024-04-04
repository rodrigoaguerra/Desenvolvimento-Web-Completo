<?php
    
    session_start();

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    
    // remover indices do array de sessão
    //unset

    // unset($_SESSION['x']); // para remover o indice apenas se existir

    // destruir a variavel de sessão
    // session_destroy()

    session_destroy(); // será destruída
    //forçar um redirecionamento
    header('Location: index.php');
?>