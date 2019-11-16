<?php

use \Hcode\Page;

$app->get('/', function() {
    
    countQntIpPer();
    
    
    $page = new Page();
    $page->setTpl("index");
   


});


?>