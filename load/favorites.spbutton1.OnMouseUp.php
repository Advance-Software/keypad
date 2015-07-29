<?php if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tfn";
}
$data = c("Form1->$namet$x")->caption;
c("listBox1")->items->selected = $data;
if(c("listBox1")->items->selected == false && $data != "-"){
c("favorites->listBox1")->text = "$data\r\n".c("favorites->listBox1")->text;
}
$file = c("listBox1")->text;
file_put_contents(winLocalPath( CSIDL_PERSONAL ) . '/ds_notepad/closed.ini',$file);
if(c("listBox1")->text != "" && c("listBox1")->items->selected == false)
c("listBox1")->itemIndex = 0;
