<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;

class AuthController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIMail', 'CIFunctions'];
    public function loginForm()
    {
        $data = [
            'tabTitle' => 'Login',
            'validation' => null,
        ];
        return view('template/pages/auth/login', $data);
    }

    public function loginHandler()
    {
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'nama' : 'username';

        if ($fieldType == 'nama') {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|is_not_unique[user.nama]',
                    'errors' => [
                        'required' => 'Nama is required!',
                        'is_not_unique' => 'Nama not available',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[5]|max_length[25]',
                    'errors' => [
                        'required' => 'Password is required!',
                        'min_length' => 'The password must be at least 5 characters long',
                        'max_length' => 'The password must have a maximum length of 25 characters',
                    ]
                ]
            ]);
        } else {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|is_not_unique[user.username]',
                    'errors' => [
                        'required' => 'Username is required!',
                        'is_not_unique' => 'Username not available',
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[5]|max_length[25]',
                    'errors' => [
                        'required' => 'Password is required!',
                        'min_length' => 'The password must be at least 5 characters long',
                        'max_length' => 'The password must have a maximum length of 25 characters',
                    ]
                ]
            ]);
        }

        if (!$isValid) {
            return view('template/pages/auth/login', [
                'tabTitle' => 'Login',
                'validation' => $this->validator
            ]);
        } else {
            $user = new User();
            $userInfo = $user->where($fieldType, $this->request->getVar('login_id'))->first();
            $check_password = Hash::check($this->request->getVar('password'), $userInfo['password']);

            if (!$check_password) {
                return redirect()->route('admin.login.form')->with('fail', 'Wrong Password')->withInput();
            } else {
                CIAuth::setCIAuth($userInfo); //! Line Penting
                return redirect()->route('admin.home');
            }
        }
    }
}
