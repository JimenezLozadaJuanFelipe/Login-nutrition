<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
             <script>
                alert("Por favor debes iniciar sesion");
                window.location ="../index.php";
             </script>
    ';
    session_destroy();
    die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../Loginform/css/style_dashboard.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="navigate">
        <ul>

            <li class="list active">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Inicio</span>

                </a>
            </li>

            <li class="list ">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Perfil</span>

                </a>
            </li>

            <li class="list ">
            <b></b>
            <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </span>
                    <span class="title">Mensajes</span>

                </a>
            </li>

            <li class="list ">
            <b></b>
            <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Configuracion</span>

                </a>
            </li>

            <li class="list ">
            <b></b>
            <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Ayuda</span>

                </a>
            </li>

            <li class="list ">
            <b></b>
            <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Contrasena</span>

                </a>
            </li>

            <li class="list ">
            <b></b>
            <b></b>
                <a href="../php/cerrar_sesion.php">
                    <span class="icon">
                        <ion-icon name="exit-outline"></ion-icon>
                    </span>
                    <span class="title">Salir</span>

                </a>
            </li>
        </ul>

    </div>

    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../Loginform/js/dashboard.js"></script>

</body>

</html>