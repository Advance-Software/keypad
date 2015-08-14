<?php if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(c("search->edit1")->text != c("$namet$x")->selText)
c("search->edit1")->text = c("$namet$x")->selText;
c("search->checkbox1")->checked = false;
sd();
