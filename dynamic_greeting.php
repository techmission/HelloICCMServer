<?php

$names = array();
$fp = fopen( 'names.txt', 'r' ) or die('Couldn\'t open file');
while ( ! feof( $fp ) ) {
   $name = fgets( $fp, 1024 );
   if($name) $names[] = $name;
}

require_once 'rendering.php';
echo render_template('dynamic_greeting', array('names' => $names));

?>
