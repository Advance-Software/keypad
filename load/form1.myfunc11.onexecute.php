<?php if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
global $coders;
$memo = c("$namet$x")->text;
if(preg_match("/А/", $memo)
or preg_match("/Б/", $memo)
or preg_match("/В/", $memo)
or preg_match("/Г/", $memo)
or preg_match("/Д/", $memo)
or preg_match("/Е/", $memo)
or preg_match("/Ё/", $memo)
or preg_match("/Ж/", $memo)
or preg_match("/З/", $memo)
or preg_match("/И/", $memo)
or preg_match("/Й/", $memo)
or preg_match("/К/", $memo)
or preg_match("/Л/", $memo)
or preg_match("/М/", $memo)
or preg_match("/Н/", $memo)
or preg_match("/О/", $memo)
or preg_match("/П/", $memo)
or preg_match("/Р/", $memo)
or preg_match("/С/", $memo)
or preg_match("/Т/", $memo)
or preg_match("/У/", $memo)
or preg_match("/Ф/", $memo)
or preg_match("/Х/", $memo)
or preg_match("/Ц/", $memo)
or preg_match("/Ч/", $memo)
or preg_match("/Ш/", $memo)
or preg_match("/Щ/", $memo)
or preg_match("/Ъ/", $memo)
or preg_match("/Ы/", $memo)
or preg_match("/Ь/", $memo)
or preg_match("/Э/", $memo)
or preg_match("/Ю/", $memo)
or preg_match("/Я/", $memo)
or preg_match("/а/", $memo)
or preg_match("/б/", $memo)
or preg_match("/в/", $memo)
or preg_match("/г/", $memo)
or preg_match("/д/", $memo)
or preg_match("/е/", $memo)
or preg_match("/ё/", $memo)
or preg_match("/ж/", $memo)
or preg_match("/з/", $memo)
or preg_match("/и/", $memo)
or preg_match("/й/", $memo)
or preg_match("/к/", $memo)
or preg_match("/л/", $memo)
or preg_match("/м/", $memo)
or preg_match("/н/", $memo)
or preg_match("/о/", $memo)
or preg_match("/п/", $memo)
or preg_match("/р/", $memo)
or preg_match("/с/", $memo)
or preg_match("/т/", $memo)
or preg_match("/у/", $memo)
or preg_match("/ф/", $memo)
or preg_match("/х/", $memo)
or preg_match("/ц/", $memo)
or preg_match("/ч/", $memo)
or preg_match("/ш/", $memo)
or preg_match("/щ/", $memo)
or preg_match("/ъ/", $memo)
or preg_match("/ы/", $memo)
or preg_match("/ь/", $memo)
or preg_match("/э/", $memo)
or preg_match("/ю/", $memo)
or preg_match("/я/", $memo)
){
$coders = "windows-1251";
}
else{
$coders = "utf-8 w/o BOM";
}
