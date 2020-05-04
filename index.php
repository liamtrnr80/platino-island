<?php
switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'src/index.php';
        break;
    case '/login':
        require 'src/login.php';
        break;
    default:
        http_response_code(404);
        require 'src/404.html';
        break;
}

?>