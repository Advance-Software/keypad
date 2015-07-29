<?php global $gfn,$comname;
$comname = basename($gfn);
myFunc3();
$comname = "new.txt";
if(c("controltab")->caption == 1){
global $coders;
$x = c("pages1")->pageIndex + 1;
c("fn$x")->caption = $gfn;
c("l$x")->caption = c("n$x")->caption = basename($gfn);
$name = basename($gfn);
$fn = $gfn;
$name = basename($fn2);
    $data = file_get_contents( $gfn );
$data1 = $data;
    c("memo$x")->text = removeBOM($data);
            if($data == c("memo$x")->text and $data[0].$data[1] == "яю"){
                $coders = "ucs-2 Little Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("memo$x")->text = $data;
$text1 = c("memo$x")->text;
            }
    if ( $data != c("memo$x")->text and $data[0].$data[1] != "юя" and $data[0].$data[1] != "яю"){
    $coders = "utf-8";
        c("memo$x")->text = iconv('utf-8', 'windows-1251', removeBOM($data));
        if(filesize($gfn) > 0 and $data[0].$data[1].$data[2] != "п»ї"){
    c("memo$x")->text = $data;
    $coders = "windows-1251";
    myFunc11();
    }
        $text1 = c("memo$x")->text;
            }
            if($data == c("memo$x")->text and $data[0].$data[1] == "юя"){
                $coders = "ucs-2 Big Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("memo$x")->text = $data;
$text1 = c("memo$x")->text;
            }
if($data == c("memo$x")->text and $data1[1].$data1[0] != "яю" and $data1[1].$data1[0] != "юя"){
        $text1 = c("memo$x")->text;
        $coders = "utf-8 w/o BOM";
        myFunc11();
 }
if($data[0].$data[1] == "юя"){
$data = iconv('ucs-2','windows-1251',$data);
c("memo$x")->text = $data;
$text1 = c("memo$x")->text;
$coders = "ucs-2 Big Endian";

            }
            if($data[0].$data[1] == "яю"){
$coders = "ucs-2 Little Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("memo$x")->text = $data;
$text1 = c("memo$x")->text;
            }
            if(c("memo$x")->text == "" and strlen($data) > 0){
$coders = "utf-8 w/o BOM";
c("memo$x")->text = $data;
$text1 = c("memo$x")->text;
        myFunc11();
            }
    if(c("richEdit1")->text != c("memo$x")->text){
    c("memo$x")->text = c("richEdit1")->text;
}
c("memo$x")->text = $text1;
c("richEdit1")->text = c("memo$x")->text;
$Len1 = strlen($gfn);
$format = $fn[$Len1-3].$fn[$Len1-2].$fn[$Len1-1];
if($format == "tml" or $format == "htm"){
SHTML();
}
if($format == "php" or $format == "kpp" or $format == "ini" or $format == "inf"){
SPHP();
}
if($format == "xml"){
SXML();
}
if($format == "css"){
SCss();
}
if($format == "cpp" or $format == ".~h" or $format[1].$format[2] == ".h" ){
SCpp();
}
if($format == "sql"){
SSQL();
}
if($format == ".js"){
SJScript();
}
if($format == "sql"){
SSQL();
}
myFunc5();
c("c$x")->caption = $coders;
}
if(c("controltab")->caption == 2){
global $coders;
$x = c("pages3")->pageIndex + 1;
c("tfn$x")->caption = $gfn;
c("tl$x")->caption = c("tn$x")->caption = basename($gfn);
$name = basename($gfn);
$fn = $gfn;
$name = basename($fn2);
    $data = file_get_contents( $gfn );
$data1 = $data;
    c("tmemo$x")->text = removeBOM($data);
            if($data == c("tmemo$x")->text and $data[0].$data[1] == "яю"){
                $coders = "ucs-2 Little Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("tmemo$x")->text = $data;
$text1 = c("tmemo$x")->text;
            }
if ( $data != c("tmemo$x")->text and $data[0].$data[1] != "юя" and $data[0].$data[1] != "яю"){
    $coders = "utf-8";
        c("tmemo$x")->text = iconv('utf-8', 'windows-1251', removeBOM($data));
        if(filesize($gfn) > 0 and $data[0].$data[1].$data[2] != "п»ї"){
    c("tmemo$x")->text = $data;
    $coders = "windows-1251";
    myFunc11();
    }
        $text1 = c("tmemo$x")->text;
            }
if($data == c("tmemo$x")->text and $data[0].$data[1] == "юя"){
                $coders = "ucs-2 Big Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("tmemo$x")->text = $data;
$text1 = c("memo$x")->text;
            }
if($data == c("tmemo$x")->text and $data1[1].$data1[0] != "яю" and $data1[1].$data1[0] != "юя"){
        $text1 = c("tmemo$x")->text;
        $coders = "utf-8 w/o BOM";
        myFunc11();
 }
if($data[0].$data[1] == "юя"){
$data = iconv('ucs-2','windows-1251',$data);
c("tmemo$x")->text = $data;
$text1 = c("tmemo$x")->text;
$coders = "ucs-2 Big Endian";

            }
if($data[0].$data[1] == "яю"){
$coders = "ucs-2 Little Endian";
$data = iconv('ucs-2','windows-1251',$data);
c("tmemo$x")->text = $data;
$text1 = c("tmemo$x")->text;
            }
if(c("tmemo$x")->text == "" and strlen($data) > 0){
$coders = "utf-8 w/o BOM";
c("tmemo$x")->text = $data;
$text1 = c("tmemo$x")->text;
        myFunc11();
            }
if(c("richEdit1")->text != c("tmemo$x")->text){
    c("tmemo$x")->text = c("richEdit1")->text;
}
c("tmemo$x")->text = $text1;
c("richEdit1")->text = c("tmemo$x")->text;
$Len1 = strlen($gfn);
$format = $fn[$Len1-3].$fn[$Len1-2].$fn[$Len1-1];
if($format == "tml" or $format == "htm"){
SHTML();
}
if($format == "php" or $format == "kpp" or $format == "ini" or $format == "inf"){
SPHP();
}
if($format == "xml"){
SXML();
}
if($format == "css"){
SCss();
}
if($format == "cpp" or $format == ".~h" or $format[1].$format[2] == ".h" ){
SCpp();
}
if($format == "sql"){
SSQL();
}
if($format == ".js"){
SJScript();
}
if($format == "sql"){
SSQL();
}
myFunc5();
c("tc$x")->caption = $coders;
}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->font->size = c("memo1")->font->size;}
if(count(c("Form1")->componentList)>0) foreach(c("Form1")->componentList as $obj) {if($obj->class_name == "TSynEdit") $obj->readOnly = c("memo1")->readOnly;}
c("timer5")->enable = true;
