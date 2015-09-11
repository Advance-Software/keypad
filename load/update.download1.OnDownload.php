<?php c("update")->caption = 'Download: '.round($pos/1024).' KB out of '
                      .round($max/1024).' KB';

c("progress1")->position = $pos;
c("progress1")->max      = $max;
