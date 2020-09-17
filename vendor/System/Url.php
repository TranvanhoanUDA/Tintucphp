<?php

namespace System;

class Url
{
     /**
     * Application Object
     *
     * @var \System\Application
     */
    protected $app;

     /**
     * Constructor
     *
     * @param \System\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

     /**
     * Tạo liên kết đầy đủ cho đường dẫn đã cho
     *
     * @param string $path
     * @return string
     */
    public function link($path)
    {
        return $this->app->request->baseUrl() . trim($path, '/');
    }

     /**
     * Chuyển hướng đến đường dẫn đã cho
     *
     * @param string $path
     * @return void
     */
    public function redirectTo($path)
    {
        header('location:' . $this->link($path));

        exit;
    }  
}