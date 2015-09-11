<?php $data = file_get_contents("C:/KeyPad_config/version.txt");
if($data == false or $data == "" or $data == "5.5.1"){
pre("Updates not found!");
file_delete("C:/KeyPad_config/version.txt");
c("timer3")->enable = true;
}
else{
file_delete("C:/KeyPad_config/version.txt");
$result = messageBox("Update to version ".$data."?", "Update", MB_YESNO);
 if( $result == idNo ){
c("update")->hide();
        }
 if( $result == idYes ){
c("timer1")->enable = true;
c("timer2")->enable = true;
}
}
