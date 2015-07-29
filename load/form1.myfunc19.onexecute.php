<?php if(c("tree1")->absIndex == 0 or c("tree1")->absIndex == 1){
return;
}
else{
c("projectfiles")->itemIndex = c("tree1")->absIndex - 2;
global $gfn;
$gfn = c("projectfiles")->items->selected;
if($gfn != "")
myFunc12();
}
