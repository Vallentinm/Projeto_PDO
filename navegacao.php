<?php
// switc é um if com varios casasos; break termina casa IF;
switch($_SERVER ['PATH_INFO']){
    case '/painel':
        require 'painel.php';
        break;
}
?>