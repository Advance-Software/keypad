<?php if(c("controltab")->caption == 1){
global $start,$datatext,$datatext2;
if($start == 1){
$start = 0;
$textd = 0;
c("tfiles")->text = "";
c("tnum")->text = "";
}
else{
global $textd;
$textd += 1;
if(c("files")->items->count != c("tfiles")->items->count){
c("tfiles")->items->add("memo$textd");
c("tnum")->items->add($textd);
}
else{
if(c("files")->items->selected == false){
c("files")->itemIndex = c("tfiles")->itemIndex = c("num")->itemIndex = c("tnum")->itemIndex = 0;
$name = c("files")->items->selected;
$name2 = c("tfiles")->items->selected;
c("$name")->name = $name2;
$x2 = c("num")->items->selected;
c("c$x2")->name = "c".c("tnum")->items->selected;
c("l$x2")->name = "l".c("tnum")->items->selected;
c("fn$x2")->name = "fn".c("tnum")->items->selected;
c("n$x2")->name = "n".c("tnum")->items->selected;
}
else{
if(c("files")->itemIndex == c("files")->items->count - 1){
global $textd;
$textd = 0;
c("files")->text = c("tfiles")->text;
c("num")->text = c("tnum")->text;
c("tnum")->text = $datatext2;
c("tfiles")->text = $datatext;

global $name;
c("controltab")->caption = 1;
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->visible = false;}
$x = c("pages1")->pageIndex + 1;
c("memo$x")->show();
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->show();
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
c("memo$x")->x = c("memo1")->x;
c("memo$x")->w = c("memo1")->w;
c("memo$x")->h = c("memo1")->h;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->h = c("tmemo1")->h;
c("tmemo$x1")->x = c("tmemo1")->x;
c("listBox2")->itemIndex = c("pages1")->pageIndex;
$name = c("n$x")->caption;
c("Form1")->caption = "$name - KeyPad+";

$Len1 = strlen($name);
$format = $name[$Len1-3].$name[$Len1-2].$name[$Len1-1];
if($format == "tml")
c("panel4")->text = " HTML file";
if($format == "cpp" or $format == ".~h" or $format[1].$format[2] == ".h")
c("panel4")->text = " C++ source file";
if($format == "htm")
c("panel4")->text = " HTM file";
if($format == "php")
c("panel4")->text = " php file";
if($format == "inf")
c("panel4")->text = " MS ini file";
if($format == "css")
c("panel4")->text = " Cascade Style Sheets File";
if($format == "xml")
c("panel4")->text = " eXtensible Markup Language file";
if($format == "kpp")
c("panel4")->text = " KeyPad plugin file";
if($format == "ini")
c("panel4")->text = " INI file";
if($format != "inf" and $format != "tml" and $format != "htm"
 and $format != "php" and $format != "ini" and $format != "css" and $format != "xml"
 and $format != "kpp" and $format != "cpp" and $format != ".~h"
  and $format[1].$format[2] != ".h")
c("panel4")->text = " Normal text file";

c("pages1")->delete(c("pages1")->pageIndex);
c("listBox1")->items->delete(c("listBox1")->itemIndex);
c("coders")->items->delete(c("pages1")->pageIndex);
c("timer2")->enable = false;
c("timer4")->enable = true;
}
else{
c("files")->itemIndex +=1;
c("num")->itemIndex +=1;
c("tnum")->itemIndex = c("num")->itemIndex;
c("tfiles")->itemIndex = c("files")->itemIndex;
$name = c("files")->items->selected;
$name2 = c("tfiles")->items->selected;
c("$name")->name = $name2;
$x2 = c("num")->items->selected;
c("c$x2")->name = "c".c("tnum")->items->selected;
c("l$x2")->name = "l".c("tnum")->items->selected;
c("fn$x2")->name = "fn".c("tnum")->items->selected;
c("n$x2")->name = "n".c("tnum")->items->selected;
}
}
}
}
}
if(c("controltab")->caption == 2){
global $start,$datatext,$datatext2;
if($start == 1){
$start = 0;
$textd = 0;
c("files")->text = "";
c("num")->text = "";
}
else{
global $textd;
$textd += 1;
if(c("tfiles")->items->count != c("files")->items->count){
c("files")->items->add("tmemo$textd");
c("num")->items->add($textd);
}
else{
if(c("tfiles")->items->selected == false){
c("tfiles")->itemIndex = c("files")->itemIndex = c("num")->itemIndex = 
c("tnum")->itemIndex = 0;
$name = c("tfiles")->items->selected;
$name2 = c("files")->items->selected;
c("$name")->name = $name2;
$x2 = c("tnum")->items->selected;
c("tc$x2")->name = "tc".c("num")->items->selected;
c("tl$x2")->name = "tl".c("num")->items->selected;
c("tfn$x2")->name = "tfn".c("num")->items->selected;
c("tn$x2")->name = "tn".c("num")->items->selected;
}
else{
if(c("tfiles")->itemIndex == c("tfiles")->items->count - 1){
global $textd;
$textd = 0;
c("tfiles")->text = c("files")->text;
c("tnum")->text = c("num")->text;
c("num")->text = $datatext2;
c("files")->text = $datatext;

global $name;
c("controltab")->caption = 2;
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->visible = false;}
$x = c("pages1")->pageIndex + 1;
c("memo$x")->show();
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->show();
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
c("memo$x")->x = c("memo1")->x;
c("memo$x")->w = c("memo1")->w;
c("memo$x")->h = c("memo1")->h;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->h = c("tmemo1")->h;
c("tmemo$x1")->x = c("tmemo1")->x;
c("tlistBox2")->itemIndex = c("pages3")->pageIndex;
$name = c("tn$x")->caption;
c("Form1")->caption = "$name - KeyPad+";

$Len1 = strlen($name);
$format = $name[$Len1-3].$name[$Len1-2].$name[$Len1-1];
if($format == "tml")
c("panel4")->text = " HTML file";
if($format == "cpp" or $format == ".~h" or $format[1].$format[2] == ".h")
c("panel4")->text = " C++ source file";
if($format == "htm")
c("panel4")->text = " HTM file";
if($format == "php")
c("panel4")->text = " php file";
if($format == "inf")
c("panel4")->text = " MS ini file";
if($format == "css")
c("panel4")->text = " Cascade Style Sheets File";
if($format == "xml")
c("panel4")->text = " eXtensible Markup Language file";
if($format == "kpp")
c("panel4")->text = " KeyPad plugin file";
if($format == "ini")
c("panel4")->text = " INI file";
if($format != "inf" and $format != "tml" and $format != "htm"
 and $format != "php" and $format != "ini" and $format != "css" and $format != "xml"
 and $format != "kpp" and $format != "cpp" and $format != ".~h"
  and $format[1].$format[2] != ".h")
c("panel4")->text = " Normal text file";

c("pages3")->delete(c("pages3")->pageIndex);
c("tlistBox1")->items->delete(c("tlistBox1")->itemIndex);
c("tcoders")->items->delete(c("pages3")->pageIndex);
c("timer2")->enable = false;
c("timer4")->enable = true;
}
else{
c("tfiles")->itemIndex +=1;
c("tnum")->itemIndex +=1;
c("num")->itemIndex = c("tnum")->itemIndex;
c("files")->itemIndex = c("tfiles")->itemIndex;
$name = c("tfiles")->items->selected;
$name2 = c("files")->items->selected;
c("$name")->name = $name2;
$x2 = c("tnum")->items->selected;
c("tc$x2")->name = "tc".c("num")->items->selected;
c("tl$x2")->name = "tl".c("num")->items->selected;
c("tfn$x2")->name = "tfn".c("num")->items->selected;
c("tn$x2")->name = "tn".c("num")->items->selected;
}
}
}
}
}
