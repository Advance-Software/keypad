<?php global $fn,$name,$coders;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tfn";
}
$fn = c("$namet$x")->caption;
$name = basename($fn);
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "c";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tc";
}
if(c("$namet$x")->caption == "utf-8 w/o BOM")
$coders = "utf-8";
else
$coders = c("$namet$x")->caption;
$coders1 = $namet.$x;
$item = c($item);
switch( $item->name ){
case 'gt': {
c("gt")->show();
    }break;
case 'gt2': {
c("gt")->show();
    }break;
case 'about': {
c("fmAbout")->show();
    }break;
    case 'help': {
c("help")->show();
    }break;
case 'css': {
SCss();
    }break;
    case 'h1h1': {
SHTML();
    }break;
    case 'php': {
SPHP();
    }break;
    case 'cpp': {
SCpp();
    }break;
    case 'general': {
SGeneral();
    }break;
    case 'sql': {
SSQL();
    }break;
    case 'j1j1': {
SJScript();
    }break;
    case 'xml': {
SXML();
    }break;
case 'a11': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('windows-1251', $coders, c("$namet$x")->text);
c("$coders1")->caption = "windows-1251";
    }break;
    case 'a22': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('UCS-2',$coders, c("$namet$x")->text);
c("$coders1")->caption = "ucs-2 Big Endian";
    }break;
    case 'a33': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('UCS-2LE',$coders, c("$namet$x")->text);
c("$coders1")->caption = "ucs-2 Little Endian";
    }break;
            case 'a44': {
            if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
str_replace("п»ї","",c("$namet$x")->text);
c("$namet$x")->text = iconv('utf-8',$coders, c("$namet$x")->text);
c("$coders1")->caption = "utf-8";
    }break;
        case 'a55': {
                    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('utf-8',$coders, c("$namet$x")->text);
c("$coders1")->caption = "utf-8 w/o BOM";
    }break;
            case 'a66': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('koi8-r',$coders, c("$namet$x")->text);
c("$coders1")->caption = "koi8-r";
    }break;
                case 'a77': {
                        if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->text = iconv('koi8-u',$coders, c("$namet$x")->text);
c("$coders1")->caption = "koi8-u";
    }break;
    case 'cucs2': {
        if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("c$x")->caption = "ucs-2 Big Endian";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tc$x")->caption = "ucs-2 Big Endian";
}
    }break;
    case 'cucs22': {
        if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("c$x")->caption = "ucs-2 Little Endian";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tc$x")->caption = "ucs-2 Little Endian";
}
    }break;
    case 'cutf8wob': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("c$x")->caption = "utf-8 w/o BOM";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tc$x")->caption = "utf-8 w/o BOM";
}
    }break;
    case 'cansi': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("c$x")->caption = "windows-1251";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tc$x")->caption = "windows-1251";
}
    }break;
    case 'cutf8': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("c$x")->caption = "utf-8";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tc$x")->caption = "utf-8";
}
            }break;
    case 'p4': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = base64_encode(c("$namet$x")->selText);
        }break;
          case 'p5': {
          if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
    c("$namet$x")->selText = base64_decode(c("$namet$x")->selText);
        }break;

    case 'cw': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
$data1 = c("buder")->text;
c("buder")->text = c("$namet$x")->text;
c("buder")->itemIndex = c("$namet$x")->caretY-1;
clipboard_settext(c("buder")->items->selected);
c("$namet$x")->items->delete(c("buder")->itemindex);
c("buder")->text = $data1;
    }break;
    case 'cts':{
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
$data1 = c("buder")->text;
c("buder")->text = c("$namet$x")->text;
c("buder")->itemIndex = c("$namet$x")->caretY-1;
clipboard_settext(c("buder")->items->selected);
c("buder")->text = $data1;
    }break;
    case 'delit': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
$data1 = c("buder")->text;
c("buder")->text = c("$namet$x")->text;
c("buder")->itemIndex = c("$namet$x")->caretY-1;
c("$namet$x")->items->delete(c("buder")->itemindex);
c("buder")->text = $data1;
    }break;
    case 'it_copy': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
clipboard_settext( c("$namet$x")->selText );
}break;
    case 'p2': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
clipboard_settext( c("$namet$x")->selText );
}break;
    case 'it_undo': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->undo();
}break;
case 'undo1': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->undo();
}break;
case 'it_redo': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->redo();
}break;
case 'redo1': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->redo();
}break;
case 'it_paste': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = clipboard_gettext();
}break;
case 'p3': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = "";
}break;
case 'itpaste': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = clipboard_gettext();
}break;
case 'it_delete': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = "";
}break;
case 'it_cut': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
clipboard_settext( c("$namet$x")->selText );
c("$namet$x")->selText = "";
}break;
case 'itcut': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
clipboard_settext( c("$namet$x")->selText );
c("$namet$x")->selText = "";
}break;
case 'cpnf': {
if($fn == "-"){
messageBox("The file is not saved on your PC!","Error!");
}
else{
clipboard_settext($fn);
}
}break;
case 'fn': {
if($fn == "-"){
messageBox("The file is not saved on your PC!","Error!");
}
else{
clipboard_settext($name);
}
}break;
    case 'folnam': {
if($fn == "-"){
messageBox("The file is not saved on your PC!","Error!");
}
else{
$Len1 = strlen($name);
$Len2 = $Len1*(-1);
clipboard_settext(substr($fn, 0, $Len2));
}
    }break;
    case 'selt': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selEnd = 0;
c("$namet$x")->caretY = 0;
c("$namet$x")->caretX = 0;
c("$namet$x")->selLength = strlen(c("$namet$x")->text);
    }break;
        case 'seltext2': {
        if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selEnd = 0;
c("$namet$x")->caretY = 0;
c("$namet$x")->caretX = 0;
c("$namet$x")->selLength = strlen(c("$namet$x")->text);
    }break;
    case 'selfel': {
    if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = c("$namet$x")->selText;
    }break;
    case 'sh': {
    c("search")->show();
    }break;
    case 'shar': {
    c("search1")->show();
    }break;
        case 'data': {
        if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
c("$namet$x")->selText = date("H:i")." ".date("d:m:y");
        }break;
case 'hpage': {
run("http://keypad-plus.16mb.com/");
}break;
case 'pssf': {
run("https://sourceforge.net/projects/keypadproject/?source=updater");
}break;
case 'cov': {
global $screenspy;
$screenspy = 1;
c("Form1")->borderStyle = bsSizeable;
if(c("controltab")->caption == 1){
if(c("shape3")->x == c("image35")->w){
c("controltab")->caption = 2;
c("shape3")->x = c("Form1")->w/2;
$x = c("pages1")->pageIndex + 1;
c("pages3")->pagesList = c("n$x")->caption;
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->text = c("memo$x")->text;
c("tn$x1")->caption = c("n$x")->caption;
c("tfn$x1")->caption = c("fn$x")->caption;
c("tl$x1")->caption = c("l$x")->caption;
c("tc$x1")->caption = c("c$x")->caption;
}
else{
c("controltab")->caption = 2;
$x = c("pages1")->pageIndex + 1;
global $comname;
$comname = c("n$x")->caption;
myFunc3();
$comname = "new.txt";
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->text = c("memo$x")->text;
c("tn$x1")->caption = c("n$x")->caption;
c("tfn$x1")->caption = c("fn$x")->caption;
c("tl$x1")->caption = c("l$x")->caption;
c("tc$x1")->caption = c("c$x")->caption;
}
$x1 = c("pages3")->pageIndex + 1;
$fn = c("n$x")->caption;
$Len1 = strlen($fn);
}else{
c("controltab")->caption = 1;
$x = c("pages3")->pageIndex + 1;
global $comname;
$comname = c("tn$x")->caption;
myFunc3();
$comname = "new.txt";
$x1 = c("pages1")->pageIndex + 1;
c("memo$x1")->text = c("tmemo$x")->text;
c("n$x1")->caption = c("tn$x")->caption;
c("fn$x1")->caption = c("tfn$x")->caption;
c("l$x1")->caption = c("tl$x")->caption;
c("c$x1")->caption = c("tc$x")->caption;
$x1 = c("pages1")->pageIndex + 1;
$fn = c("tn$x")->caption;
$Len1 = strlen($fn);
}
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
    }break;
case 'mov': {
$dataclose = c("close")->caption;
global $screenspy;
$screenspy = 1;
c("Form1")->borderStyle = bsSizeable;
if(c("controltab")->caption == 1){
if(c("shape3")->x == c("image35")->w){
c("controltab")->caption = 2;
c("shape3")->x = c("Form1")->w/2;
$x = c("pages1")->pageIndex + 1;
c("pages3")->pagesList = c("n$x")->caption;
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->text = c("memo$x")->text;
c("tn$x1")->caption = c("n$x")->caption;
c("tfn$x1")->caption = c("fn$x")->caption;
c("tl$x1")->caption = c("l$x")->caption;
c("tc$x1")->caption = c("c$x")->caption;
}
else{
c("controltab")->caption = 2;
$x = c("pages1")->pageIndex + 1;
global $comname;
$comname = c("n$x")->caption;
myFunc3();
$comname = "new.txt";
$x1 = c("pages3")->pageIndex + 1;
c("tmemo$x1")->text = c("memo$x")->text;
c("tn$x1")->caption = c("n$x")->caption;
c("tfn$x1")->caption = c("fn$x")->caption;
c("tl$x1")->caption = c("l$x")->caption;
c("tc$x1")->caption = c("c$x")->caption;
}
$x1 = c("pages3")->pageIndex + 1;
$fn = c("n$x")->caption;
$Len1 = strlen($fn);
}else{
c("controltab")->caption = 1;
$x = c("pages3")->pageIndex + 1;
global $comname;
$comname = c("tn$x")->caption;
myFunc3();
$comname = "new.txt";
$x1 = c("pages1")->pageIndex + 1;
c("memo$x1")->text = c("tmemo$x")->text;
c("n$x1")->caption = c("tn$x")->caption;
c("fn$x1")->caption = c("tfn$x")->caption;
c("l$x1")->caption = c("tl$x")->caption;
c("c$x1")->caption = c("tc$x")->caption;
$x1 = c("pages1")->pageIndex + 1;
$fn = c("tn$x")->caption;
$Len1 = strlen($fn);
}
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
if(c("controltab")->caption == 2){
c("controltab")->caption = 1;
$x = c("pages1")->pageIndex + 1;
c("l$x")->caption = c("n$x")->caption;
myFunc9();
}else{
c("controltab")->caption = 2;
$x = c("pages3")->pageIndex + 1;
c("tl$x")->caption = c("tn$x")->caption;
myFunc9();
}
c("close")->caption = $dataclose;
    }break;
    case 'speccase': {
c("special")->show();
    }break;
}
c("timer5")->enable = true;
