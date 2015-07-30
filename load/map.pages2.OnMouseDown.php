<?php if(c("pages2")->pageIndex == 0){
c("richEdit1")->show();
c("html")->hide();
c("label8")->caption = "  Map";
c("listBox3")->hide();
c("Project")->hide();
}
if(c("pages2")->pageIndex == 1){
c("richEdit1")->hide();
c("html")->show();
c("listBox3")->hide();
c("Project")->hide();
c("label8")->caption = "  HTML tags";
}
if(c("pages2")->pageIndex == 2){
c("richEdit1")->hide();
c("html")->hide();
c("listBox3")->show();
c("Project")->hide();
c("label8")->caption = "  Clipboard";
}
if(c("pages2")->pageIndex == 3){
c("richEdit1")->hide();
c("html")->hide();
c("listBox3")->hide();
c("Project")->show();
c("label8")->caption = "  Project";
}
