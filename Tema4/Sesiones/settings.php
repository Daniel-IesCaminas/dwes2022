<?php
    # Dejaremos ya iniciada una sesión
    session_start();
    # aquí copiaremos nuestro hash MD5 obtenido con PHP-CLI
    const HASH_ACCESO = "85ce93e9490c0fe6a6431f45c8837de8";
    # formulario.html será el que pida el ingreso de user y pass al usuario
    const PAGINA_LOGIN = "formulario.html";
    # esta será una página cualquiera, con acceso restringido, a la cual
    # redirigir al usuario después de iniciar su sesión en el sistema
    const PAGINA_RESTRINGIDA_POR_DEFECTO = "pagina_de_muestra.php";
?>