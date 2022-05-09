<?php

$router->get('PI_2022/index.php', 'controllers/index.controller.php');
$router->get('PI_2022/index.php/register', 'controllers/register.controller.php');
$router->get('PI_2022/index.php/student', 'controllers/student.controller.php');
$router->get('PI_2022/index.php/profesor', 'controllers/profesor.controller.php');
$router->post('PI_2022/index.php/names', 'controllers/add-name.php');
