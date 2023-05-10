<?php
    session_start(); // Iniciar la sesión

    // Realizar cualquier acción que necesite la sesión activa
    
    // Cerrar la sesión
    session_destroy();
    
    // Redirigir a la página de inicio de sesión o a cualquier otra página que desees
    header("Location: /pfc/html/index.html");
    exit();
?>