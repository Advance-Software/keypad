<?php if(c("memo1")->wordWrap == true){
$data = "On";
}
else{
$data = "Off";
}
c("spButton26")->hint = "Word wrap : $data";
