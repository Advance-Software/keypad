<?php $cfgile = winLocalPath( CSIDL_PERSONAL ) . '/KeyPad/config.ini';

if ( !is_dir( dirname($cfgile) ) )
     mkdir( dirname($cfgile), 0777, true );

ini::open( $cfgile );
ini::write('main', 'wordWrap', c("memo1")->wordWrap);
ini::write('main', 'width', c("Form1")->w );
ini::write('main', 'height', c("Form1")->h );
ini::write('main', 'x', c("Form1")->x );
ini::write('main', 'y', c("Form1")->y );
ini::write('main', 'ws', c("Form1")->windowState );

ini::write('font', 'name', c("memo1")->font->name);
ini::write('font', 'size', c("memo1")->font->size);
ini::write('font', 'color', c("memo1")->font->color);
ini::write('font', 'style', implode(',',c("memo1")->font->style));
ini::update();
