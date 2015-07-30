<?php if(c("projectfiles2")->items->count == c("projectfiles")->items->count){
c("tree1")->text .= c("projectfiles2")->text;
c("tree1")->absIndex = 2;
c("map->tree1")->text .= c("projectfiles2")->text;
c("map->tree1")->absIndex = 2;
c("timer6")->enable = false;
}
else{
c("projectfiles2")->items->add("  ".basename(c("projectfiles")->items->selected));
c("projectfiles")->itemIndex += 1;
}
