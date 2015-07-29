<?php c("favorites")->formStyle = fsStayOnTop;
$file = file_get_contents(winLocalPath( CSIDL_PERSONAL ) . '/ds_notepad/closed.ini');
c("listBox1")->text = $file;
if($file == false)
c("listBox1")->text = "";
if(c("listBox1")->text != "" && c("listBox1")->items->selected == false)
c("listBox1")->itemIndex = 0;
