<?php

namespace App\Controllers\Blog;

use System\Controller;

class CategoryController extends Controller
{
     /**
     * hiển thị Category Page
     *
     * @param string name
     * @param int $id
     * @return mixed
     */
    public function index($title, $id)
    {
        $category = $this->load->model('Categories')->getCategoryWithPosts($id);

        if (! $category) {
            return $this->url->redirectTo('/404');
        }

        $this->html->setTitle($category->name);

        if ($category->posts) {
            $category->posts = array_chunk($category->posts, 2);
        } else {
            if ($this->pagination->page() != 1) {
                // huyển hướng người dùng đến trang đầu tiên của danh mục
                // bất kể có bài đăng hay không trong danh mục đó
                return $this->url->redirectTo("/category/$title/$id");
            }
        }

        $data['category'] = $category;

        $postController = $this->load->controller('Blog/Post');

            // trước tiên chuyển biến $ post sang biến $ post_box
            // trong tập tin xem
            // tại sao ? vì $ post_box là một chức năng ẩn danh
            // khi gọi nó, nó sẽ gọi phương thức "box"
            // từ bộ điều khiển bài đăng
            // vì vậy nó sẽ chuyển cho nó biến "$ post" được sử dụng trong
            // post-box view
        $data['post_box'] = function ($post) use ($postController) {
            return $postController->box($post);
        };

        $data['url'] = $this->url->link('/category/' . seo($category->name) . '/' . $category->id . '?page=');

        // Các bước phân trang
        // trước tiên chúng ta sẽ nhận được tổng số bài đăng cho danh mục
        // giới hạn các bài đăng được lấy cho danh mục
        // tức là tổng số bài đăng trong Danh mục chính trị là 90
        // giới hạn các bài đăng được lấy từ Danh mục chính trị là 10
        // 90 => tổng số mục
        // 10 => Số mục trên mỗi trang => giới hạn
        // 1 => trang hiện tại
        // offset = Các mục trên mỗi trang * (trang hiện tại - 1)
        // trang cuối cùng => tổng số trang = tổng số mục / mục trên mỗi trang
        // 9 => tổng số Trang => Trang Cuối cùng
        // tức là 2
        // giới hạn các bài đăng được lấy từ Danh mục chính trị là 10
        // Tổng số bài đăng trong danh mục chính trị là 87
        // bắt đầu từ phần bù
        // giả sử rằng trang hiện tại là 1
        // thì phần bù của chúng ta sẽ là 10 * (1 - 1) = 0
        // giả sử rằng trang hiện tại là 2
        // thì phần bù của chúng ta sẽ là 10 * (2 - 1) = 10
        // trang cuối cùng => tổng số trang = tổng số mục / mục trên mỗi trang
        // trang cuối = 87/10 => 8.7
        // trang cuối = ceil (87/10) = 9 => làm tròn
        // trang trước
        // trang đầu tiên
        // Trang tiếp theo
        // trang cuối
        $data['pagination'] = $this->pagination->paginate();

        $view = $this->view->render('blog/category', $data);

        return $this->blogLayout->render($view);
    }
}