<?php if(c("edit1")->text == ""){
c("spButton1")->enabled = false;
c("spButton3")->enabled = false;
c("spButton4")->enabled = false;
c("spButton5")->enabled = false;
}else{
c("spButton1")->enabled = true;
c("spButton3")->enabled = true;
c("spButton4")->enabled = true;
c("spButton5")->enabled = true;
}
c("search->checkbox2")->checked = c("checkbox2")->checked;
c("search->checkbox1")->checked = c("checkbox1")->checked;
c("search->checkbox3")->checked = c("checkbox3")->checked;
