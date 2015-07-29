<?php 
if(substr($str, 0,3) == pack("CCC",0xef,0xbb,0xbf)) {
       $str = substr($str, 3);
}

return $str;
