<?php
 $images = [
 ['file' => 'batman',
 'caption' => 'Batman'],
 ['file' => 'superman',
 'caption' => 'Superman'],
 ['file' => 'wonderwoman',
 'caption' => 'Wonder Woman'],
 ['file' => 'greenlantern',
 'caption' => 'Green Lantern'],
 ['file' => 'flash',
 'caption' => 'Flash'],
 ['file' => 'aquaman',
 'caption' => 'Aquaman'],
 ];
 $i = rand(0, count($images)-1);
 $k0 = $i;
 $selectedImage = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];

 $i = rand(0, count($images)-1);
 $k1 = $i;
if($k1 != $k0) {
 $selectedImage1 = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
}
else {
    for($i = 1; $i <= 20; $i++){
        $i = rand(0, count($images)-1);
        $k1 = $i;
        if($k1 != $k0){
            $selectedImage1 = "images/{$images[$i]['file']}.jpg";
            $caption = $images[$i]['caption'];
            break;
        }
    }
}


    $i = rand(0, count($images)-1);
    $k2 = $i;
if($k1 != $k2 && $k2 != $k0) {
 $selectedImage2 = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
}
else {
    for($i = 1; $i <= 20; $i++){
        $i = rand(0, count($images)-1);
        $k2 = $i;
        if($k2 != $k1 && $k2 != $k0){
            $selectedImage2 = "images/{$images[$i]['file']}.jpg";
            $caption = $images[$i]['caption'];
            break;
        }
    }
}


    $i = rand(0, count($images)-1);
    $k3 = $i;
if($k3 != $k2 && $k3 != $k1 && $k3 != $k0) {
 $selectedImage3 = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
}
else {
    for($i = 1; $i <= 20; $i++){
        $i = rand(0, count($images)-1);
        $k3 = $i;
        if($k3 != $k2 && $k3 != $k1 && $k3 != $k0){
            $selectedImage3 = "images/{$images[$i]['file']}.jpg";
            $caption = $images[$i]['caption'];
            break;
        }
    }
}


    $i = rand(0, count($images)-1);
    $k4 = $i;
if($k4 != $k3 && $k4 != $k2 && $k4 != $k1 && $k4 != $k0) {
 $selectedImage4 = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
}
else {
    for($i = 1; $i <= 20; $i++){
        $i = rand(0, count($images)-1);
        $k4 = $i;
        if($k4 != $k3 && $k4 != $k2 && $k4 != $k1 && $k4 != $k0){
            $selectedImage4 = "images/{$images[$i]['file']}.jpg";
            $caption = $images[$i]['caption'];
            break;
        }
    }
}


    $i = rand(0, count($images)-1);
    $k5 = $i;
if($k5 != $k4 && $k5 != $k3 && $k5 != $k2 && $k5 != $k1 && $k5 != $k0) {
 $selectedImage5 = "images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];
}
else {
    for($i = 1; $i <= 20; $i++){
        $i = rand(0, count($images)-1);
        $k5 = $i;
        if($k5 != $k4 && $k5 != $k3 && $k5 != $k2 && $k5 != $k1 && $k5 != $k0){
            $selectedImage5 = "images/{$images[$i]['file']}.jpg";
            $caption = $images[$i]['caption'];
            break;
        }
    }
}


if (file_exists($selectedImage) && is_readable($selectedImage)) {
 $imageSize = getimagesize($selectedImage);
 }