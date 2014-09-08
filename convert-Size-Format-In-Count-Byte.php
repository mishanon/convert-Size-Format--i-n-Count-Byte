<?php

    /**
     * Конвектируем формар размер файла(или памяти) пример 405M, 406.5K, 1.7G в количество байтов
     * @param $strSize
     * @param array $formatArray
     * @return int
     */
    function convertSizeFormatInCountByte($strSize, $formatArray = array('T', 'G', 'M', 'K', '')) {
        $size = (float) $strSize;
        $type = str_replace($size, '', $strSize);
        $realSize = 0;
        switch($type) {
            case $formatArray[0]: // terabyte
                $realSize =  $size * 1024 * 1024 * 1024 * 1024;
                break;
            case $formatArray[1]: // gigabyte
                $realSize =  $size * 1024 * 1024 * 1024;
                break;
            case $formatArray[2]: // megabyte
                $realSize =  $size * 1024 * 1024;
                break;
            case $formatArray[3]: // kilobyte
                $realSize =  $size * 1024;
                break;
            case $formatArray[4]: // byte
                $realSize =  $size;
                break;
        }
        return (int) $realSize;
    }