<?php if(c("tree1")->absIndex == 0 or c("tree1")->absIndex == 1){
return;
}
else{
c("projectfiles")->itemIndex = c("projectfiles2")->itemIndex
 = c("tree1")->absIndex - 2;
$i = c("tree1")->absIndex - 2;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("projectfiles")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i+1];
 $arr[$i+1] = $v1;
 $arr[$i] = $v2;
 c("projectfiles")->text = implode(_BR_, $arr);
 c("projectfiles")->itemIndex = $i+1;

 $v1 = $list[$i];
 $v2 = $list[$i+1];
 $list[$i+1] = $v1;
 $list[$i] = $v2;
}
$i = c("tree1")->absIndex - 2;
if($i > 0){
 global $list;
 $arr = explode(_BR_, c("projectfiles2")->text);
 $v1 = $arr[$i];
 $v2 = $arr[$i+1];
 $arr[$i+1] = $v1;
 $arr[$i] = $v2;
 c("projectfiles2")->text = implode(_BR_, $arr);
 c("projectfiles2")->itemIndex = $i-1;

 $v1 = $list[$i];
 $v2 = $list[$i+1];
 $list[$i+1] = $v1;
 $list[$i] = $v2;
}
c("project_control")->caption = "*";
c("tree1")->text = basename(c("projectname")->caption);
c("tree1")->text .= " Files";
c("projectfiles")->itemIndex = 0;
c("timer6")->enable = true;
}
