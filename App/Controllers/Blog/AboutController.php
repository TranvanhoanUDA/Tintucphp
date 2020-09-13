<?php

namespace App\Controllers\Blog;

use System\Controller;

class AboutController extends Controller 
{
    /**
    * Hiển thị form đăng nhập
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('aboutus');


        $view = $this->view->render('blog/users/about');

        return $this->blogLayout->render($view);
    }
} 