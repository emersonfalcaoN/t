<?php

use Pecee\SimpleRouter\SimpleRouter;
use sistema\Nucleo\Helpers_c;

try{
    SimpleRouter::setDefaultNamespace('sistema\Controlador');
    SimpleRouter::get(URL_SITE, 'SiteControlador@index');
    SimpleRouter::get(URL_SITE.'sobre-nos', 'SiteControlador@sobre');
    SimpleRouter::get(URL_SITE.'404', 'SiteControlador@erro404');
    SimpleRouter::get(URL_SITE.'post/{id}', 'SiteControlador@post');
    SimpleRouter::get(URL_SITE.'categoria/{id}', 'SiteControlador@categoria');
    SimpleRouter::start();
}catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $ex){
    if(!Helpers_c::localhost()){
        echo $ex;
    }else{
        Helpers_c::redirecionar('/Aula68-79.php/404');
    }
}
// SimpleRouter::setDefaultNamespace('sistema\Controlador');
// SimpleRouter::get(URL_SITE, 'SiteControlador@index');
// SimpleRouter::get(URL_SITE.'sobre-nos', 'SiteControlador@sobre');
// SimpleRouter::start();

?>