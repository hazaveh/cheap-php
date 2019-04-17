<?php

namespace App\Controllers;

use App\Controllers\Controller;

class WelcomeController extends Controller {

    public function welcome() {

        return view('welcome');

    }

}