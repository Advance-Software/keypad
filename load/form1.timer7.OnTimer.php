<?php 
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
$data = clipboard_getText();
if(c("bufer")->caption != $data){
c("bufer")->caption = clipboard_getText();
c("listBox4")->text = $data;
c("listBox4")->itemIndex = 0;
if(c("listBox4")->items->selected == "")
return;
else{
c("listBox3")->items->add(c("listBox4")->items->selected);
c("map->listBox3")->text = c("listBox3")->text;
$nb = c("listBox3")->items->count-1;
$obj = new TLabel(c("Form1"));
$obj->parent = c("Form1");
$obj->name = "buf".$nb;
$obj->text = c("bufer")->caption;
$obj->visible = false;
}
}
c("memo1")->x = c("shape2")->x + c("shape2")->w;
c("memo1")->w = c("image35")->w - c("memo1")->x  - (c("image35")->w - c("shape3")->x);
c("memo1")->h = c("Form1")->h-50 - (c("Form1")->h - c("panel4")->y);
c("pages2")->w = c("shape2")->x;
c("shape1")->w = c("pages2")->w;
c("html")->w = c("pages2")->w - 10;
c("spButton22")->x = c("shape2")->x - 23;
c("richEdit1")->w = c("html")->w;
c("pages3")->x = c("shape3")->x + 13;
c("pages3")->w = c("image35")->w - (c("shape3")->x + 13);
c("tmemo1")->x = c("shape3")->x + 13;
c("tmemo1")->w = c("image35")->w - (c("shape3")->x + 13);
c("tmemo1")->h = c("memo1")->h;
if(c("shape3")->x == c("image35")->w)
c("shape3")->visible = false;
else
c("shape3")->visible = true;
c("pages1")->x = c("memo1")->x;
c("pages1")->w = c("memo1")->w;
if(c("shape2")->x < 0)
c("label8")->visible = false;
else
c("label8")->visible = true;
if(c("shape3")->x < c("shape2")->x){
c("shape3")->x = c("Form1")->w/2;
c("shape2")->x = 183;
}
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
c("memo$x")->w = c("memo1")->w;
c("memo$x")->h = c("memo1")->h;
c("memo$x")->x = c("memo1")->x;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->h = c("tmemo1")->h;
c("tmemo$x1")->x = c("tmemo1")->x;
