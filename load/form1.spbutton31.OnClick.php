<?php if(c("tree1")->absIndex == 0 or c("tree1")->absIndex == 1){
return;
}
else{
c("projectfiles")->itemIndex = c("projectfiles2")->itemIndex
 = c("tree1")->absIndex - 2;
c("projectfiles")->items->delete(c("tree1")->absIndex - 2);
c("projectfiles2")->items->delete(c("tree1")->absIndex - 2);
c("project_control")->caption = "*";
c("tree1")->text = basename(c("projectname")->caption);
c("tree1")->text .= " Files";
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
