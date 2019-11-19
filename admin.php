<?php

use \Hcode\PageAdmin;
use \Hcode\DB\Sql;


$app->get('/admin/login', function() {

    countQntIpPer();

    $page = new PageAdmin( [
        "footer"=>false,
        "header"=>false
    ]);
	$page->setTpl("login-page");

});
$app->post('/admin/login', function() {

    
$token = $_POST['token'];
$action = $_POST['action'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LdCNsMUAAAAANsBiP4Kc05XkHR9TxEbPLw9kPk5",
    "response"=>$token,
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));



curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

$final = [];


if ($recaptcha["success"] && $recaptcha["action"] == $action && $recaptcha["score"] >= 0.6)
{
    
    header("Location: /admin");
    exit;
} else 
{
    header("Location: /admin/login");
    exit;
}
 



});

$app->get('/admin', function() {
    showVisitors(true);
    
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

$app->get('/admin/profile', function() {
   
    countQntIpPer();
    
    $page = new PageAdmin();
	$page->setTpl("user");

});

// ###################### DATA AJAX

$app->get('/admin/data/countQntIpPer', function() {



    echo json_encode(countQntIpPer(true));
    exit;

 
 });
 $app->get('/admin/data/showVisitors', function() {



    echo json_encode(showVisitors(false, true));
    exit;

 
 });
 $app->post('/admin/data/delVisitors', function() {



    delVisitors();
    exit;

 
 });

?>