<?php $item = c($item);
if(c("Form1->controltab")->caption == 1){
$namet = "memo";
$x = c("Form1->pages1")->pageIndex + 1;
}
if(c("Form1->controltab")->caption == 2){
$namet = "tmemo";
$x = c("Form1->pages3")->pageIndex + 1;
}
switch( $item->name ){
    case 'htl': {
if ( c("saveDlg")->execute() ){
     $fileName = c("saveDlg")->fileName;
     if ( fileExt( $fileName ) != 'txt' )
        $fileName .= '.html';

     $data = c("Form1->$namet$x")->text;
$data = pack("CCC",0xef,0xbb,0xbf) . iconv('windows-1251', 'utf-8', $data);
     file_put_contents( $fileName, $data );
     return true;
} else
     return false;
     }break;
    case 'rtf': {
if ( c("saveDlg1")->execute() ){
     $fileName = c("saveDlg1")->fileName;
     if ( fileExt( $fileName ) != 'txt' )
        $fileName .= '.rtf';
     $data = c("Form1->$namet$x")->text;
     file_put_contents( $fileName, $data );
     return true;
} else
     return false;
     }break;
         case 'plag': {
global $plagname,$about1,$about2,$copyright;
$plagname = "Export";
$about1 = "Official plugin for KeyPad";
$about2 = "Plugin needed for export to HTML and RTF";
$copyright = "© KeyPad";
c('exabout')->show();
if(c("plagins->listBox1")->itemIndex != 0){
$file = file_get_contents("pl/".c("plagins->listBox1")->items->selected);
$file = file("pl/".c("plagins->listBox1")->items->selected);
c("plagins->listBox2")->text = $file[0].$file[1].$file[2].$file[3].$file[4];
}
eval(c("plagins->listBox2")->text);
c("exabout")->show();
         }break;
             case 'plag1': {
             c("plagins")->show();
                  }break;
     }
