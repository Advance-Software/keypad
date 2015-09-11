<?php if(c("controltab")->caption == 1){
$x = c("pages1")->pageIndex + 1;
$namet = "fn";
}
if(c("controltab")->caption == 2){
$x = c("pages3")->pageIndex + 1;
$namet = "tfn";
}
$data = c("$namet$x")->caption;
file_put_contents("C:/KeyPad_config/buffer.txt",$data);
run(DOC_ROOT."load.exe");
