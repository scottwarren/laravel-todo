<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function homePageAction()
    {
        return view(
            'pages.homepage'
        );
    }
}
