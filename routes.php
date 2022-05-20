<?php

$router->get('PI_2022/index.php', 'controllers/index.controller.php');
$router->get('PI_2022/index.php/register', 'controllers/register.controller.php');
$router->get('PI_2022/index.php/student', 'controllers/student.controller.php');
$router->get('PI_2022/index.php/profesor', 'controllers/profesor.controller.php');
$router->get('PI_2022/index.php/detyratemia', 'controllers/detyratemia.controller.php');
$router->get('PI_2022/index.php/lendet', 'controllers/lendet.controller.php');
$router->get('PI_2022/index.php/dorezodetyren', 'controllers/dorezodetyren.controller.php');
$router->get('PI_2022/index.php/vleresimet', 'controllers/vleresimet.controller.php');
$router->post('PI_2022/index.php/names', 'controllers/add-name.php');
$router->get('PI_2022/index.php/detyratProf', 'controllers/detyratProf.controller.php');
$router->get('PI_2022/index.php/addDetyrat.view.php', 'controllers/addDetyra.controller.php');

?>