<?php if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
if(c("html")->itemindex == 0 or c("html")->itemindex == 1 or c("html")->itemindex == 2 or c("html")->itemindex == 3)
c("memo$x")->selText = "<".c("html")->items->selected."></".c("html")->items->selected.">";
if(c("html")->itemindex == 4 or c("html")->itemindex == 5 or c("html")->itemindex == 6 or c("html")->itemindex == 7 or c("html")->itemindex == 8 or c("html")->itemindex == 9){
$data = c("html")->itemIndex - 3;
c("memo$x")->selText = "<H$data></H$data>";
}
if(c("html")->itemindex == 10)
c("memo$x")->selText = "<BIG></BIG>";
if(c("html")->itemindex == 11)
c("memo$x")->selText = "<I></I>";
if(c("html")->itemindex == 12)
c("memo$x")->selText = "<U></U>";
if(c("html")->itemindex == 13)
c("memo$x")->selText = "<SMALL></SMALL>";
if(c("html")->itemindex == 14)
c("memo$x")->selText = "<EM></EM>";
if(c("html")->itemindex == 15)
c("memo$x")->selText = "<STRONG></STRONG>";
if(c("html")->itemindex == 16)
c("memo$x")->selText = "<a href = >Link</a>";
if(c("html")->itemindex == 17)
c("memo$x")->selText = "<!--  -->";
if(c("html")->itemindex == 18)
if(c("colorDlg1")->execute()){
$color = c("colorDlg1")->color;
$color = toHTMLColor($color);
c("memo$x")->selText = "$color";
}
if(c("html")->itemindex == 19)
c("memo$x")->selText = "<li></li>";
if(c("html")->itemindex == 20)
c("memo$x")->selText = "<ul></ul>";
if(c("html")->itemindex == 21)
c("memo$x")->selText = "<hr></hr>";
if(c("html")->itemindex == 22)
c("memo$x")->selText = "<table></table>";
if(c("html")->itemindex == 23)
c("memo$x")->selText = "<tr></tr>";
if(c("html")->itemindex == 24)
c("memo$x")->selText = "<td></td>";
if(c("html")->itemindex == 25)
c("memo$x")->selText = "<th></th>";
if(c("html")->itemindex == 26)
c("memo$x")->selText = "<caption></caption>";
if(c("html")->itemindex == 27)
c("memo$x")->selText = "<form></form>";
if(c("html")->itemindex == 28)
c("memo$x")->selText = "<option></option>";
c("memo$x")->setFocus();
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
if(c("html")->itemindex == 0 or c("html")->itemindex == 1 or c("html")->itemindex == 2 or c("html")->itemindex == 3)
c("tmemo$x")->selText = "<".c("html")->items->selected."></".c("html")->items->selected.">";
if(c("html")->itemindex == 4 or c("html")->itemindex == 5 or c("html")->itemindex == 6 or c("html")->itemindex == 7 or c("html")->itemindex == 8 or c("html")->itemindex == 9){
$data = c("html")->itemIndex - 3;
c("tmemo$x")->selText = "<H$data></H$data>";
}
if(c("html")->itemindex == 10)
c("tmemo$x")->selText = "<BIG></BIG>";
if(c("html")->itemindex == 11)
c("tmemo$x")->selText = "<I></I>";
if(c("html")->itemindex == 12)
c("tmemo$x")->selText = "<U></U>";
if(c("html")->itemindex == 13)
c("tmemo$x")->selText = "<SMALL></SMALL>";
if(c("html")->itemindex == 14)
c("tmemo$x")->selText = "<EM></EM>";
if(c("html")->itemindex == 15)
c("tmemo$x")->selText = "<STRONG></STRONG>";
if(c("html")->itemindex == 16)
c("tmemo$x")->selText = "<a href = >Link</a>";
if(c("html")->itemindex == 17)
c("tmemo$x")->selText = "<!--  -->";
if(c("html")->itemindex == 18)
if(c("colorDlg1")->execute()){
$color = c("colorDlg1")->color;
$color = toHTMLColor($color);
c("tmemo$x")->selText = "$color";
}
if(c("html")->itemindex == 19)
c("tmemo$x")->selText = "<li></li>";
if(c("html")->itemindex == 20)
c("tmemo$x")->selText = "<ul></ul>";
if(c("html")->itemindex == 21)
c("tmemo$x")->selText = "<hr></hr>";
if(c("html")->itemindex == 22)
c("tmemo$x")->selText = "<table></table>";
if(c("html")->itemindex == 23)
c("tmemo$x")->selText = "<tr></tr>";
if(c("html")->itemindex == 24)
c("tmemo$x")->selText = "<td></td>";
if(c("html")->itemindex == 25)
c("tmemo$x")->selText = "<th></th>";
if(c("html")->itemindex == 26)
c("tmemo$x")->selText = "<caption></caption>";
if(c("html")->itemindex == 27)
c("tmemo$x")->selText = "<form></form>";
if(c("html")->itemindex == 28)
c("tmemo$x")->selText = "<option></option>";
c("tmemo$x")->setFocus();
}
