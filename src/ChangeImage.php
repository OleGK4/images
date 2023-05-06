<?php

namespace ChangeImage;

class ChangeImage
{
    public function handle(): string
    {
        if (!isset($_FILES['filename'])) {
            return 'Файл не был загружен';
        }

        if ($_FILES['filename']['error'] !== UPLOAD_ERR_OK) {
            return 'Ошибка загрузки файла';
        }

        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/backend-practice/public/images/';
        $uploadFile = $uploadDir . basename($_FILES['filename']['name']);

        if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadFile)) {
            return 'Файл успешно загружен';
        } else {
            return 'Ошибка загрузки файла';
        }
    }
}