<?php

$name = $_GET['name'];
require_once 'rendering.php';
echo render_template('personal_greeting', array('name' => $name));

?>
