<?php

namespace App\Controllers\Admin;

use System\Controller;

class DashboardController extends Controller
{
     /**
     * hiển thị
     *
     * @return mixed
     */
    public function index()
    {
        $this->html->setTitle('Dashboard | Blog');

        $view = $this->view->render('admin/main/dashboard');

        return $this->adminLayout->render($view);
    }
}