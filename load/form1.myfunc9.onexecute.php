<?php if(c("controltab")->caption == 1){
c("listBox1")->itemIndex = c("pages1")->pageIndex;
if(c("listBox1")->itemIndex == c("listBox1")->items->count-1){
$item = c("pages1")->pageIndex;
$x = c("pages1")->pageIndex + 1;
$filename = c("fn$x")->caption;
pre(strlen($filename));
c("listBox5")->text = "$filename\r\n".c("listBox5")->text;
$data = c("l$x")->caption;
$x = c("pages1")->pageIndex + 1;
c("memo$x")->free();
c("c$x")->free();
c("l$x")->free();
c("fn$x")->free();
c("n$x")->free();
c("pages1")->delete(c("pages1")->pageIndex);
c("listBox1")->items->delete(c("listBox1")->itemIndex);
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
c("listBox2")->items->delete($item);
c("coders")->items->delete(c("pages1")->pageIndex);
c("files")->items->delete(c("listBox1")->items->count);
c("num")->items->delete(c("listBox1")->items->count);
}
else{
c("spButton4")->enabled = false;
$x = c("pages1")->pageIndex + 1;
$filename = c("fn$x")->caption;
c("listBox5")->text = "$filename\r\n".c("listBox5")->text;
$data = c("l$x")->caption;
c("c$x")->free();
c("l$x")->free();
c("fn$x")->free();
c("n$x")->free();
$item = c("pages1")->pageIndex;
c("files")->itemIndex = c("num")->itemIndex = c("pages1")->pageIndex;
$in = c("num")->items->selected;
$obname = c("files")->items->selected;
c("files")->items->delete(c("files")->itemIndex);
c("$obname")->free();
c("num")->items->delete(c("num")->itemIndex);
global $datatext,$start,$datatext2;
$datatext = c("tfiles")->text;
$datatext2 = c("tnum")->text;
$start = 1;
c("timer2")->enable = true;
c("listBox2")->items->delete($item);
}
}
if(c("controltab")->caption == 2){
$filename = c("tfn1")->caption;
c("listBox5")->text = "$filename\r\n".c("listBox5")->text;
c("buder")->text = c("pages3")->pagesList;
if(c("buder")->items->count == 1){
c("controltab")->caption = 1;
c("shape3")->x = c("image35")->w;
c("buder")->text = "";
}
else{
c("tlistBox1")->itemIndex = c("pages3")->pageIndex;
if(c("tlistBox1")->itemIndex == c("tlistBox1")->items->count-1){
$item = c("pages3")->pageIndex;
$x = c("pages3")->pageIndex + 1;
$data = c("tl$x")->caption;
$x = c("pages3")->pageIndex + 1;
$filename = c("tfn$x")->caption;
c("listBox5")->text = "$filename\r\n".c("listBox5")->text;
c("tmemo$x")->free();
c("tc$x")->free();
c("tl$x")->free();
c("tfn$x")->free();
c("tn$x")->free();
c("pages3")->delete(c("pages3")->pageIndex);
c("tlistBox1")->items->delete(c("tlistBox1")->itemIndex);
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
c("tlistBox2")->items->delete($item);
c("tnum")->items->delete(c("tlistBox1")->items->count);
c("tcoders")->items->delete(c("pages3")->pageIndex);
c("tfiles")->items->delete(c("tlistBox1")->items->count);
c("tfiles")->items->delete(c("tlistBox1")->items->count);
}
else{
c("spButton4")->enabled = false;
$x = c("pages3")->pageIndex + 1;
$filename = c("tfn$x")->caption;
if($filename != "-")
c("listBox5")->text = "$filename\r\n".c("listBox5")->text;
$data = c("tl$x")->caption;
c("tc$x")->free();
c("tl$x")->free();
c("tfn$x")->free();
c("tn$x")->free();
$item = c("pages3")->pageIndex;
c("tfiles")->itemIndex = c("tnum")->itemIndex = c("pages3")->pageIndex;
$in = c("tnum")->items->selected;
$obname = c("tfiles")->items->selected;
c("tfiles")->items->delete(c("tfiles")->itemIndex);
c("$obname")->free();
c("tnum")->items->delete(c("tnum")->itemIndex);
global $datatext,$start,$datatext2;
$datatext = c("files")->text;
$datatext2 = c("num")->text;
$start = 1;
c("timer2")->enable = true;
c("tlistBox2")->items->delete($item);
}
}
}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
c("timer5")->enable = true;
