<?php
/**
 * CHEAP Is minimal! but it is still helpful!
 * 
 */

 /**
  * Load a View & Pass Variables to it.
  *
  * @param string $name
  * @return 
  */
 function view($name, $vars = []) {

    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../views');
    
    $twig = new \Twig\Environment($loader, [
        'cache' => __DIR__. '/../cache/views',
    ]);
    
    echo $twig->render($name.'.twig.php', $vars);

 }