<?php c("map")->hide();
c("Form1->shape2")->x = 183;
global $map;
$map = 0;
c("Form1->pages2")->pageIndex = c("pages2")->pageIndex;
if(c("Form1->pages2")->pageIndex == 0){
c("Form1->richEdit1")->show();
c("Form1->html")->hide();
c("Form1->label8")->caption = "  Map";
c("Form1->listBox3")->hide();
}
if(c("Form1->pages2")->pageIndex == 1){
c("Form1->richEdit1")->hide();
c("Form1->html")->show();
c("Form1->listBox3")->hide();
c("Form1->label8")->caption = "  HTML tags";
}
if(c("Form1->pages2")->pageIndex == 2){
c("Form1->richEdit1")->hide();
c("Form1->html")->hide();
c("Form1->listBox3")->show();
c("Form1->label8")->caption = "  Clipboard";
}
c("Form1->timer5")->enable = true;
c("Form1->tree1")->text = c("tree1")->text;
c("Form1->tree1")->absIndex = c("tree1")->absIndex;
