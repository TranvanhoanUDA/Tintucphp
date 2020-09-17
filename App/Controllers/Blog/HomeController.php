<?php

namespace App\Controllers\Blog;

use System\Controller;

class HomeController extends Controller
{
     /**
     * trang chủ
     *
     * @return mixed
     */
    public function index()
    {
        $data['posts'] = $this->load->model('Posts')->latest();

        $this->html->setTitle($this->settings->get('site_name'));

        $postController = $this->load->controller('Blog/Post');

        $data['post_box'] = function ($post) use ($postController) {
            return $postController->box($post);
        };

        // sử dụng phương thức getOutput () chỉ để hiển thị lỗi
        // vì  đang sử dụng php 7 đang ném tất cả các lỗi làm ngoại lệ
        // sẽ không được ném qua phương thức __toString ()
        $view = $this->view->render('blog/home', $data);

        return $this->blogLayout->render($view);
    }
}