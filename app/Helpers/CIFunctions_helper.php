<?php

use App\Libraries\CIAuth;
// use App\Models\Category;
// use App\Models\SubCategory;
use App\Models\User;
// use App\Models\Setting;
// use App\Models\SocialMedia;
// use App\Models\Post;
// use Carbon\Carbon;

if (!function_exists('get_user')) {
    function get_user()
    {
        if (CIAuth::check()) {
            $user = new User();
            return $user->asObject()->where('id_user', CIAuth::id())->first();
        } else {
            return null;
        }
    }
}
