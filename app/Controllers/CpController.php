<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CpController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('cp/index', $data);
    }

    public function error()
    {
        $data = [
            'title' => 'Error Page',
        ];
        return view('cp/error', $data);
    }
}
