<?php if(c("project_control")->caption == "*"){
$result = messageBox("Save changes?", "Close", MB_YESNOCANCEL);
   if( $result == idCancel ){
        return;
        }
   if ( $result == idYes ){
if(c("projectname")->caption == "New Project"){
if(c("saveDlg")->execute()){
$data = c("projectfiles")->text;
$fileName = c("saveDlg")->fileName;
file_put_contents( $fileName.".kppr", $data );
}
}
else{
$data = c("projectfiles")->text;
$fileName = c("projectname")->caption;
file_put_contents( $fileName, $data );
}
if(c("openDlg1")->execute()){
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = c("openDlg1")->fileName;
c("tree1")->text = basename(c("openDlg1")->FileName);
c("tree1")->text .= " Files";
c("projectfiles")->text = file_get_contents(c("openDlg1")->FileName);
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
}
        if( $result == idNo ){
if(c("openDlg1")->execute()){
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = c("openDlg1")->fileName;
c("tree1")->text = basename(c("openDlg1")->FileName);
c("tree1")->text .= " Files";
c("projectfiles")->text = file_get_contents(c("openDlg1")->FileName);
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
}
}
else{
if(c("openDlg1")->execute()){
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = c("openDlg1")->fileName;
c("tree1")->text = basename(c("openDlg1")->FileName);
c("tree1")->text .= " Files";
c("projectfiles")->text = file_get_contents(c("openDlg1")->FileName);
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
}
