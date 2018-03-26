<!-- 
Saate, günlere göre değişen yazılar ;)
Murat ALP
murat@alpilaclama.com.tr
www.ALPilaclama.com.tr
23.06.2018
 --->
<?
$gunler = array(
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
);


$gunlerPZT = array(
    '<b>Pazartesi sendromu :)</b>',
    '',
    '',
    '',
    '',
    '',
    ''
);
$gunlerSAL = array(
    '',
    '<b>Pazartesi Sendromu atlatıldı mı?</b>',
    '',
    '',
    '',
    '',
    ''
);
  
 $gunlerCBA = array(
    '',
    '',
    '<b>Ne başı ne sonu</b>',
    '',
    '',
    '',
    ''
);

$gunlerPBE = array(
    '',
    '',
    '',
    '<b>Sosyal medyada #TBT zamanı :)</b>',
    '',
    '',
    ''
);
$gunlerCUM = array(
    '',
    '',
    '',
    '',
    '<b>Hayırlı Cumalar mesajı aldın mı bugün?</b>',
    '',
    ''
);
 
 $gunlerCTE = array(
    '',
    '',
    '',
    '',
    '',
    '<b>Cumartesi yaşasın tatil.</b>',
    ''
);
  
 
$aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
);
 
$ay = $aylar[date('m') - 1];
$gun = $gunler[date('N') - 1];
$xpzt = $gunlerPZT[date('N') - 1];
$xsal = $gunlerSAL[date('N') - 1];
$xcba = $gunlerCBA[date('N') - 1];
$xpbe = $gunlerPBE[date('N') - 1];
$xcum = $gunlerCUM[date('N') - 1];
$xcte = $gunlerCTE[date('N') - 1];
 
$saat = date('H');
$dakika = date('i'); 
$zaman = date("H:i");

if ($zaman>="07:00" && $zaman<="10:30") {
echo "<br>Günaydın! Güzel bir gün olsun. $xpzt <b>$xpbe";
}

elseif ($zaman>="10:31" && $zaman<="11:59") {
echo "<br>$xpte İyi günler! güzel bir çay iyi gider?.";
}

elseif ($zaman>="12:00" && $zaman<="14:02") {
echo "<br>$xpte İyi günler! Bir şeyler yedin mi?. $xcum";
}

elseif ($zaman>="14:03" && $zaman<="16:00") {
echo "<br>$xcba, İyi günler! Güzel bir Türk Kahvesi?. $xsal";
}

elseif ($zaman>="16:01" && $zaman<="19:00") {
echo "<br>Mesainin son saatleri. $xpbe $xcte";
}

elseif ($zaman>="19:01" && $zaman<="23:59") {
echo "<br>OoOoO fazla mesai :) <b>$saat:$dakika</b> oldu halen çalışıyorsun.";
}

else {
echo "<br>İyi geceler! Saat <b>$saat:$dakika</b> oldu. Bence biraz dinlenmelisin. Site Robotu TıRrRR biiiPpP"; 
    
}
?><br>