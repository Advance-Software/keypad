<?php if(c("saveDlg")->execute()){
$data = c("projectfiles")->text;
$fileName = c("saveDlg")->fileName;
file_put_contents( $fileName, $data );
}
