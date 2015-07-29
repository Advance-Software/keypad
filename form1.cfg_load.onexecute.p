<?php $cfgile = winLocalPath( CSIDL_PERSONAL ) . '/KeyPad/config.ini';

$buff = null;

ini::open( $cfgile );

ini::read('main', 'wordWrap', $buff);
c("memo1")->wordWrap = (boolean)$buff;


ini::read('main', 'ws', $buff);
c("Form1")->windowState = (int)$buff;

ini::read('main', 'width', $buff);
if( $buff ) c("Form1")->w = $buff;

ini::read('main', 'height', $buff);
if( $buff ) c("Form1")->h = $buff;

ini::read('main', 'x', $buff);
if( $buff ){

   c("Form1")->x = $buff;
}

ini::read('main', 'y', $buff);
if( $buff ){
   //c("Form1")->position = poDefault;
   c("Form1")->y = $buff;
}



ini::read('font', 'name', $buff);
if ( $buff ) c("memo1")->font->name = $buff;

ini::read('font', 'size', $buff);
if ( $buff ) c("memo1")->font->size = $buff;
