<?php global $global;
$global = 1;
c("search1")->formStyle = fsStayOnTop;
c("timer1")->enable = true;
c("checkbox2")->checked = c("search->checkbox2")->checked;
c("checkbox1")->checked = c("search->checkbox1")->checked;
c("checkbox3")->checked = c("search->checkbox3")->checked;
c("search")->hide();
c("search->timer1")->enable = false;
