<?php if(c("pages1")->pagesList == "" || c("pages3")->pagesList == "")
Error_return();
else{
if(c("spButton4")->enabled == false)
$canClose = funcreturn();
else
$canClose = myFunc29();
}
$data = file_get_contents("file.html");
if($data != ""){
shell_exec("TASKKILL /F /IM Print.exe");
file_put_contents("file.html","");
}
file_put_contents("load.txt",0);
