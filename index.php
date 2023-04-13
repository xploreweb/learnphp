<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $color;
    public $material;

    public function open(){
        echo 'box is open';
    }
    public function close(){
        echo 'box is close';
    }
}

$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;
$box1->color = 'red';
$box1->material = 'wood';
var_dump($box1);
$box1->open();

$box2 = new Box();
$box2->width = 20;
$box2->height = 20;
$box2->length = 30;
$box2->color = 'green';
$box2->material = 'metal';
var_dump($box2);
$box2->open();

var_dump($box1);

class MetalBox extends Box {
    public $material = 'metal';
    public $conductivity;

    public function electrify(){
        echo 'wuush';
    }
}

$box3 = new MetalBox();
var_dump($box3);