<?php

namespace App\Controllers\Admin;

use System\Controller;

class UsersController extends Controller
{
    /**
    * hiện danh sách Users
    *
    * @return mixed
    */
    public function index()
    {
        $this->html->setTitle('Users ');

        $data['users'] = $this->load->model('Users')->all();

        $data['success'] = $this->session->has('success') ? $this->session->pull('success') : null;

        $view = $this->view->render('admin/users/list', $data);

        return $this->adminLayout->render($view);
    }

    /**
    * mở form user
    *
    * @return string
    */
    public function add()
    {
        return $this->form();
    }

    /**
    * Submit tạo mới user
    *
    * @return string | json
    */
    public function submit()
    {
        $json = [];

        if ($this->isValid()) {
            $this->load->model('Users')->create();

            $json['success'] = 'User Has Been Created Successfully';

            $json['redirectTo'] = $this->url->link('/admin/users');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     *sửa
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $usersModel = $this->load->model('Users');

        if (! $usersModel->exists($id)) {
            return $this->url->redirectTo('/404');
        }

        $user = $usersModel->get($id);

        return $this->form($user);
    }

     /**
     * hiện form
     *
     * @param \stdClass $user
     */
    private function form($user = null)
    {
        if ($user) {
            // thực hiện sửa
            $data['target'] = 'edit-user-' . $user->id;

            $data['action'] = $this->url->link('/admin/users/save/' . $user->id);

            $data['heading'] = 'Edit ' . $user->first_name . ' ' . $user->last_name;
        } else {
            // thêm
            $data['target'] = 'add-user-form';

            $data['action'] = $this->url->link('/admin/users/submit');

            $data['heading'] = 'Add New User';
        }

        $user = (array) $user;

        $data['first_name'] = array_get($user, 'first_name');
        $data['last_name'] = array_get($user, 'last_name');
        $data['status'] = array_get($user, 'status', 'enabled');
        $data['users_group_id'] = array_get($user, 'users_group_id');
        $data['email'] = array_get($user, 'email');
        $data['gender'] = array_get($user, 'gender');

        $data['birthday'] = '';
        $data['image'] = '';

        if (! empty($user['birthday'])) {
            $data['birthday'] = date('d-m-Y', $user['birthday']);
        }

        if (! empty($user['image'])) {
            //đường dẫn mặc định để tải lên hình ảnh của người dùng: public / images
            $data['image'] = $this->url->link('public/images/' . $user['image']);
        }

        $data['users_groups'] = $this->load->model('UsersGroups')->all();

        return $this->view->render('admin/users/form', $data);
    }

    /**
    * Submit để tạo mới 
    *
    * @return string | json
    */
    public function save($id)
    {
        $json = [];

        if ($this->isValid($id)) {
            $this->load->model('Users')->update($id);

            $json['success'] = 'Users  Has Been Updated Successfully';

            $json['redirectTo'] = $this->url->link('/admin/users');
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
        $usersModel = $this->load->model('Users');

        if (! $usersModel->exists($id) OR $id == 1) {
            return $this->url->redirectTo('/404');
        }

        $usersModel->delete($id);

        $json['success'] = 'User Has Been Deleted Successfully';

        return $this->json($json);
    }

     /**
     * xác thực
     *
     * @param int $id
     * @return bool
     */
    private function isValid($id = null)
    {
        $this->validator->required('first_name', 'First Name is Required');
        $this->validator->required('last_name', 'Last Name is Required');
        $this->validator->required('email')->email('email');
        $this->validator->unique('email', ['users', 'email', 'id', $id]);

        if (is_null($id)) {
            // nếu id là null
            // thì phương thức này được gọi để tạo người dùng mới
            // xác thực mật khẩu và cả hình ảnh 


            $this->validator->required('password')->minLen('password', 8)->match('password', 'confirm_password', 'Confirm Password Should Match Password');
            $this->validator->requiredFile('image')->image('image');
        } else {
            $this->validator->image('image');
        }

        return $this->validator->passes();
    }
}