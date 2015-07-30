<?php if(c("Form1->controltab")->caption == 1){
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
c("Form1->search1")->enable = true;
