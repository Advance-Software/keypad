<?php 
pre("The download is complete, close the program to begin installing the update!");
global $upd;
$upd = 1;

$archive = new PclZip("C:/KeyPad_config/Setup_KeyPad_En.zip");
$archive->extract(PCLZIP_OPT_PATH, "C:/KeyPad_config/");
file_delete("C:/KeyPad_config/Setup_KeyPad_En.zip");
c("update")->hide();
c("progress1")->position = 0;
c("update")->caption = "Update";
