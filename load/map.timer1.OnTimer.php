<?php global $sx, $sy, $fx, $fy;
c('map')->x = $fx - ($sx - cursor_pos_x());
c('map')->y = $fy - ($sy - cursor_pos_y());
