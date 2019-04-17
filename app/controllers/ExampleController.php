<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ExampleController extends Controller {

    public function __construct()
    {

    }

    public function welcome() {
        echo 'welcome';
    }

    public function example($month) {
        var_dump($month);
    }
}