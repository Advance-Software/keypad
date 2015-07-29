<?php if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
$namet = "memo";
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
$namet = "tmemo";
}
$text = c("edit1")->text;
c("Form1->pmemo2")->setFocus();
if(c("Form1->pmemo2")->text != c("Form1->$namet$x")->text)
c("Form1->pmemo2")->text = c("Form1->$namet$x")->text;
searchg(c("Form1->pmemo2"), c("search->edit1")->text, 'prev');
$end = c("Form1->pmemo2")->selStart+strlen(c("search->edit1")->text);
$ss = c("Form1->pmemo2")->selStart;
c("Form1->$namet$x")->selStart = $ss;
c("Form1->$namet$x")->selEnd = $end;
if(c("Form1->controltab")->caption == 1){
c("Form1->controltab")->caption = 2;
myFunc3();
myFunc9();
c("Form1->pages3")->pageIndex = c("Form1->tfiles")->items->count - 1;
$x = c("Form1->pages3")->pageIndex + 1;
c("Form1->tmemo$x")->show();
c("Form1->controltab")->caption = 1;
}
if(c("Form1->controltab")->caption == 2){
c("Form1->controltab")->caption = 1;
myFunc3();
myFunc9();
c("Form1->pages1")->pageIndex = c("Form1->files")->items->count - 1;
$x = c("Form1->pages1")->pageIndex + 1;
c("Form1->memo$x")->show();
c("Form1->controltab")->caption = 2;
}
