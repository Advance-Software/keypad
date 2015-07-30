<?php if(c("openDlg")->execute()){
c("projectfiles")->items->add(c("openDlg")->FileName);
c("projectfiles2")->items->add(basename(c("openDlg")->FileName));
c("project_control")->caption = "*";
}
