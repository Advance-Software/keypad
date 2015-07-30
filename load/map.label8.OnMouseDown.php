<?php global $sx, $sy, $fx, $fy;
$sx = cursor_pos_x();
$sy = cursor_pos_y();
$fx = c('map')->x;
$fy = c('map')->y;
c('map->timer1')->enable = true;
