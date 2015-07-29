<?php c("shape2")->x = 50;
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
c("timer5")->enable = true;
c("map->tree1")->text = c("tree1")->text;
c("map->tree1")->absIndex = c("tree1")->absIndex;
