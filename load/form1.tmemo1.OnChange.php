<?php $x = c("pages3")->pageIndex + 1;
$data = c("tl$x")->caption;
if($data[0] == "*")
return;
else{
c("tl$x")->caption = "*".c("tl$x")->caption;
c("timer5")->enable = true;
}
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
