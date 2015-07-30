<?php global $name,$coders;

if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "l";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tl";
}

if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "c";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tc";
}
$data = c("$namet$x1")->caption;
if($data == "utf-8"){
c("cutf8")->checked = true;
c("cansi")->checked = false;
c("cutf8wob")->checked = false;
c("cucs2")->checked = false;
c("cucs22")->checked = false;
c("a66")->checked = false;
c("a77")->checked = false;
}
if($data == "windows-1251"){
c("cansi")->checked = true;
c("cutf8")->checked = false;
c("cutf8wob")->checked = false;
c("cucs2")->checked = false;
c("cucs22")->checked = false;
c("a66")->checked = false;
c("a77")->checked = false;
}
if($data == "ucs-2 Big Endian"){
c("cucs2")->checked = true;
c("cutf8")->checked = false;
c("cutf8wob")->checked = false;
c("cansi")->checked = false;
c("cucs22")->checked = false;
c("a66")->checked = false;
c("a77")->checked = false;
}
if($data == "utf-8 wo BOM"){
c("cutf8wob")->checked = true;
c("cutf8")->checked = false;
c("cucs2")->checked = false;
c("cansi")->checked = false;
c("cucs22")->checked = false;
c("a66")->checked = false;
c("a77")->checked = false;
}
if($data == "ucs-2 Little Endian"){
c("cucs22")->checked = true;
c("cutf8")->checked = false;
c("cutf8wob")->checked = false;
c("cansi")->checked = false;
c("cucs2")->checked = false;
c("a66")->checked = false;
c("a77")->checked = false;
}
if($data == "koi8-r"){
c("a66")->checked = true;
c("cutf8")->checked = false;
c("cutf8wob")->checked = false;
c("cansi")->checked = false;
c("cucs2")->checked = false;
c("cucs22")->checked = false;
c("a77")->checked = false;
}
if($data == "koi8-u"){
c("a77")->checked = true;
c("cutf8")->checked = false;
c("cutf8wob")->checked = false;
c("cansi")->checked = false;
c("cucs2")->checked = false;
c("cucs22")->checked = false;
c("a66")->checked = false;
}
if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(c("memo1")->wordWrap == true)
c("$namet$x1")->wordWrap = true;
else
c("$namet$x1")->wordWrap = false;
