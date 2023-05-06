<?php

use ChangeImage\ChangeImage;

if (!function_exists('changingImage')) {
    function changingImage(): ChangeImage
    {
        return new ChangeImage();
    }
}