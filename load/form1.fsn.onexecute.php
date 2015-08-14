<?php if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("search->edit1")->text = c("Form1->$namet$x")->selText;
c("search->Search_text")->caption = c("Form1->$namet$x")->selText;
c("search->checkbox1")->checked = false;
c("search")->show();
