<?php if(c("Form1")->caption[0] == "*"){
if(c("num")->items->count == 1 and c("shape3")->x == c("Form1")->w - 17){
$result = messageBox("Save changes?", "Close", MB_YESNOCANCEL);

   if( $result == idCancel ){

        return false;
        }
   if ( $result == idYes ){

        myFunc6();
        myFunc9();
        global $upd;
if($upd == 1)
run("C:/Users/".$_ENV['USERNAME']."/Desktop/Setup_KeyPad_En.exe");
           return true;
        }
        if( $result == idNo ){
myFunc9();
global $upd;
if($upd == 1)
run("C:/Users/".$_ENV['USERNAME']."/Desktop/Setup_KeyPad_En.exe");
return true;
}
}

   $result = messageBox("Save changes?", "Close", MB_YESNOCANCEL);

   if( $result == idCancel ){

        return false;
        }
   if ( $result == idYes ){

        myFunc6();
        myFunc9();
           return false;
        }
        if( $result == idNo ){
myFunc9();
return false;
}
}
else{
if(c("num")->items->count == 1 and c("shape3")->x == c("Form1")->w - 17){
global $upd;
if($upd == 1)
run("C:/Users/".$_ENV['USERNAME']."/Desktop/Setup_KeyPad_En.exe");
           return true;
}else{
myFunc10();
           return false;
           }

           }
