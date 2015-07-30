<?php if(c("Form1->controltab")->caption == 1){
$x = c("Form1->pages1")->pageIndex + 1;
if(c("html")->itemindex == 0 or c("html")->itemindex == 1 or 
c("html")->itemindex == 2 or c("html")->itemindex == 3)
c("Form1->memo$x")->selText = 
"<".c("html")->items->selected."></".c("html")->items->selected.">";
if(c("html")->itemindex == 4 or c("html")->itemindex == 5 
or c("html")->itemindex == 6 or c("html")->itemindex == 7 
or c("html")->itemindex == 8 or c("html")->itemindex == 9){
$data = c("html")->itemIndex - 3;
c("Form1->memo$x")->selText = "<H$data></H$data>";
}
if(c("html")->itemindex == 10)
c("Form1->memo$x")->selText = "<BIG></BIG>";
if(c("html")->itemindex == 11)
c("Form1->memo$x")->selText = "<I></I>";
if(c("html")->itemindex == 12)
c("Form1->memo$x")->selText = "<U></U>";
if(c("html")->itemindex == 13)
c("Form1->memo$x")->selText = "<SMALL></SMALL>";
if(c("html")->itemindex == 14)
c("Form1->memo$x")->selText = "<EM></EM>";
if(c("html")->itemindex == 15)
c("Form1->memo$x")->selText = "<STRONG></STRONG>";
if(c("html")->itemindex == 16)
c("Form1->memo$x")->selText = "<a href = >Link</a>";
if(c("html")->itemindex == 17)
c("Form1->memo$x")->selText = "<!--  -->";
if(c("html")->itemindex == 18)
if(c("Form1->colorDlg1")->execute()){
$color = c("Form1->colorDlg1")->color;
$color = toHTMLColor($color);
c("Form1->memo$x")->selText = "$color";
}
c("Form1->memo$x")->setFocus();
}
if(c("Form1->controltab")->caption == 2){
$x = c("Form1->pages3")->pageIndex + 1;
if(c("html")->itemindex == 0 or c("html")->itemindex == 1 
or c("html")->itemindex == 2 or c("html")->itemindex == 3)
c("Form1->tmemo$x")->selText = 
"<".c("html")->items->selected."></".c("html")->items->selected.">";
if(c("html")->itemindex == 4 or c("html")->itemindex == 5 
or c("html")->itemindex == 6 or c("html")->itemindex == 7 
or c("html")->itemindex == 8 or c("html")->itemindex == 9){
$data = c("html")->itemIndex - 3;
c("Form1->tmemo$x")->selText = "<H$data></H$data>";
}
if(c("html")->itemindex == 10)
c("Form1->tmemo$x")->selText = "<BIG></BIG>";
if(c("html")->itemindex == 11)
c("Form1->tmemo$x")->selText = "<I></I>";
if(c("html")->itemindex == 12)
c("Form1->tmemo$x")->selText = "<U></U>";
if(c("html")->itemindex == 13)
c("Form1->tmemo$x")->selText = "<SMALL></SMALL>";
if(c("html")->itemindex == 14)
c("Form1->tmemo$x")->selText = "<EM></EM>";
if(c("html")->itemindex == 15)
c("Form1->tmemo$x")->selText = "<STRONG></STRONG>";
if(c("html")->itemindex == 16)
c("Form1->tmemo$x")->selText = "<a href = >Link</a>";
if(c("html")->itemindex == 17)
c("Form1->tmemo$x")->selText = "<!--  -->";
if(c("html")->itemindex == 18)
if(c("Form1->colorDlg1")->execute()){
$color = c("Form1->colorDlg1")->color;
$color = toHTMLColor($color);
c("Form1->tmemo$x")->selText = "$color";
}
c("Form1->tmemo$x")->setFocus();
}
