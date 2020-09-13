<?php

namespace App\Models;

use System\Model;

class LoginModel extends Model
{
     /**
     * Tên bảng
     *
     */ 
    protected $table = 'users';

     /**
     * Dữ liệu người dùng
     *
     */
    private $user;

    /**
    * Người dùng đã đăng nhập
    *
    */

    /**
    * Xác định xem dữ liệu đăng nhập đã cho có hợp lệ không
    *
    * @param string $email
    * @param string $password
    * @return bool
    */
    public function isValidLogin($email, $password)
    {
        $user = $this->where('email=?' , $email)->fetch($this->table);

        if (! $user) {
            return false;
        }

        $this->user = $user;

        return password_verify($password, $user->password);
    }

    /**
    * Nhận dữ liệu người dùng đã đăng nhập
    *
    * @return \stdClass
    */
    public function user()
    {
        return $this->user;
    }

    /**
    * Xác định xem người dùng đã đăng nhập hay chưa
    *
    * @return bool
    */
    public function isLogged()
    {
        if ($this->cookie->has('login')) {
            $code = $this->cookie->get('login');
            //$code = ''; // Chỉ tạm thời
        } elseif ($this->session->has('login')) {
            $code = $this->session->get('login');
        } else {
            $code = '';
        }

        $user = $this->where('code=?' , $code)->fetch($this->table);

        if (! $user) {
            return false;
        }

        $this->user = $user;

        return true;
    }
}