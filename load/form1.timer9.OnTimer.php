<?php global $obj;
if(c("tfiles")->itemIndex == c("tfiles")->items->count - 1){
$data = c("tfiles")->itemIndex+1;
c("files")->items->add("memo$data");
c("num")->items->add($data);
c("tn$data")->name = "n$data";
c("tfn$data")->name = "fn$data";
c("tl$data")->name = "l$data";
c("tc$data")->name = "c$data";

c("tmemo$data")->name = "memo$data";
$obj = c("memo$data");
myFunc22();

c("tfiles")->itemIndex = c("tnum")->itemIndex +=1;
c("tfiles")->text = "tmemo1";
c("tnum")->text = 1;
c("pages3")->pagesList = "new.txt";
c("shape3")->x = c("Form1")->w-17;
-
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
$name = c("l$x")->caption;
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
$x = c("pages1")->pageIndex + 1;
c("richEdit1")->text = c("memo$x")->text;
if(get_key_state(VK_RBUTTON)<0){
$x1 = cursor_pos_x();
$y1 = cursor_pos_y();
if(c("num")->items->count == 1){
c("mov")->enabled = false;
}
else
c("mov")->enabled = true;
c("popupMenu4")->popup($x1,$y1);
}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;
c("timer4")->enable = true;
c("timer9")->enable = false;
}
else{
$data = c("tfiles")->itemIndex+1;
c("files")->items->add("memo$data");
c("num")->items->add($data);
c("tn$data")->name = "n$data";
c("tfn$data")->name = "fn$data";
c("tl$data")->name = "l$data";
c("tc$data")->name = "c$data";

c("tmemo$data")->onMouseDown = function($self){
global $name;
$x = c("pages1")->pageIndex + 1;
$name = c("l$x")->caption;
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
$x = c("pages1")->pageIndex + 1;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("richEdit1")->text = c("$namet$x")->text;
if(get_key_state(VK_RBUTTON)<0){
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(strlen(c("$namet$x")->selText) == 0){
c("itcut")->enabled = false;
c("p2")->enabled = false;
c("p3")->enabled = false;
}
else{
c("itcut")->enabled = true;
c("p2")->enabled = true;
c("p3")->enabled = true;
}
c("popupMenu3")->popup(cursor_pos_x(),cursor_pos_y());
}
c("controltab")->caption = 1;
c("listBox2")->itemIndex = c("pages1")->pageIndex;
c("Form1")->caption = "$name - KeyPad+";
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;};
c("tmemo$data")->onChange = function($self){
$x = c("pages1")->pageIndex + 1;
$data = c("l$x")->caption;
if($data[0] == "*")
return;
else{
c("l$x")->caption = "*".c("l$x")->caption;
c("timer5")->enable = true;
}
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";};

c("tmemo$data")->name = "memo$data";
c("tfiles")->itemIndex = c("tnum")->itemIndex +=1;
}
