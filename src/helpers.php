<?php

use ChangeImage\ChangeImage;

if (!function_exists('changeImage')) {
    function changeImage(): ChangeImage
    {
        return new ChangeImage();
    }
}