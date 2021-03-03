<?php

$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";



$ask = "\e[97m[ \e[93m?\e[97m ] ";
$err = "\e[97m[ \e[91m!\e[97m ] ";
$suk = "\e[97m[ \e[92m+\e[97m ] ";

$logo = "
\e[92m [Author : Ahmad Prasetyo ]
\e[34m [Generator Code Redeem FF ]\n
\e[97m";

system("clear");
echo $logo;
echo $ask."Jumlah Kode Redeem :"; $jum = trim(fgets(STDIN));

for ($i = 1;$i <= $jum; $i++){
	$h = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$a = "1234567890";
	
	$r = $h.$a;
	$go = str_shuffle($r);
	$rand = substr($go, rand(0,20), 4);
	$rand2 = substr($go, rand(0,20), 4);
	$rand3 = substr($go, rand(0,20), 4);
	
	$res = $rand."-".$rand2."-".$rand3."\n";
	echo $res;
	
	}



?>