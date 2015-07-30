<?php global $gfn;
$x1 = c("pages3")->pageIndex + 1;
if(c("tfn$x1")->caption != "-"){
$gfn = c("tfn$x1")->caption;
c("controltab")->caption = 1;
myFunc12();
$x = c("pages1")->pageIndex + 1;
c("l$x")->caption = c("tl$x1")->caption;
c("c$x")->caption = c("tc$x1")->caption;
c("fn$x")->caption = c("tfn$x1")->caption;
c("n$x")->caption = c("tn$x1")->caption;
c("memo$x")->text = c("tmemo$x1")->text;
}
else{
c("controltab")->caption = 1;
myFunc3();
$x = c("pages1")->pageIndex + 1;
c("l$x")->caption = c("tl$x1")->caption;
c("c$x")->caption = c("tc$x1")->caption;
c("fn$x")->caption = c("tfn$x1")->caption;
c("n$x")->caption = c("tn$x1")->caption;
c("memo$x")->text = c("tmemo$x1")->text;
}
c("tnum")->itemIndex +=1;
if(c("tnum")->itemIndex == c("tnum")->items->count-1){
global $gfn;
$x1 = c("pages3")->pageIndex + 1;
if(c("tfn$x1")->caption != "-"){
$gfn = c("tfn$x1")->caption;
c("controltab")->caption = 1;
myFunc12();
$x = c("pages1")->pageIndex + 1;
c("l$x")->caption = c("tl$x1")->caption;
c("c$x")->caption = c("tc$x1")->caption;
c("fn$x")->caption = c("tfn$x1")->caption;
c("n$x")->caption = c("tn$x1")->caption;
c("memo$x")->text = c("tmemo$x1")->text;
}
else{
c("controltab")->caption = 1;
myFunc3();
$x = c("pages1")->pageIndex + 1;
c("l$x")->caption = c("tl$x1")->caption;
c("c$x")->caption = c("tc$x1")->caption;
c("fn$x")->caption = c("tfn$x1")->caption;
c("n$x")->caption = c("tn$x1")->caption;
c("memo$x")->text = c("tmemo$x1")->text;
}
c("timer9")->enable = false;
}
