<?php $x = c("pages1")->pageIndex + 1;
$data = c("l$x")->caption;
if($data[0] == "*")
return;
else{
c("l$x")->caption = "*".c("l$x")->caption;
c("timer5")->enable = true;
}
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
