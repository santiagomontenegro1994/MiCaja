<?php
// 1. Cargamos la configuración (La ruta es directa porque estamos en la raíz)
require_once 'config/db.php'; 

// 2. Iniciamos sesión (Comentado por ahora)
// session_start();

// 3. Redirección Directa al Dashboard
// Usamos BASE_URL para que la redirección sea absoluta y no falle
header('Location: ' . BASE_URL . 'modules/dashboard/index.php');
exit();

/* --- LÓGICA DE SEGURIDAD COMENTADA ---
if (isset($_SESSION['user_id'])) {
    header('Location: ' . BASE_URL . 'modules/dashboard/index.php');
} else {
    header('Location: ' . BASE_URL . 'login.php');
}
exit();
*/
?>