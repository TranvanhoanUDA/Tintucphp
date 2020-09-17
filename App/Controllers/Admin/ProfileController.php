<?php

namespace App\Controllers\Admin;

use System\Controller;

class ProfileController extends Controller
{
    /**
    * Submit tạo user
    *
    * @return string | json
    */
    public function update()
    {
        $json = [];

        // lấy đối tượng người dùng hiện tại từ mô hình đăng nhập
        // lấy id 

        $user = $this->load->model('Login')->user();

        if ($this->isValid($user->id)) {
            $this->load->model('Users')->update($user->id, $user->users_group_id);

            $json['success'] = 'User Has Been Updated Successfully';

            $json['redirectTo'] = $this->request->referer() ?: $this->url->link('/admin');
        } else {
            $json['errors'] = $this->validator->flattenMessages();
        }

        return $this->json($json);
    }

     /**
     * Xác thực
     *
     * @param int $id
     * @return bool
     */
    private function isValid($id = null)
    {
        $this->validator->required('first_name', 'First Name is Required');
        $this->validator->required('last_name', 'Last Name is Required');
        $this->validator->required('email')->email('email');

        if ($this->request->post('password')) {
            $this->validator->required('password')->minLen('password', 8)->match('password', 'confirm_password', 'Confirm Password Should Match Password');
        }

        $this->validator->image('image');

        return $this->validator->passes();
    }
}