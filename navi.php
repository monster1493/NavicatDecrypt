<?php
require_once 'src/NavicatPassword.php';

use FatSmallTools\NavicatPassword;

// Necesidad de especificar la versión, 11 o 12
//$navicatPassword = new NavicatPassword(11);
$navicatPassword = new NavicatPassword(12);

// Descifrar
//$decode = $navicatPassword->decrypt('15057D7BA390');
$decode = $navicatPassword->decrypt('27ADB2DE9AC37113071D22CC5421A263CC9B964CAD16107EB34F05EA1A021F1B');
echo $decode."\n";