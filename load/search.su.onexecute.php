<?php if(c("checkbox1")->checked == true){
if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
$text = c("Form1->$namet$x")->text;
$pos = strrpos($text, c("edit1")->text);
if ($pos === false)
return;
else
c("Form1->search3")->enable = true;
}
else{
global $pretext;
c("Search_text")->caption = c("edit1")->text;
if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
$pretext = c("Form1->$namet$x")->text;
loadsearch();
//loading...
$data = c("search")->caption;
c("search")->caption = $pretext;
c("search")->caption = $data;
//-----------------------------------
if($pretext != c("Form1->pmemo2")->text){
c("Form1->pmemo2")->text = c("Form1->$namet$x")->text;
startsearch();
}
if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
$text = c("Form1->$namet$x")->text;
$pos = strrpos($text, c("Search_text")->caption);
if ($pos === false)
return;
else
c("Form1->search33")->enable = true;
}
if(c("checkbox3")->checked == true)
c("search")->hide();
else
return;
