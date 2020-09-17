<?php

use System\Application;



    function pre($var)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

if (! function_exists('pred')) {
     /**
     * Hình dung biến đã cho trong trình duyệt và thoát khỏi ứng dụng
     *
     * @param mixed $var
     * @return void
     */
    function pred($var)
    {
        pre($var);
        die;
    }
}

if (! function_exists('array_get')) {
     /**
     * Nhận giá trị từ mảng đã cho cho khóa đã cho nếu tìm thấy
     * nếu không thì lấy giá trị mặc định
     *
     * @param array $array
     * @param string|int $key
     * @param mixed $default
     */
    function array_get($array, $key, $default = null)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }
}

if (! function_exists('_e')) {
     /**
     * Thoát khỏi giá trị đã cho
     *
     * @param string $value
     * @return string
     */
    function _e($value)
    {
        return htmlspecialchars($value);
    }
}

if (! function_exists('assets')) {
     /**
     * Tạo đường dẫn đầy đủ cho đường dẫn đã cho trong thư mục công khai
     *
     * @param string $path
     * @return string
     */
    function assets($path)
    {
        $app = Application::getInstance();

        return $app->url->link('public/' . $path);
    }
}

if (! function_exists('url')) {
     /**
     * Tạo đường dẫn đầy đủ cho đường dẫn đã cho
     *
     * @param string $path
     * @return string
     */
    function url($path)
    {
        $app = Application::getInstance();

        return $app->url->link($path);
    }
}

if (! function_exists('read_more')) {
    /**
    * Cắt chuỗi đã cho và lấy số từ đã cho từ nó
    *
    * @param string $string
    * @param int $number_of_words
    * @return string
    */
    function read_more($string, $number_of_words)
    {
        // loại bỏ bất kỳ giá trị trống trong mảng
        $words_of_string = array_filter(explode(' ' , $string));
        if (count($words_of_string) <= $number_of_words) {
            return $string;
        }

        return implode(' ', array_slice($words_of_string, 0, $number_of_words));
    }
}

if (! function_exists('seo')) {

    function seo($string)
    {
        //remove marks
        $search = array 
        (
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
        ) ;
        $replace = array 
        (
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        ) ;
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        // loại bỏ bất kỳ khoảng trắng nào từ đầu và
        // phần cuối của chuỗi đã cho
        $string = trim($string);



        // thay thế mọi ký tự không phải tiếng Anh hoặc số và dấu gạch ngang bằng khoảng trắng
        $string = preg_replace('#[^\w]#', ' ' , $string);
        // thay thế nhiều khoảng trắng chỉ bằng một khoảng trắng
        $string = preg_replace('#[\s]+#', ' ', $string);

        // thay thế khoảng trắng bằng dấu gạch ngang
        $string = str_replace(' ', '-', $string);


        // tạo tất cả các chữ cái bằng chữ cái in hoa nhỏ
        // và cắt bất kỳ dấu gạch ngang
        return trim(strtolower($string), '-');
    }
}
