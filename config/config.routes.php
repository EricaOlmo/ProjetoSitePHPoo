<?php 
//view
namespace Symfony\Component\Routing\Loader\Configurator; 

return function(RoutingConfigurator $routes){
$routes->add('home','/')	
	->controller(['SitePHP\Home','helloWorld']);
	
$routes->add('produto','/produto')->controller(['SitePHP\Produto','listarProdutos']); 
$routes->add('sobre','/sobre')->controller(['SitePHP\Sobre','listarSobre']); 
};




