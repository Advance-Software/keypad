<?php if(c("Form1->project_control")->caption == "*"){
$result = messageBox("Save changes?", "Close", MB_YESNOCANCEL);
   if( $result == idCancel ){
        return;
        }
   if ( $result == idYes ){
if(c("Form1->projectname")->caption == "New Project"){
if(c("Form1->saveDlg")->execute()){
$data = c("Form1->projectfiles")->text;
$fileName = c("Form1->saveDlg")->fileName;
file_put_contents( $fileName.".kppr", $data );
}
}
else{
$data = c("Form1->projectfiles")->text;
$fileName = c("Form1->projectname")->caption;
file_put_contents( $fileName, $data );
}
if(c("Form1->openDlg1")->execute()){
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = c("Form1->openDlg1")->fileName;
c("tree1")->text = basename(c("Form1->openDlg1")->FileName);
c("tree1")->text .= " Files";
c("Form1->projectfiles")->text = file_get_contents(c("Form1->openDlg1")->FileName);
c("Form1->projectfiles")->itemIndex = 0;
c("Form1->timer6")->enable = true;
}
}
        if( $result == idNo ){
if(c("Form1->openDlg1")->execute()){
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = c("Form1->openDlg1")->fileName;
c("tree1")->text = basename(c("Form1->openDlg1")->FileName);
c("tree1")->text .= " Files";
c("Form1->projectfiles")->text = file_get_contents(c("Form1->openDlg1")->FileName);
c("Form1->projectfiles")->itemIndex = 0;
c("Form1->timer6")->enable = true;
}
}
}
else{
if(c("Form1->openDlg1")->execute()){
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = c("Form1->openDlg1")->fileName;
c("tree1")->text = basename(c("Form1->openDlg1")->FileName);
c("tree1")->text .= " Files";
c("Form1->projectfiles")->text = file_get_contents(c("Form1->openDlg1")->FileName);
c("Form1->projectfiles")->itemIndex = 0;
c("Form1->tree1")->text = c("tree1")->text;
c("Form1->tree1")->absIndex = c("tree1")->absIndex;
c("Form1->timer6")->enable = true;
}
}
