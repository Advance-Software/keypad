<?php if(c("tree1")->absIndex == 0 or c("tree1")->absIndex == 1){
return;
}
else{
c("Form1->projectfiles")->itemIndex = c("Form1->projectfiles2")->itemIndex
 = c("tree1")->absIndex - 2;
c("Form1->projectfiles")->items->delete(c("tree1")->absIndex - 2);
c("Form1->projectfiles2")->items->delete(c("tree1")->absIndex - 2);
c("Form1->project_control")->caption = "*";
c("tree1")->text = basename(c("Form1->projectname")->caption);
c("tree1")->text .= " Files";
c("Form1->projectfiles")->itemIndex = 0;
c("Form1->timer6")->enable = true;
}
