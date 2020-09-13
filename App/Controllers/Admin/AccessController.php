<?php

namespace App\Controllers\Admin;

use System\Controller;

class AccessController extends Controller
{
    /**
    * Kiểm tra Quyền của người dùng để truy cập các trang quản trị
    *
    */
    public function index()
    {
        $loginModel = $this->load->model('Login');

        $ignoredPages = ['/admin/login', '/admin/login/submit'];
                         
        $currentRoute = $this->route->getCurrentRouteUrl();

       //    Người dùng chưa đăng nhập và anh ta không yêu cầu trang đăng nhập
       // sau đó chúng tôi sẽ chuyển hướng anh ta đến trang đăng nhập
        if (($isNotLogged =  ! $loginModel->isLogged()) AND ! in_array($currentRoute , $ignoredPages)) {
            return $this->url->redirectTo('/admin/login');
        }

        // đến dòng này
        // có hai khả năng
        // Đầu tiên, người dùng chưa đăng nhập và đang yêu cầu trang đăng nhập
        // Thứ hai Người dùng đã đăng nhập thành công và ng dùng đang yêu cầu
        // một trang quản trị

        if ($isNotLogged) {
            return false;
        }

        $user = $loginModel->user();

        $usersGroupsModel = $this->load->model('UsersGroups');

        $usersGroup = $usersGroupsModel->get($user->users_group_id);

        // Nếu người dùng không có quyền truy cập trang này
        // sẽ được chuyển hướng đến trang 404
        if (! in_array($currentRoute, $usersGroup->pages)) {
            // tạo trang bị từ chối truy cập
            return $this->url->redirectTo('/404');
        }
    }
}