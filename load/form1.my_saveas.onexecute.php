<?php global $fileName,$fname;
if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
global $coders,$name,$fn;
if ( c("saveDlg")->execute() ){
     $fileName = c("saveDlg")->fileName;
     if ( fileExt( $fileName ) != 'txt' )
        $fileName .= '.txt';

     $data = c("memo$x")->text;

        if ( $coders == "utf-8" ){
                $data = pack("CCC",0xef,0xbb,0xbf) . iconv('windows-1251', 'utf-8', $data);
                }
                if ( $coders == "utf-8 wo BOM" )
                $data = iconv('windows-1251', 'utf-8', $data);
                if ( $coders == "ucs-2 Big Endian" ){
                $data = iconv('windows-1251', 'ucs-2', $data);
                $data = "юя".$data;
                }
                if ( $coders == "ucs-2 Little Endian" ){
                $data = iconv('windows-1251', 'ucs-2le', $data);
                $data = "яю".$data;
                }
                if ( $coders == "windows-1251" )
                $data = c("memo$x")->text;
     file_put_contents( $fileName, $data );
     $fname = basename($fileName);

c("buder")->text = c("pages1")->pagesList;
if(c("buder")->items->count == 1){
c("pages1")->pagesList = $fname;
}
c("buder")->text = c("listBox1")->text;
c("buder")->itemIndex = c("listBox1")->itemIndex;
c("listBox2")->itemIndex = c("listBox2")->items->count-1;
$index = c("pages1")->pageIndex;
$data = c("listBox2")->itemIndex;
$n = $data - $index;

c("listBox1")->items->delete(c("listBox1")->itemIndex);
c("listBox1")->items->add("$fileName");
$fname = basename($fileName);
c("listBox1")->itemIndex = c("listBox1")->items->count-1;
if(c("controltab")->caption == 1 and c("listBox1")->items->count == 1)
config();
$i = c("listBox1")->itemIndex;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("listBox1")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i - $n];
 $arr[$i - $n] = $v1;
 $arr[$i] = $v2;
 c("listBox1")->text = implode(_BR_, $arr);
 c("listBox1")->itemIndex = $i-$n;

 $v1 = $list[$i];
 $v2 = $list[$i-$n];
 $list[$i-$n] = $v1;
 $list[$i] = $v2;
}
c("listBox1")->itemIndex = c("pages1")->pageIndex;
$x = c("pages1")->pageIndex + 1;
c("memo$x")->name = "memo".c("listBox1")->items->count+1;

c("buder")->text = c("pages1")->pagesList;
c("buder")->itemIndex = c("pages1")->pageIndex;
c("listBox2")->itemIndex = c("listBox2")->items->count-1;
$index = c("pages1")->pageIndex;
$data = c("listBox2")->itemIndex;
$n = $data - $index;

c("buder")->items->delete(c("buder")->itemIndex);
c("buder")->items->add("$fname");
c("buder")->itemIndex = c("listBox1")->items->count-1;
$i = c("buder")->itemIndex;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("buder")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i - $n];
 $arr[$i - $n] = $v1;
 $arr[$i] = $v2;
 c("buder")->text = implode(_BR_, $arr);
 c("buder")->itemIndex = $i-$n;

 $v1 = $list[$i];
 $v2 = $list[$i-$n];
 $list[$i-$n] = $v1;
 $list[$i] = $v2;
 $it = c("pages1")->pageIndex;
 c("pages1")->pageIndex = $it;
 c("buder")->text = c("pages1")->pagesList;
 c("fn$x")->caption = $fileName;
 c("n$x")->caption = $fname;
 c("l$x")->caption = $fname;
 c("buder")->text = "";
 global $aname;
 $aname = 1;
 c("timer3")->enable = true;
}
 
     return true;
} else
     return false;
     }
     if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
global $coders,$name,$fn;
if ( c("saveDlg")->execute() ){
     $fileName = c("saveDlg")->fileName;
     if ( fileExt( $fileName ) != 'txt' )
        $fileName .= '.txt';

     $data = c("tmemo$x")->text;

        if ( $coders == "utf-8" ){
                $data = pack("CCC",0xef,0xbb,0xbf) . iconv('windows-1251', 'utf-8', $data);
                }
                if ( $coders == "utf-8 wo BOM" )
                $data = iconv('windows-1251', 'utf-8', $data);
                if ( $coders == "ucs-2 Big Endian" ){
                $data = iconv('windows-1251', 'ucs-2', $data);
                $data = "юя".$data;
                }
                if ( $coders == "ucs-2 Little Endian" ){
                $data = iconv('windows-1251', 'ucs-2le', $data);
                $data = "яю".$data;
                }
                if ( $coders == "windows-1251" )
                $data = c("memo$x")->text;
     file_put_contents( $fileName, $data );
     $fname = basename($fileName);

c("buder")->text = c("pages3")->pagesList;
if(c("buder")->items->count == 1){
c("pages3")->pagesList = $fname;
}
c("buder")->text = c("tlistBox1")->text;
c("buder")->itemIndex = c("tlistBox1")->itemIndex;
c("tlistBox2")->itemIndex = c("tlistBox2")->items->count-1;
$index = c("pages3")->pageIndex;
$data = c("tlistBox2")->itemIndex;
$n = $data - $index;

c("tlistBox1")->items->delete(c("tlistBox1")->itemIndex);
c("tlistBox1")->items->add("$fileName");
$fname = basename($fileName);
c("tlistBox1")->itemIndex = c("tlistBox1")->items->count-1;
if(c("controltab")->caption == 1 and c("tlistBox1")->items->count == 1)
config();
$i = c("tlistBox1")->itemIndex;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("tlistBox1")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i - $n];
 $arr[$i - $n] = $v1;
 $arr[$i] = $v2;
 c("tlistBox1")->text = implode(_BR_, $arr);
 c("tlistBox1")->itemIndex = $i-$n;

 $v1 = $list[$i];
 $v2 = $list[$i-$n];
 $list[$i-$n] = $v1;
 $list[$i] = $v2;
}
c("tlistBox1")->itemIndex = c("pages3")->pageIndex;
$x = c("pages3")->pageIndex + 1;
c("tmemo$x")->name = "memo".c("tlistBox1")->items->count+1;

c("buder")->text = c("pages3")->pagesList;
c("buder")->itemIndex = c("pages3")->pageIndex;
c("tlistBox2")->itemIndex = c("tlistBox2")->items->count-1;
$index = c("pages3")->pageIndex;
$data = c("tlistBox2")->itemIndex;
$n = $data - $index;

c("buder")->items->delete(c("buder")->itemIndex);
c("buder")->items->add("$fname");
c("buder")->itemIndex = c("tlistBox1")->items->count-1;
$i = c("buder")->itemIndex;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("buder")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i - $n];
 $arr[$i - $n] = $v1;
 $arr[$i] = $v2;
 c("buder")->text = implode(_BR_, $arr);
 c("buder")->itemIndex = $i-$n;

 $v1 = $list[$i];
 $v2 = $list[$i-$n];
 $list[$i-$n] = $v1;
 $list[$i] = $v2;
 $it = c("pages3")->pageIndex;
 c("pages3")->pageIndex = $it;
 c("buder")->text = c("pages1")->pagesList;
 c("tfn$x")->caption = $fileName;
 c("tn$x")->caption = $fname;
 c("tl$x")->caption = $fname;
 c("buder")->text = "";
 global $aname;
 $aname = 1;
 c("timer3")->enable = true;
}

     return true;
} else
     return false;
     }
