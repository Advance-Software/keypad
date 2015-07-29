<?php if( c("listBox1")->items->selected ){
 global $list;
 $i = c("listBox1")->itemIndex;
 $arr = explode(_BR_, c("listBox1")->text);
 unset($arr[$i]);
 c("listBox1")->text = implode(_BR_, $arr);
 if($i-1 >= 0){
  c("listBox1")->itemIndex = $i - 1;
 }else{
  c("listBox1")->itemIndex = $i;
 }
}
$file = c("listBox1")->text;
file_put_contents(winLocalPath( CSIDL_PERSONAL ) . '/ds_notepad/closed.ini',$file);
