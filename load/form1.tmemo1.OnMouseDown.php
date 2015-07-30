<?php $x = c("pages3")->pageIndex + 1;
c("richEdit1")->text = c("tmemo$x")->text;
if(get_key_state(VK_RBUTTON)<0){
if(strlen(c("tmemo1")->selText) == 0){
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
c("controltab")->caption = 2;
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
c("tlistBox2")->itemIndex = c("pages3")->pageIndex;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;
