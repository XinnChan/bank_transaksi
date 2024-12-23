<?php 

// Route mappings
$routes = [
    'home' => './index.php',
    'AmbangGroup' => 'Pages/AmbangGroup/form-ambangGroup.php',
    'bankRakyat' => 'Pages/BangRakyat/form-bankRakyat.php',
    'BankIslam' => 'Pages/BankIslam/form-bankIslam.php',
    'CIMB' => 'Pages/CIMB/fom-CIMB.php',
    'HongLeong' => 'Pages/HongLeongBank/form-HongLeong.php',
    'MayBank' => 'Pages/MayBank/form-MayBank.php',
    'brimo' => 'Pages/brimo/form-brimo.php',
  ];


  $routeName = 'home';
  
  // Generate the URL using the route name
  $url = $routes[$routeName];
?>