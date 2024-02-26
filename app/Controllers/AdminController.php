<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;

class AdminController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail', 'CIFunctions'];
    protected $db;
    public function index()
    {
        $data = [
            'tabTitle' => 'Dashboard',
        ];

        return view('template/pages/home', $data);
    }

    public function logoutHandler()
    {
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('fail', "You're logged out!");
    }

    public function users()
    {
        $data = [
            'tabTitle' => 'Users',
        ];

        return view('template/pages/user', $data);
    }

    public function categories()
    {
        $data = [
            'tabTitle' => 'Categories',
        ];

        return view('template/pages/category', $data);
    }
}
