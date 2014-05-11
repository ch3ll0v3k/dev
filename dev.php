<?php
########################################################################
//set_time_limit(1200000);
//ini_set('memory_limit', '1024M');
########################################################################
$br = "\r\n";
########################################################################
$data_path = "./data/md5_out/";
$data_path = "/media/hash/md5_out/";
$file = $data_path.'test.dat';
echo "START\r\n<br/>";
//echo "Clear file \r\n";
//file_put_contents($file, '');
//echo "DONE\r\n";
// http://www.onlinehashcrack.com/?f342667d1b
########################################################################
$XX = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",0,1,2,3,4,5,6,7,8,9,"-","_",".","&","$","@","#");
// $XX = 69;
########################################################################
// For each 10.000.000.000 M - 3sec to write data


//69^5 = 1.564.031.349	 							/10M = 50mb  - 21sec block = | sec: 3284		 	  | min: 55 		   		 | hur: 1 			   | Day: 0
//69^6 = 107.918.163.081							/10M = 60mb  - 23sec block = | sec: 248211 		 	  | min: 4137       		 | hur: 69      	   | Day: 3
//69^7 = 7.446.353.252.589							/10M = 70mb  - 26sec block = | sec: 19360517 	 	  | min: 322675     		 | hur: 5378      	   | Day: 224
//69^8 = 513.798.374.428.641						/10M = 80mb  - 30sec block = | sec: 1541395122   	  | min: 25689919   		 | hur: 428165   	   | Day: 17840		   | Year: 337
//69^9 = 35.452.087.835.576.228						/10M = 90mb  - 32sec block = | sec: 113446681072 	  | min: 1890778018 		 | hur: 31512967 	   | Day: 1313040      | Year: 3597       | MILL: 3
//69^10 = 2.446.194.060.654.759.936					/10M = 100mb - 35sec block = | sec: 8561679212289     | min: 142694653538 	  	 | hur: 2378244226 	   | Day: 99093509     | Year: 271489	  | MILL: 271
//69^11 = 168.787.390.185.178.431.488				/10M = 110mb - 38sec block = | sec: 641392082703676   | min: 10689868045061 	 | hur: 178164467418   | Day: 7423519476   | Year: 20338410   | MILL: 20338   
//69^12 = 11.646.329.922.777.310.560.256			/10M = 120mb - 42sec block = | sec: 48914585675664704 | min: 8.1524309459441E+14 | hur: 13587384909907 | Day: 566141037913 | Year: 1551071337 | MILL: 1551071 | BILL: 1.5
# ----------------------------------------------
//69^13=803.596.764.671.634.552.389.632				/10M = 50mb
//69^14=55.448.176.762.342.778.209.304.576			/10M = 50mb
########################################################################
/*
$nr = 11646329922777310; // millions passwords
$sec = 42; 		 // sec for each 10 Million passwords
$nr = explode('|', (number_format((($nr)/10*$sec), 2, '|', '')));
echo '| sec: '.$nr[0].' | min: '.round($nr[0]/60).' | hur: '.round($nr[0]/60/60).' | Day: '.round($nr[0]/60/60/24).' | Year: '.round($nr[0]/60/60/24/365)."\r\n";
*/
/*
for($i=5; $i<15; $i++){
	echo '69^'.$i.'='.number_format(pow(69, $i), 2, ',', '.')."\r\n";
}

//echo round(1564*70/1024)."\r\n"; exit;
*/
################################################
$OUT = '';
$MAX_TO_OUT = 10000000;
$MAX_COUNTER = 0;
$K = 0;
$KK=0;

$from_name = 0;
$to_name = 0;
$loop_counter = 0;


//echo 'REMOVE THIS LINE'; exit;


$old_time = round((microtime(true)*1000)/1000);
$BIG_START = round((microtime(true)*1000)/1000);
###############################
for($_a=0;$_a<56;$_a++){ // 1
	for($_b=0;$_b<56;$_b++){ // 2
		for($_c=0;$_c<56;$_c++){ // 3
			for($_d=0;$_d<56;$_d++){ // 4
				for($_e=0;$_e<56;$_e++){ // 5
					for($_f=0;$_f<56;$_f++){ // 6
						for($_g=0;$_g<56;$_g++){ // 7
							for($_h=0;$_h<56;$_h++){ // 8
//								for($_i=0;$_i<56;$_i++){ // 9
//									for($_j=0;$_j<56;$_j++){ // 10
//										for($_k=0;$_k<56;$_k++){ // 11
//											for($_l=0;$_l<56;$_l++){ // 12
// a,b,c,d,e,f,g,h,i,j,k,l,     m,n,o,p,q,r,s,t,u,v,w,x,y,z
########################################################################
########################################################################
$loop_counter++;

$MAX_COUNTER++;

if($K==1000000){
	$K = 0; $KK++;
	$new_time = round((microtime(true)*1000)/1000);
	$mSec = ($new_time-$old_time); // 
	$old_time = round((microtime(true)*1000)/1000);
	echo $KK." - $mSec \r\n<br/>";
}
$K++;
if($MAX_COUNTER>=$MAX_TO_OUT){
	$MAX_COUNTER = 0;
	$to_name = $loop_counter;
//	echo "WRITING TO THE FILE $data_path.'_'.$from_name.'_'.$to_name\r\n<br/>";
//	file_put_contents($data_path.'_'.$from_name.'_'.$to_name, $OUT);
	$from_name = $loop_counter;
	sleep(2); 
	echo "Next run \r\n<br/>";
	unset($OUT);
	$OUT = '';
	echo "Gtime: ".(round((microtime(true)*1000)/1000)-$BIG_START)."\r\n<br/>";
	echo "END 57 line\r\n<br/>";
	exit;
}else{
	// a,b,c,d,e,f,g,h,i,j,k,l ,m,n,o,p,q,r,s,t,u,v,w,x,y,z
	$OUT .= $XX[$_a].$XX[$_b].$XX[$_c].$XX[$_d].$XX[$_e].$XX[$_f].$XX[$_g].$XX[$_h];//.$XX[$_i].$XX[$_j].$XX[$_k].$XX[$_l];
}
########################################################################
########################################################################
//											} // 12
//										} // 11
//									} // 10
//								} // 9
							} // 8
						} // 7
					} // 6
				} // 5
			} // 4
		} // 3
	} // 2
} // 1
###############################
	$to_name = $loop_counter;
	file_put_contents($data_path.'_'.$from_name.'_'.$to_name, $OUT);
	$from_name = $loop_counter;
	echo "\r\n =======\r\n THIS IS LAST ONE \r\n=======\r\n";
###############################
	echo "EXIT;\r\n<br/>";
	unset($OUT);
exit;
########################################################################
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HachCracker.nl</title>
	<link rel="stylesheet" href="css/ids.css"/>
	<!-- ========= -->
	<script type="text/javascript" src="js/temax.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<!-- ========================== START BODY ========================= -->
<div class="wrapper-box" id="wrapper-box">

</div>
<!-- ============================ END BODY ========================= -->
</body>
</html>
