<?php

use \Hcode\Model\User;
use \Hcode\DB\Sql;

	function formatPrice($vlprice)
	{
		if (!$vlprice > 0) $vlprice = 0;
		return number_format( $vlprice, 2, ",", ".");
	}

	function checkLogin($inadmin = true)
	{
	
		return User::checkLogin($inadmin);
	
	}
	function getCurrentHost($hostpar)
	{
		$host = $_SERVER["REQUEST_URI"];
		if ($host === $hostpar)
		{
			return "active";
		}
		
	}
	
	function getUserName()
	{
	
		$user = User::getFromSession();
	
		return $user->getdesperson();
	
	}
	function dateRegister()
	{

		$user = User::getFromSession();
	
		return $user->getdtregister();
	
	}
	function countQntIpPer($return = false)
	{

    $date = date("d/m/Y H:i:s");
    $date = explode("/", $date);
    

    switch ($date[1]) {
        case '01':
            $mes = "desjan";
            break;
            case '02':
            $mes = "desfeb";
            break;
            case '03':
            $mes = "desmar";
            break;
            case '04':
            $mes = "desapr";
            break;
            case '05':
            $mes = "desmay";
            break;
            case '06':
            $mes = "desjun";
            break;
            case '07':
            $mes = "desjul";
            break;
            case '08':
            $mes = "desago";
            break;
            case '09':
            $mes = "desset";
            break;
            case '10':
            $mes = "desout";
            break;
            case '11':
            $mes = "desnov";
            break;
            case '12':
            $mes = "deszem";
            break;
    }
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_acessos");
    
    $valantigo = $results[0][$mes];
    $valantigo = (int)$valantigo;
    $sql->query("UPDATE tb_acessos  SET $mes = :val WHERE $mes = :valantigo", [
        ":val"=>(int)$valantigo+1,
        ":valantigo"=>$valantigo
    ]);
    if ($return)
    {
        
        $arr = [];
        $results = $sql->select("SELECT * FROM tb_acessos");
        $arr[0] = $results;
        $arr[1] = $results[0][$mes];
        return $arr;
    }
    
    // fazer com procedure quando for jogar no servidor !!
    // Teste
    // echo json_encode($data);
    }
    
    function showVisitors($insert, $return = false)
    {
        $sql = new Sql();

        if ($insert)
        {
            $sql->query("
                INSERT INTO tb_visitors (desip, dessystem)
                VALUES(:desip, :dessystem);
        
        ", [
            ":desip"=>$_SERVER["REMOTE_ADDR"],
            ":dessystem"=>$_SERVER['HTTP_USER_AGENT']
            ]);
        }
        
        if ($return)
        {
            $return = $sql->select("SELECT * FROM tb_visitors");
            return $return;
            
            
            // foreach ($return as $key => $value) {
                
            //     $value["dessystem"] = substr(strstr($value['dessystem'], ";"), 1);
                
            //     $system = explode(")", $value['dessystem']);
            //     array_push($arr, $system[0], $value["desip"]);
                

            //     // echo "<li style='line-height: 55px;'><b style='padding-left: 5px;'>IP:" . $value["desip"] . "</b> | <i style='color: #853bfa'>" . 
            //     //  $system[0] . "</i></li>";
                
            // }
            // return $arr;
            
            
        }


        // fazer com procedure quando for jogar no servidor !!
    }
    function delVisitors()
    {
        $sql = new Sql();

        $sql->query("TRUNCATE TABLE tb_visitors;");
        
    }

?>