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
c("project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = "New Project";
}
        if( $result == idNo ){
c("project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = "New Project";
}
}
else{
c("project_control")->caption = "";
c("tree1")->text = "New Project.kppr";
c("projectfiles")->text = c("projectfiles2")->text = "";
c("projectname")->caption = "New Project";
}
