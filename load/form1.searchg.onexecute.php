<?php 
if($ss <> ''){
    $text = $memo->text;
    switch($pp){
        case 'next' :
            $re = strpos($text, $ss, $memo->selStart + $memo->selLength);
            if(!$re and $memo->selStart <> 0){
                $memo->selStart = 0;
                $re = strpos($text, $ss, $memo->selStart + $memo->selLength);
            }
            if(c("Search->checkbox2")->checked == false){
            if(!$re and $memo->selStart <> ($len = strlen($text))){
                $memo->selStart = $len;
                $re = strrpos( substr($text, 0, $memo->selStart) , $ss);
            }
            }
        break;
        case 'prev' :
            $re = strrpos( substr($text, 0, $memo->selStart) , $ss);
            if(!$re and $memo->selStart <> ($len = strlen($text))){
                $memo->selStart = $len;
                $re = strrpos( substr($text, 0, $memo->selStart) , $ss);
            }
            if(c("Search->checkbox2")->checked == false){
            if(!$re and $memo->selStart <> 0){
                $memo->selStart = 0;
                $re = strpos($text, $ss, $memo->selStart + $memo->selLength);
            }
            }
        break;
    }
if($re !== false){
        $memo->selStart = $re;
        $memo->selLength = strlen($ss);
        return true;
    }
}
return false;
