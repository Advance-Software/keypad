<?php if(c("controltab")->caption == 1){
$x1 = c("pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("controltab")->caption == 2){
$x1 = c("pages3")->pageIndex + 1;
$namet = "tfn";
}
c("saveDlg")->initialDir = c("$namet$x")->caption;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
c("listBox1")->itemIndex = c("pages1")->pageIndex;
$fn = c("fn$x")->caption;
$coders = c("c$x")->caption;
if($fn == "-")
my_SaveAs();
else{
if($coders == "windows-1251"){
file_put_contents($fn,c("memo$x")->text);
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "ucs-2 Big Endian"){
$data = c("memo$x")->text;
$data1 =  iconv('windows-1251', 'ucs-2', $data) ;
$data = iconv('CP1251', 'UCS-2', $data);
$data = "юя".$data;
file_put_contents( $fn, $data );
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "ucs-2 Little Endian"){
$data = c("memo$x")->text;
$data1 =  iconv('windows-1251', 'UCS-2LE', $data) ;
$data = iconv('CP1251', 'UCS-2LE', $data);
$data = "яю".$data;
file_put_contents( $fn, $data );
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "utf-8"){
$data = c("memo$x")->text;
$data1 = pack("CCC",0xef,0xbb,0xbf) . iconv('windows-1251', 'utf-8', $data);
file_put_contents($fn,$data1);
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "KOI8-R"){
$data = c("memo$x")->text;
$data1 = iconv('windows-1251', 'KOI8-R', $data);
file_put_contents($fn,$data1);
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "KOI8-U"){
$data = c("memo$x")->text;
$data1 = iconv('windows-1251', 'KOI8-U', $data);
file_put_contents($fn,$data1);
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
     if($coders == "utf-8 w/o BOM"){
$data = c("memo$x")->text;
$data1 = iconv('windows-1251', 'utf-8', $data);
file_put_contents($fn,$data1);
c("l$x")->caption = c("n$x")->caption;
$name = c("l$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
     }
     }
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
c("tlistBox1")->itemIndex = c("pages3")->pageIndex;
$fn = c("tfn$x")->caption;
$coders = c("tc$x")->caption;
if($fn == "-")
my_SaveAs();
else{
if($coders == "windows-1251"){
file_put_contents($fn,c("tmemo$x")->text);
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "ucs-2 Big Endian"){
$data = c("tmemo$x")->text;
$data1 =  iconv('windows-1251', 'ucs-2', $data) ;
$data = iconv('CP1251', 'UCS-2', $data);
$data = "юя".$data;
file_put_contents( $fn, $data );
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "ucs-2 Little Endian"){
$data = c("tmemo$x")->text;
$data1 =  iconv('windows-1251', 'UCS-2LE', $data) ;
$data = iconv('CP1251', 'UCS-2LE', $data);
$data = "яю".$data;
file_put_contents( $fn, $data );
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "utf-8"){
$data = c("tmemo$x")->text;
$data1 = pack("CCC",0xef,0xbb,0xbf) . iconv('windows-1251', 'utf-8', $data);
file_put_contents($fn,$data1);
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "KOI8-R"){
$data = c("tmemo$x")->text;
$data1 = iconv('windows-1251', 'KOI8-R', $data);
file_put_contents($fn,$data1);
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
if($coders == "KOI8-U"){
$data = c("tmemo$x")->text;
$data1 = iconv('windows-1251', 'KOI8-U', $data);
file_put_contents($fn,$data1);
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
     if($coders == "utf-8 w/o BOM"){
$data = c("tmemo$x")->text;
$data1 = iconv('windows-1251', 'utf-8', $data);
file_put_contents($fn,$data1);
c("tl$x")->caption = c("tn$x")->caption;
$name = c("tl$x")->caption;
c("Form1")->caption = "$name - KeyPad+";
}
     }
     }
c("timer5")->enable = true;
