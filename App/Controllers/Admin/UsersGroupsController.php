<?php

namespace App\Controllers\Admin;

use System\Controller;

class UsersGroupsController extends Controller
{
    /**
    * hiển thị danh sách
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('Users Groups');

        $data['users_groups'] = $this->load->model('UsersGroups')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/users-groups/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * mở form
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit để tạo
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            $this->load->model('UsersGroups')->create();

            $json['success'] = 'Users Group Has Been Created Successfully';

            $json['redirectTo'] = $this->url->link('/admin/users-groups');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * sửa
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $usersGroupsModel = $this->load->model('UsersGroups');

        if (! $usersGroupsModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $usersGroup = $usersGroupsModel->get($id);

        return $this->form($usersGroup);
    }

     /**
     * hiện form
     *
     * @param \stdClass $usersGroup
     */
    private function form($usersGroup = null)
    {
        if ($usersGroup) {
            // thực hiện sửa
            $data['target'] = 'edit-users-group-' . $usersGroup->id;

            $data['action'] = $this->url->link('/admin/users-groups/save/' . $usersGroup->id);

            $data['heading'] = 'Edit ' . $usersGroup->name;
        } else {
            // thực hiện thêm
            $data['target'] = 'add-users-group-form';

            $data['action'] = $this->url->link('/admin/users-groups/submit');

            $data['heading'] = 'Add New Users Group';
        }

        $data['name'] = $usersGroup ? $usersGroup->name : null;

        $data['users_group_pages'] = $usersGroup ? $usersGroup->pages : [];

        //$data['status'] = $usersGroup ? $usersGroup->status : 'enabled';

        $data['pages'] = $this->getPermissionPages();

        return $this->view->render('admin/users-groups/form', $data);
    }

     /**
     * hiện tất cả các danh sách quyền
     *
     * @return array
     */
     private function getPermissionPages()
     {
         $permissions = [];

         foreach ($this->route->routes() AS $route) {
             if (strpos($route['url'], '/admin') === 0) {
                 $permissions[] = $route['url'];
             }
         }

         return $permissions;
     }

    /**
    * Submit để tạo nhóm người dùng mới
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid()) {
            $this->load->model('UsersGroups')->update($id);

            $json['success'] = 'Users Groups Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/admin/users-groups');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * xóa
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        $usersGroupsModel = $this->load->model('UsersGroups');

        if (! $usersGroupsModel->exists($id) OR $id == 1) {
            return $this->url->redirectTo('/404');
        }

        $usersGroupsModel->delete($id);

        $json['success'] = 'Users Group Has Been Deleted Successfully';

        return $this->json($json);
    }

     /**
     * xác thực
     *
     * @return bool
     */
    private function isValid()
    {
        $this->validator->required('name', 'Users Group Name is Required');

        return $this->validator->passes();
    }
}