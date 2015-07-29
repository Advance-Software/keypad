<?php global $poscur1,$poscur2,$pc;
if($pc == 1){
$poscur11 = cursor_pos_x();
$poscur22 = cursor_pos_y();
$data1 = $poscur1-$poscur11;
$data2 = $poscur2-$poscur22;
if($data1 < -20){
c("shape2")->x = 50;
c("map")->show();
c("map->pages2")->pageIndex = c("pages2")->pageIndex;
if(c("pages2")->pageIndex == 0){
c("map->richEdit1")->show();
c("map->html")->hide();
c("map->label8")->caption = "  Map";
c("map->listBox3")->hide();
c("map->Project")->hide();
}
if(c("pages2")->pageIndex == 1){
c("map->richEdit1")->hide();
c("map->html")->show();
c("map->listBox3")->hide();
c("map->Project")->hide();
c("map->label8")->caption = "  HTML tags";
}
if(c("pages2")->pageIndex == 2){
c("map->richEdit1")->hide();
c("map->html")->hide();
c("map->listBox3")->show();
c("map->Project")->hide();
c("map->label8")->caption = "  Clipboard";
}
if(c("pages2")->pageIndex == 3){
c("map->richEdit1")->hide();
c("map->html")->hide();
c("map->listBox3")->hide();
c("map->Project")->show();
c("map->label8")->caption = "  Project";
}
c("map->tree1")->text = c("tree1")->text;
c("map->tree1")->absIndex = c("tree1")->absIndex;
}
if($data1 > 20){
c("shape2")->x = 50;
c("map")->show();
c("map->pages2")->pageIndex = c("pages2")->pageIndex;
if(c("pages2")->pageIndex == 0){
c("map->richEdit1")->show();
c("map->html")->hide();
c("map->label8")->caption = "  Map";
c("map->listBox3")->hide();
c("map->Project")->hide();
}
if(c("pages2")->pageIndex == 1){
c("map->richEdit1")->hide();
c("map->html")->show();
c("map->listBox3")->hide();
c("map->Project")->hide();
c("map->label8")->caption = "  HTML tags";
}
if(c("pages2")->pageIndex == 2){
c("map->richEdit1")->hide();
c("map->html")->hide();
c("map->listBox3")->show();
c("map->Project")->hide();
c("map->label8")->caption = "  Clipboard";
}
if(c("pages2")->pageIndex == 3){
c("map->richEdit1")->hide();
c("map->html")->hide();
c("map->listBox3")->hide();
c("map->Project")->show();
c("map->label8")->caption = "  Project";
}
c("map->tree1")->text = c("tree1")->text;
c("map->tree1")->absIndex = c("tree1")->absIndex;
}
c("map")->x = $poscur11;
c("map")->y = $poscur22;
}
