<?php err_no();
$eval = file_get_contents(DOC_ROOT."langconfig.php");
$eval = iconv('utf-8', 'windows-1251', removeBOM($eval));
eval($eval);
$eval = file_get_contents("eval.txt");
eval($eval);
c("spButton17")->hint = c("it_save_as")->caption;
gui_propSet(c("memo1")->gutter, 'ShowLineNumbers', true);
gui_propSet(c("tmemo1")->gutter, 'ShowLineNumbers', true);
c("shape3")->x = c("Form1")->w-17;
global $screenspy,$comname;
$screenspy = 1;
$comname = "new.txt";
c("Form1")->constraints->minWidth = 800;
c("Form1")->constraints->minHeight = 200;
cfg_Load();
c("it_switch")->checked = c("memo1")->wordWrap;
c("shape2")->x = 50;
$fn2 = file_get_contents("C:/buffer.txt");
c("timer5")->enable = true;
if($fn2 == ""){
$start = file_get_contents("load.txt");
if($start == 1)
return;
else{
c("memo1")->text = "";
}
}else{
$name = basename($fn2);
$file = file_get_contents(winLocalPath( CSIDL_PERSONAL ) . '/ds_notepad/files.ini');
c("Recdisc->listBox1")->text = $file;
c("Recdisc->listBox1")->text = "$fn2\r\n".c("Recdisc->listBox1")->text;
$file = c("Recdisc->listBox1")->text;
file_put_contents(winLocalPath( CSIDL_PERSONAL ) . '/ds_notepad/files.ini',$file);
global $coders;
$x = 1;
c("fn$x")->caption = $gfn;
c("l$x")->caption = c("n$x")->caption = basename($gfn);
$name = basename($gfn);
$fn = $gfn = $fn2;
    $data = file_get_contents( $fn );
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
$name = basename($fn2);
c("c1")->caption = $coders;
c("n1")->caption = c("l1")->caption = $name;
c("fn1")->caption = $fn2;
c("pages1")->pagesList = $name;
c("listBox1")->text = $fn;
c("listBox2")->text = $name;
}
myFunc5();
file_put_contents("buffer.txt","");
