<?php if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("memo$x")->undo();
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tmemo$x")->undo();
}
c("timer5")->enable = true;
