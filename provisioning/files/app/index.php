<?php 
  $config = require(__DIR__ . '/config.php');

  function db_status($config) {
    $connection = mysqli_connect(
      $config['db_host'],
      $config['db_user'],
      $config['mysql_password']
    );
    return $connection ? 'ok' : 'error'; 
  } 
?>
<!doctype HTML>
<html>
  <head>
    <title>App de ejemplo</title>
  </head>
  <body>
    <h2>Configuraci&oacute;n:</h2>
    <pre>
      <br /><?php echo htmlentities(print_r($config, true)); ?>
    </pre>
    <h2>Estado de conexi&oacute;n: <?php echo db_status($config); ?></h2>
  </body>
</html>