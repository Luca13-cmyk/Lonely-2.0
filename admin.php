<?php

use \Hcode\PageAdmin;


$app->get('/admin/login', function() {

    

    $page = new PageAdmin( [
        "footer"=>false,
        "header"=>false
    ]);
	$page->setTpl("login");

});

$app->get('/admin', function() {
    
    $page = new PageAdmin();
	$page->setTpl("dashboard");

});
$app->get('/admin/lembretes', function() {
    
    $page = new PageAdmin();
	$page->setTpl("lembretes");

});

$app->get('/admin/administracao', function() {
    
    $page = new PageAdmin();
	$page->setTpl("administracao");

});



$app->get('/admin/data', function() {
    
    
    
    $data = [
        
       "Mar"=> [
            "nmVisitantes"=>5000,
            "date"=>"03"
       ],
        "Apr"=> [
            "nmVisitantes"=>8000,
            "date"=>"04"
        ]
    ];
    // $data = [
    
    //          "nmVisitantes"=>5000,
    //          "date"=>"01"

         
    //  ];
    $data = json_encode($data);
 
    echo $data;
    
 
 
 });

?>