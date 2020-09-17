<?php

namespace App\Models;

use System\Model;

class CategoriesModel extends Model
{
     /**
     * tên bảng
     *
     * @var string
     */
    protected $table = 'categories';

     /**
     * tạo danh mục
     *
     * @return void
     */
    public function create()
    {
        $this->data('name', $this->request->post('name'))
             ->data('status', $this->request->post('status'))
             ->insert($this->table);
    }

     /**
     * Cập nhật bản ghi danh mục theo Id
     *
     * @param int $id
     * @return void
     */
    public function update($id)
    {
        $this->data('name', $this->request->post('name'))
             ->data('status', $this->request->post('status'))
             ->where('id=?', $id)
             ->update($this->table);
    }

     /**
     * các danh mục đã bật với tổng số bài đăng cho từng danh mục
     *
     * @return array
     */
    public function getEnabledCategoriesWithNumberOfTotalPosts()
    {
        //chia sẻ các danh mục trong ứng dụng để không gọi nó hai lần trong cùng một yêu cầu

        if (! $this->app->isSharing('enabled-categories')) {

            // trước tiên sẽ lấy các danh mục đã bật
            // và sẽ thêm một điều kiện khác là tổng số bài đăng
            // cho từng danh mục
            // phải nhiều hơn 0
            $categories = $this->select('c.id', 'c.name')
                               ->select('(SELECT COUNT(p.id) FROM posts p WHERE p.status="enabled" AND p.category_id=c.id) AS total_posts')
                               ->from('categories c')
                               ->where('c.status=?' , 'enabled')
                               ->having('total_posts > 0')
                               ->fetchAll();

            $this->app->share('enabled-categories', $categories);
        }

        return $this->app->get('enabled-categories');
    }

     /**
     * danh mục với các bài đăng
     *
     * @param int $id
     * @return array
     */
    public function getCategoryWithPosts($id)
    {
        $category = $this->where('id=? AND status=?', $id, 'enabled')->fetch($this->table);

        if (! $category) return [];

        // lấy trang hiện tại
        $currentPage = $this->pagination->page();
        // nhận các mục trên mỗi trang
        $limit = $this->pagination->itemsPerPage();

        // Đặt phần bù trừ
        $offset = $limit * ($currentPage - 1);

        $category->posts = $this->select('p.*', 'u.first_name', 'u.last_name')
                                ->select('(SELECT COUNT(co.id) FROM comments co WHERE co.post_id=p.id) AS total_comments')
                                ->from('posts p')
                                ->join('LEFT JOIN users u ON p.user_id=u.id')
                                ->where('p.category_id=? AND p.status=?', $id, 'enabled')
                                ->orderBy('p.id', 'DESC')
                                ->limit($limit, $offset)
                                ->fetchAll();

        // Lấy tổng số bài viết để phân trang
        $totalPosts = $this->select('COUNT(id) AS `total`')
                                ->from('posts')
                                ->where('category_id=? AND status=?', $id, 'enabled')
                                ->orderBy('id', 'DESC')
                                ->fetch();

        if ($totalPosts) {
            $this->pagination->setTotalItems($totalPosts->total);
        }

        return $category;
    }
}