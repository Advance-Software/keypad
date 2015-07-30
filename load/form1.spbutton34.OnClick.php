<?php if(c("projectname")->caption == "New Project"){
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
