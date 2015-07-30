<?php if(c("Form1->openDlg")->execute()){
c("Form1->projectfiles")->items->add(c("Form1->openDlg")->FileName);
c("Form1->projectfiles2")->items->add("  ".basename(c("Form1->openDlg")->FileName));
c("Form1->project_control")->caption = "*";
c("tree1")->text = basename(c("Form1->projectname")->caption);
c("tree1")->text .= " Files";
c("Form1->projectfiles")->itemIndex = 0;
c("Form1->timer6")->enable = true;
}
