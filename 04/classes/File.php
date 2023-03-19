<?php

class File
{
    public $filename;
    public $fp;

    public function __construct($filename)
    {
        if (!is_writeable($filename)) {
            echo 'Файл:' . $filename . ' недоступен для записи';
            exit;
        }
        $this->filename = $filename;
        $this->fp = fopen($this->filename, 'a');
    }

    public function writeFile($text)
    {
        if (fwrite($this->fp, $text . PHP_EOL) === false) {
            echo 'Невозможно произвести запись в файл';
            exit;
        }
    }

    public function __destruct()
    {
        fclose($this->fp);
    }
}