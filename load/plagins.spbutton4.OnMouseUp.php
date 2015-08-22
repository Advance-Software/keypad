<?php global $plagname;
$data = file_get_contents("http://keypad-plus.16mb.com/$plagname"."_version");
pre("http://keypad-plus.16mb.com/$plagname"."_version");
if($data == false or $data == "" or $data == c("label2")->caption)
pre("Updates not found!");
else{
c("download1")->url = "http://keypad-plus.16mb.com/".$plagname.".kpp";
c("download1")->start();
}
