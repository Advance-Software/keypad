<?php $item = c($item);
switch( $item->name ){
    case 'it_exit': {
app::close();
}break;
    case 'it_new': {
myFunc3();
}break;
case 'it_open': {
myFunc7();
}break;
    case 'it_save': {
myFunc6();
}break;
case 'it_save_as': {
my_SaveAs();
}break;
case 'it_printtext': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
$color = c("$namet$x")->font->color;
$size = c("$namet$x")->font->size."pt";
$font = c("$namet$x")->font->name;
$style = implode(',',c("$namet$x")->font->style);
$t1 = c("label7")->caption;
$color = toHTMLColor($color);
$style = str_replace("fsBold","<b>",$style);
$style = str_replace(",","",$style);
$style = str_replace("fsItalic","<var>",$style);
$style = str_replace("fsStrikeOut","<del>",$style);
$style = str_replace("fsUnderline","<ins>",$style);
$htmlcode = "<pre style=word-wrap: break-word;>".$style."<font color = $color>".c("label6")->caption."$size $t1;>"."<FONT FACE=$font>".c("$namet$x")->text."</pre></span></FONT></font>";
$pd = DOC_ROOT;
$pd = substr($pd ,0,strlen($i)-5);
file_put_contents("print.txt",DOC_ROOT."file.html");
file_put_contents("file.html",$htmlcode);
Run("print.exe", false);
}break;
case 'ptwm': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tmemo";
}
$color = c("$namet$x")->font->color;
$size = c("$namet$x")->font->size."pt";
$font = c("$namet$x")->font->name;
$style = implode(',',c("$namet$x")->font->style);
$t1 = c("label7")->caption;
$color = toHTMLColor($color);
$style = str_replace("fsBold","<b>",$style);
$style = str_replace(",","",$style);
$style = str_replace("fsItalic","<var>",$style);
$style = str_replace("fsStrikeOut","<del>",$style);
$style = str_replace("fsUnderline","<ins>",$style);
$htmlcode = "<pre style=word-wrap: break-word;>".$style."<font color = $color>".c("label6")->caption."$size $t1;>"."<FONT FACE=$font>".c("$namet$x")->text."</pre></span></FONT></font>";
$pd = DOC_ROOT;
$pd = substr($pd ,0,strlen($i)-5);
file_put_contents("print.txt",DOC_ROOT."file.html");
file_put_contents("file.html",$htmlcode);
Run("print.exe", false);
}break;
case 'it_of': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tfn";
}
$fn = c("$namet$x")->caption;
if($fn == "-"){
messageBox("The file is not saved on your PC!","Error!");
}
else{
$name = basename($fn);
$Len1 = strlen($name);
$Len2 = $Len1*(-1);
run(substr($fn, 0, $Len2));
}
}break;
case 'ofwm': {
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tfn";
}
$fn = c("$namet$x")->caption;
if($fn == "-"){
messageBox("The file is not saved on your PC!","Error!");
}
else{
$name = basename($fn);
$Len1 = strlen($name);
$Len2 = $Len1*(-1);
run(substr($fn, 0, $Len2));
}
}break;
case 'it_map': {
global $map;
if($map == 0){
c("shape2")->x = 183;
c("pages2")->pageIndex = 0;
c("label8")->caption = "  Map";
c("richEdit1")->show();
c("html")->hide();
c("listBox3")->hide();
c("Project")->hide();
}
c("timer5")->enable = true;
}break;
}
c("timer5")->enable = true;
