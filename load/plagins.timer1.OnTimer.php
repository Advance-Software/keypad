<?php if(c("listBox1")->itemIndex == 0)
c("spButton2")->enabled = false;
else{
c("spButton2")->enabled = true;
if(c("listBox1")->items->selected == false){
c("spButton3")->enabled = false;
c("spButton2")->enabled = false;
c("spButton4")->enabled = false;
}
else{
c("spButton2")->enabled = true;
c("spButton3")->enabled = true;
c("spButton4")->enabled = true;
if(c("listBox1")->itemIndex == 0)
c("spButton2")->enabled = false;
}
}
