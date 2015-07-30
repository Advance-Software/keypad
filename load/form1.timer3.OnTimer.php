<?php if(c("controltab")->caption == 1){
global $aname;
$pages = c("listBox1")->items->count;
if($aname == $pages+1){
c("pages1")->pagesList = c("buder")->text;
c("buder")->text = "";
c("timer3")->enable = false;
}
else{
c("buder")->items->add(c("n$aname")->caption);
$aname +=1;
}
}
if(c("controltab")->caption == 2){
global $aname;
$pages = c("tlistBox1")->items->count;
if($aname == $pages+1){
c("pages3")->pagesList = c("buder")->text;
c("buder")->text = "";
c("timer3")->enable = false;
}
else{
c("buder")->items->add(c("tn$aname")->caption);
$aname +=1;
}
}
