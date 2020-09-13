<?php

namespace App\Controllers\Admin;

use System\Controller;

class CategoriesController extends Controller
{
    /**
    * Hiển thị Danh sách Danh mục 
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('Categories');

        $data['categories'] = $this->load->model('Categories')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/categories/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * Mở from danh mục
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit để tạo danh mục mới
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            // nếu k lỗi
            $this->load->model('Categories')->create();

            $json['success'] = 'Category Has Been Created Successfully';

            $json['redirectTo'] = $this->url->link('/admin/categories');
        } else {
            // ngược lại
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * sửa Form
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $categoriesModel = $this->load->model('Categories');

        if (! $categoriesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $category = $categoriesModel->get($id);

        return $this->form($category);
    }

     /**
     * Hiển thị Form
     *
     * @param \stdClass $category
     */
    private function form($category = null)
    {
        if ($category) {
            // sửa form
            $data['target'] = 'edit-category-' . $category->id;

            $data['action'] = $this->url->link('/admin/categories/save/' . $category->id);

            $data['heading'] = 'Edit ' . $category->name;
        } else {
            // thêm form
            $data['target'] = 'add-category-form';

            $data['action'] = $this->url->link('/admin/categories/submit');

            $data['heading'] = 'Add New Category';
        }

        $data['name'] = $category ? $category->name : null;
        $data['status'] = $category ? $category->status : 'enabled';

        return $this->view->render('admin/categories/form', $data);
    }

    /**
    * Submit để tạo mới danh mục
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid()) {
            // nếu lỗi
            $this->load->model('Categories')->update($id);

            $json['success'] = 'Category Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/admin/categories');
        } else {
            // k thôi
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * xóa Record
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        $categoriesModel = $this->load->model('Categories');

        if (! $categoriesModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $categoriesModel->delete($id);

        $json['success'] = 'Category Has Been Deleted Successfully';

        return $this->json($json);
    }

     /**
     * xác thực
     *
     * @return bool
     */
    private function isValid()
    {
        $this->validator->required('name', 'Category Name is Required');

        return $this->validator->passes();
    }
}