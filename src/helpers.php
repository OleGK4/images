<?php


namespace ChangeImage;

if (!function_exists('changingImage')) {
    function changingImage(): ChangeImage
    {
        return new ChangeImage();
    }
}