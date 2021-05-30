<?php
require_once("Fruit.php");
$options = array("uri" => "http://localhost");
$server = new SoapServer(null, $options);
      $server->setClass('Fruit');
$server->handle();

    ?>