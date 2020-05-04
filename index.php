<?php
switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'src/index.php';
        break;
    case '/login':
        require 'src/login.php';
        break;
}

?>