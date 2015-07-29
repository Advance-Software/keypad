<?php if(c("num")->items->count == 1 and c("shape3")->x == c("Form1")->w - 17){
app::close();
}
if(c("controltab")->caption == 1){
if(c("num")->items->count == 1 and c("shape3")->x != c("Form1")->w - 17){
return;
}
else{
$x = c("pages1")->pageIndex + 1;
$namet = "l";
}
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tl";
}
if(c("$namet$x")->caption[0] == "*")
$canClose = myFunc29();
else{
if(c("num")->items->count == 1 and c("shape3")->x == c("Form1")->w - 17){
app::close();
}
else{
myFunc9();
}
}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;
