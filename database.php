<?php

$connection = mysqli_connect(
  'localhost', 'Qatest', 'Quito.2019', 'ci-test'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
