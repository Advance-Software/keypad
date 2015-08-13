<?php global $edit2;
if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(c("edit1")->text == c("edit3")->text){
messageBox("Error!","Message");
}
else{
if(c("search->checkbox1")->checked == true)
c("Form1->$namet$x")->text = str_replace(c("edit1")->text,$edit2,c("Form1->$namet$x")->text);
else
c("Form1->$namet$x")->text = str_ireplace(c("edit1")->text,$edit2,c("Form1->$namet$x")->text);
}
if(c("Form1->controltab")->caption == 1)
$x1 = c("Form1->pages1")->pageIndex + 1;
if(c("Form1->controltab")->caption == 2)
$x1 = c("Form1->pages3")->pageIndex + 1;
if(c("Form1->controltab")->caption == 1){
$data = c("Form1->l$x1")->caption;
if($data[0] == "*")
return;
else{
c("Form1->l$x1")->caption = "*".c("Form1->l$x1")->caption;
c("Form1->timer5")->enable = true;
}
}
if(c("Form1->controltab")->caption == 2){
$data = c("Form1->tl$x1")->caption;
if($data[0] == "*")
return;
else{
c("Form1->tl$x1")->caption = "*".c("Form1->tl$x1")->caption;
c("Form1->timer5")->enable = true;
}
}
