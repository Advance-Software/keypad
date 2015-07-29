<?php if(c("memo1")->wordWrap == false){
$data = "On";
c("memo1")->wordWrap = true;
}
else{
$data = "Off";
c("memo1")->wordWrap = false;
}
c("spButton26")->hint = "Word wrap : $data";
c("it_switch")->checked = ! c("it_switch")->checked;
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->wordWrap = c("memo1")->wordWrap;}
c("timer5")->enable = true;
