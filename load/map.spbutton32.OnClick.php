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
c("Form1->project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = "New Project";
}
        if( $result == idNo ){
c("Form1->project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = "New Project";
}
}
else{
c("Form1->project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("Form1->projectfiles")->text = c("Form1->projectfiles2")->text = "";
c("Form1->projectname")->caption = "New Project";
}
