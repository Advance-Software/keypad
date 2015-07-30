<?php if(c("openDlg")->execute()){
c("projectfiles")->items->add(c("openDlg")->FileName);
c("projectfiles2")->items->add("  ".basename(c("openDlg")->FileName));
c("project_control")->caption = "*";
c("tree1")->text = basename(c("projectname")->caption);
c("tree1")->text .= " Files";
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
