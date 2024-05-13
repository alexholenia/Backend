<?php

class FileManager {
    public static $dir = "text";

    public static function WriteFile($fileName, $str) {
        $stream = fopen(FileManager::$dir . "/" . $fileName, "a");
        fwrite($stream, $str);
        fclose($stream);
    }

    public static function ReadFile($fileName) {
        $text = file_get_contents(FileManager::$dir . "/" . $fileName);
        echo $text;
    }

    public static function ClearFile($fileName) {
        $stream = fopen(FileManager::$dir . "/" . $fileName, "w");
        fclose($stream);
    }
}

FileManager::WriteFile("1.txt", "Checking text. some text. hello");
FileManager::ReadFile("1.txt");
FileManager::ClearFile("1.txt");