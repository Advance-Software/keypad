<?php global $comname;
if(c("controltab")->caption == "1"){
c("pages1")->addPage($comname);
c("Form1")->caption = "$comname - KeyPad+";
c("listBox2")->items->add("$comname");
c("listBox1")->items->add("-");
$text = c("listBox1")->items->count;
$text = "memo$text";
c("files")->items->add("$text");
$text = c("listBox1")->items->count;
c("num")->items->add("$text");
c("pages1")->pageIndex = c("listBox1")->items->count-1;
$x = c("listBox1")->items->count;
c("pages1")->pageIndex = $x - 1;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "l".$x;
$obj->text = "new.txt";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "c".$x;
$obj->text = "utf-8";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "fn".$x;
$obj->text = "-";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "n".$x;
$obj->text = "new.txt";
$obj->visible = false;
$obj = new TSynEdit(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "memo".$x;
$obj->w = c("memo1")->w;
$obj->h = c("memo1")->h;
$obj->y = c("memo1")->y;
$obj->x = c("memo1")->x;
$obj->text = "";
$obj->onMouseDown = function($self){
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
$obj->onChange = function($self){
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
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->visible = false;}
gui_propSet(c("memo$x")->gutter, 'ShowLineNumbers', true);
c("memo$x")->show();
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->show();
c("coders")->items->add("utf-8");
}
if(c("controltab")->caption == "2"){
c("pages3")->addPage("$comname");
c("Form1")->caption = "$comname - KeyPad+";
c("tlistBox2")->items->add("$comname");
c("tlistBox1")->items->add("-");
$text = c("tlistBox1")->items->count;
$text = "tmemo$text";
c("tfiles")->items->add("$text");
$text = c("tlistBox1")->items->count;
c("tnum")->items->add("$text");
c("pages3")->pageIndex = c("tlistBox1")->items->count-1;
$x = c("tlistBox1")->items->count;
c("pages3")->pageIndex = $x - 1;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "tl".$x;
$obj->text = "new.txt";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "tc".$x;
$obj->text = "utf-8";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "tfn".$x;
$obj->text = "-";
$obj->visible = false;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "tn".$x;
$obj->text = "new.txt";
$obj->visible = false;
///////////////////////////////////////
$obj = new TSynEdit(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "tmemo".$x;
$obj->w = c("tmemo1")->w;
$obj->h = c("tmemo1")->h;
$obj->y = c("tmemo1")->y;
$obj->x = c("tmemo1")->x;
$obj->text = "";
$obj->onMouseDown = function($self){
global $name;
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
$x = c("pages3")->pageIndex + 1;
c("richEdit1")->text = c("tmemo$x")->text;
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
c("controltab")->caption = 2;
c("tlistBox2")->itemIndex = c("pages3")->pageIndex;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;};
$obj->onChange = function($self){
$x = c("pages3")->pageIndex + 1;
$data = c("tl$x")->caption;
if($data[0] == "*")
return;
else{
c("tl$x")->caption = "*".c("tl$x")->caption;
c("timer5")->enable = true;
}
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";};
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->visible = false;}
gui_propSet(c("tmemo$x")->gutter, 'ShowLineNumbers', true);
c("tmemo$x")->show();
$x1 = c("pages1")->pageIndex + 1;
c("memo$x1")->show();
c("tcoders")->items->add("utf-8");
}
global $name;
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
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->wordWrap = c("memo1")->wordWrap;}
c("timer5")->enable = true;
