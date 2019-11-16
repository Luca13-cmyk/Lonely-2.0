<?php

use \Hcode\PageAdmin;
use \Hcode\DB\Sql;


$app->get('/admin/login', function() {

    countQntIpPer();

    $page = new PageAdmin( [
        "footer"=>false,
        "header"=>false
    ]);
	$page->setTpl("login");

});

$app->get('/admin', function() {

    countQntIpPer();

    
    $page = new PageAdmin();
	$page->setTpl("dashboard");

});
$app->get('/admin/lembretes', function() {
    countQntIpPer();
    
    $page = new PageAdmin();
	$page->setTpl("lembretes");

});

$app->get('/admin/administracao', function() {
    countQntIpPer();
    
    $page = new PageAdmin();
	$page->setTpl("administracao");

});



$app->get('/admin/data/countQntIpPer', function() {



    echo json_encode(countQntIpPer(true));

 
 });

?>