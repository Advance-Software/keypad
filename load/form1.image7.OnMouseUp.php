<?php if(c("shape3")->x <= c("shape2")->x + 200){
global $position,$firstpos;
$position = 0;
c("shape3")->x = $firstpos;
c("shape3")->color = c("Form1")->color;
}
if(c("shape3")->x > c("Form1")->w - 200){
global $position,$firstpos;
$position = 0;
c("shape3")->x = $firstpos;
c("shape3")->color = c("Form1")->color;
}
else{
global $position;
$position = 0;
}
c("timer7")->enable = true;
c("shape3")->color = c("Form1")->color;
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
c("memo$x")->w = c("memo1")->w;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->x = c("tmemo1")->x;
c("image7")->show();
$x = c("pages1")->pageIndex + 1;
$x1 = c("pages3")->pageIndex + 1;
c("memo$x")->w = c("memo1")->w;
c("memo$x")->h = c("memo1")->h;
c("memo$x")->x = c("memo1")->x;
c("tmemo$x1")->w = c("tmemo1")->w;
c("tmemo$x1")->h = c("tmemo1")->h;
c("tmemo$x1")->x = c("tmemo1")->x;
c("timer5")->enable = true;
