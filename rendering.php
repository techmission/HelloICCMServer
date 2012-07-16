<?php

require_once 'lib/fabpot-Twig-b01da99/lib/Twig/Autoloader.php';

function render_template($tpl_name, $vars=array()) {
  Twig_Autoloader::register();

  $loader = new Twig_Loader_Filesystem('templates/');
  $twig = new Twig_Environment($loader, array(
  ));
  return $twig->render('pages/' . $tpl_name . '.tpl', $vars);
}

?>
