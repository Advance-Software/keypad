<?php global $name;
c("listBox3")->w = c("html")->w;
c("gt->spButton2")->caption = c("load->spButton3")->caption;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$Len = strlen(c("memo$x")->text);
$lines = c("memo$x")->items->count + 1;
c("panel1")->text = " lenght : $Len  lines: $lines";
c("panel2")->text =  " col : ".c("memo$x")->caretX."  sel : ".strlen(c("memo$x")->selText);
c("panel3")->text = " ".c("c$x")->caption;
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$Len = strlen(c("tmemo$x1")->text);
$lines = c("tmemo$x1")->items->count + 1;
c("panel1")->text = " lenght : $Len  lines: $lines";
c("panel2")->text =  " col : ".c("tmemo$x1")->caretX."  sel : ".strlen(c("tmemo$x1")->selText);
c("panel3")->text = " ".c("tc$x1")->caption;
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
