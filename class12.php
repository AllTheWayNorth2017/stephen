<?php
header("Content-type: text/html; charset=utf-8");
//	phpinfo();
//	exit;
//  $szUrl = "http://jwzx.cqupt.congm.in/jwzxtmp/showBjStu.php?bj=01141612";内网外入的
	$szUrl ="http://jwzx.cqupt.edu.cn/jwzxtmp/showBjStu.php?bj=01141612";//内网的
    $szUrl ="http://jwzx.cqupt.edu.cn/jwzxtmp/showBjStu.php?bj=12111601";//内网的
    $userragent = "Mozilla/5.0 (Windows; U; Windows NT 5.2) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $szUrl);
	//curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不输出Header，1表示输出
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//1表示不自动输出页面
	//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	//curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
	curl_setopt($curl, CURLOPT_USERAGENT, $userragent);
	//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	$string = curl_exec($curl);
    //echo $data;
	//curl_close($ch);
    $matchall = array();
    $pattern = "/<tr><td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<\/tr>/i";
    /*$preg = '#<td.+?>(.+?)</td>#';*/
    $result = preg_match_all($pattern, $string, $matchall);
    /*var_dump($matchall);
    echo "<hr />";
    print_r($matchall);
    echo "<hr>";*/
    //echo $result;
//    print_r($matchall);
	//array_column($records, 'first_name')//
	array_splice($matchall , 0 , 1);

	//var_dump($matchall);//有用的。
	// echo "<hr>";

	// var_dump(array_values($matchall));
	// $id = array_column($matchall,'0');
	// print_r($id);

//	foreach($matchall as $key => $val) {
//    	foreach($val as $value) {
//    	    $arr[] = $value;
//    	}
//	}
// 	var_dump($arr);

	$id = $matchall[0];
	//array_splice($id , 0 , 1);
	$stu_number = $matchall[1];
	//array_splice($stu_number , 0 , 1);
	$name = $matchall[2];
	//array_splice($name , 0 , 1);
	$sex = $matchall[3];
	//array_splice($sex , 0 , 1);
	$class_number = $matchall[4];
	//array_splice($class_number , 0 , 1);
	$pro_number = $matchall[5];
	//array_splice($pro_number , 0 , 1);
	$pro_name = $matchall[6];
	//array_splice($pro_name , 0 , 1);
	$col_name = $matchall[7];
	//array_splice($col_name , 0 , 1);
	$grades = $matchall[8];
	//array_splice($grades , 0 , 1);
	$status = $matchall[9];
//	array_splice($status , 0 , 1);
//	var_dump($id);
	try {
   		$config = require_once'config.php';
   		$pdo = new PDO($config['dsn'],$config['user'],$config['password']);
		for($i = 0; $i < 30; $i++) {
			$sql = "INSERT INTO students (id,stu_number,name,sex,class_number,pro_number,pro_name,col_name,grades) VALUES (" . $id[$i] .",'".$stu_number[$i] ."','". $name[$i] ."','". $sex[$i] ."','".$class_number[$i]."','".$pro_number[$i]."','". $pro_name[$i]."','".$col_name[$i]."','".$grades[$i]."')";
			echo $sql;
			//var_dump($pdo->exec($sql));
			$pdo->exec($sql);
		}
	} catch (PDOException $e) {
        	    echo "数据库错误：{$e->getMessage()}";
        }




