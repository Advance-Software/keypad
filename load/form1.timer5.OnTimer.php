<?php c("memo1")->x = c("shape2")->x + c("shape2")->w;
c("memo1")->w = c("Form1")->w - c("memo1")->x  - (c("Form1")->w - c("shape3")->x);
c("memo1")->h = c("Form1")->h-50 - (c("Form1")->h - c("panel4")->y);
c("pages2")->w = c("shape2")->x;
c("shape1")->w = c("pages2")->w;
c("html")->w = c("pages2")->w - 10;
c("spButton22")->x = c("shape2")->x - 23;
c("richEdit1")->w = c("html")->w;
if(c("shape2")->x < 0)
c("label8")->visible = false;
else
c("label8")->visible = true;
if(c("shape3")->x < c("shape2")->x){
c("shape3")->x = c("Form1")->w/2;
c("shape2")->x = 183;
}
c("pages3")->x = c("shape3")->x + 11;
c("pages3")->w = c("Form1")->w - (c("shape3")->x + 11)- 17;
c("tmemo1")->x = c("shape3")->x + 11;
c("tmemo1")->w = c("Form1")->w - (c("shape3")->x + 11)- 17;
c("tmemo1")->h = c("memo1")->h;
if(c("shape3")->x == c("Form1")->w-17)
c("shape3")->visible = false;
else
c("shape3")->visible = true;
c("pages1")->x = c("memo1")->x;
c("pages1")->w = c("memo1")->w;
global $name;
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
if(c("controltab")->caption == 1){
c("coders")->itemIndex = c("pages1")->pageIndex;
c("panel3")->text = " ".c("c$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if(c("controltab")->caption == 2){
c("tcoders")->itemIndex = c("pages3")->pageIndex;
c("panel3")->text = " ".c("tc$x1")->caption;
$name = c("tl$x1")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if(c("controltab")->caption == 1)
c("memo$x")->font->size = c("memo1")->font->size;
if(c("controltab")->caption == 2)
c("tmemo$x1")->font->size = c("memo1")->font->size;
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
$data = clipboard_getText();
if(c("bufer")->caption != $data){
c("bufer")->caption = clipboard_getText();
c("listBox4")->text = $data;
c("listBox4")->itemIndex = 0;
c("listBox3")->items->add(c("listBox4")->items->selected);
c("map->listBox3")->text = c("listBox3")->text;
$nb = c("listBox3")->items->count-1;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "buf".$nb;
$obj->text = c("bufer")->caption;
$obj->visible = false;
}
if(c("map->listBox3")->text != c("listBox3")->text)
c("map->listBox3")->text = c("listBox3")->text;
c("listBox3")->w = c("html")->w;
c("gt->spButton2")->caption = c("load->spButton3")->caption;
c("scrollBox1")->w = c("html")->w;
c("scrollBox1")->h = c("html")->h;
c("scrollBox2")->w = c("html")->w;
c("scrollBox2")->h = c("html")->h;
c("memo$x")->w = c("memo1")->w;
c("memo$x")->h = c("memo1")->h;
c("memo$x")->x = c("memo1")->x;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->h = c("tmemo1")->h;
c("tmemo$x1")->x = c("tmemo1")->x;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$Len = strlen(c("memo$x")->text);
$lines = c("memo$x")->items->count + 1;
c("panel1")->text = " lenght : $Len  lines: $lines";
c("panel2")->text =  " col : ".c("memo$x")->caretX."  sel : ".strlen(c("memo$x")->selText);
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$Len = strlen(c("tmemo$x1")->text);
$lines = c("tmemo$x1")->items->count + 1;
c("panel1")->text = " lenght : $Len  lines: $lines";
c("panel2")->text =  " col : ".c("tmemo$x1")->caretX."  sel : ".strlen(c("tmemo$x1")->selText);
}
if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
if(strlen(c("$namet$x1")->selText) == 0){
c("sort_text")->enabled = false;
c("upcs")->enabled = false;
c("locs")->enabled = false;
c("image2")->visible = false;
c("spButton6")->enabled = false;
c("spButton7")->enabled = false;
c("spButton13")->enabled = false;
c("image7")->visible == false;
c("image20")->visible = true;
c("image21")->visible = true;
c("image22")->visible = true;
c("it_cut")->enabled = false;
c("it_delete")->enabled = false;
c("it_copy")->enabled = false;
c("p4")->enabled = false;
c("p5")->enabled = false;
}
else
{
c("sort_text")->enabled = true;
c("upcs")->enabled = true;
c("locs")->enabled = true;
c("p4")->enabled = true;
c("p5")->enabled = true;
c("it_cut")->enabled = true;
c("it_delete")->enabled = true;
c("it_copy")->enabled = true;
c("image2")->visible = true;
c("image7")->visible == false;
c("spButton6")->enabled = true;
c("spButton7")->enabled = true;
c("spButton13")->enabled = true;
c("image20")->visible = false;
c("image21")->visible = false;
c("image22")->visible = false;
}
if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "l";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tl";
}
if(c("$namet$x1")->caption[0] != "*"){
c("spButton9")->enabled = false;
c("spButton21")->enabled = false;
c("image23")->visible = true;
c("image24")->visible = true;
c("it_undo")->enabled = false;
c("it_redo")->enabled = false;
c("redo1")->enabled = false;
c("undo1")->enabled = false;
}
else{
c("spButton9")->enabled = true;
c("spButton21")->enabled = true;
c("image23")->visible = false;
c("image24")->visible = false;
c("it_undo")->enabled = true;
c("it_redo")->enabled = true;
c("redo1")->enabled = true;
c("undo1")->enabled = true;
}
if(c("shape2")->x == 50)
c("panel")->show();
else
c("panel")->hide();
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$name = c("l$x")->caption;
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$name = c("tl$x1")->caption;
}
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
c("Project")->w = c("html")->w;
c("Project")->h = c("html")->h;
