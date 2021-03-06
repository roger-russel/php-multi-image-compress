<?php

namespace PhpMultiImageCompress;

use PhpMultiImageCompress\Format\Jpeg;
use PhpMultiImageCompress\Format\Gif;
use PhpMultiImageCompress\Format\Png;

define('__OPT__', realpath(__DIR__ . '/../opt'));

Class Compressor {

  public function it($full_image_path){

    switch(exif_imagetype($full_image_path)){
      case IMAGETYPE_JPEG:
        Jpeg::compress($full_image_path);
        break;
      case IMAGETYPE_PNG:
        Png::compress($full_image_path);
        break;
      case IMAGETYPE_GIF:
        Gif::compress($full_image_path);
        break;
    }
  }

}
