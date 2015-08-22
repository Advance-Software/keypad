<?php c("plagins")->formStyle = fsStayOnTop;
global $delete;
$delete = 0;
dir_search("pl/", $x, ".kpp", false, false);
c("listBox1")->text = $x;
c("listBox1")->items->add("Export.kpp");
c("listBox1")->items->selected = "Export.kpp";
$i = c("listBox1")->itemIndex;
$data = c("listBox1")->items->count - 1;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("listBox1")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i-$data];
 $arr[$i-1] = $v1;
 $arr[$i] = $v2;
 c("listBox1")->text = implode(_BR_, $arr);
 c("listBox1")->itemIndex = $i-$data;

 $v1 = $list[$i];
 $v2 = $list[$i-$data];
 $list[$i-$data] = $v1;
 $list[$i] = $v2;
}
c("timer1")->enable = true;
c("groupBox1")->caption = c("plagins")->caption;
if(c("listBox1")->items->selected == false)
c("listBox1")->itemIndex = 0;
if(c("listBox1")->itemIndex == 0){
global $plagname,$about1,$about2,$version,$copyright;
$plagname = "Export";
$about1 = "Official plugin for KeyPad";
$about2 = "Plugin needed for export to HTML and RTF";
$copyright = "© KeyPad";
$version = "1.0";
}
else{
$file = file_get_contents("pl/".c("listBox1")->items->selected);
$file = file("pl/".c("listBox1")->items->selected);
c("listBox2")->text = $file[0].$file[1].$file[2].$file[3].$file[4].$file[5];
eval(c("listBox2")->text);
}
c("label1")->caption = "Name : $plagname";
c("label2")->caption = "$version";
c("label3")->caption = "About : $about1";
c("label4")->caption = "Author : $copyright";
