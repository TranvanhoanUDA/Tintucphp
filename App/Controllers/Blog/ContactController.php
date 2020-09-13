<?php

namespace App\Controllers\Blog;

use System\Controller;

class ContactController extends Controller 
{
    /**
    * Hiển thị form đăng nhập
    *
    * @return mixed
    */
    public function index()
    {
        $this->blogLayout->title('Acontac US');


        $view = $this->view->render('blog/users/contact');

        return $this->blogLayout->render($view);
    }
} 