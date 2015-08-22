<?php c("Exabout->label1")->caption = "No name";
c("Exabout->label2")->caption = "No info";
c("Exabout->label3")->caption = "No info";
c("Exabout->label5")->caption = "No copyright";
if(c("listBox1")->itemIndex == 0){
global $plagname,$about1,$about2,$version,$copyright;
$plagname = "Export";
$about1 = "Official plugin for KeyPad";
$about2 = "Plugin needed for export to HTML and RTF";
$copyright = "© KeyPad";
$version = "1.0";
c("plagins")->show();
c('exabout')->show();
}
if(c("listBox1")->itemIndex != 0){
$file = file_get_contents("pl/".c("listBox1")->items->selected);
$file = file("pl/".c("listBox1")->items->selected);
c("listBox2")->text = $file[0].$file[1].$file[2].$file[3].$file[4].$file[5];
}
eval(c("listBox2")->text);
c("exabout")->show();
