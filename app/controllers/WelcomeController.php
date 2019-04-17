<?php

namespace App\Controllers;

use App\Controllers\Controller;

class WelcomeController extends Controller {

    public function welcome() {

        return view('welcome');

    }

    public function testParams($year, $month, $day) {
        echo json_encode(compact('year', 'month', 'day'));
    }

}