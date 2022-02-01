<?php
// switc é um if com varios casasos; break termina casa IF; tudo isso faz as urls amigaveis
switch($_SERVER ['PATH_INFO']){
    case '/painel':
        require '../views/painel.php';
        break;
        case '/login':
            require '../index.php';
            break;
        case '':
            require '../index.php';
            break;
}
?>