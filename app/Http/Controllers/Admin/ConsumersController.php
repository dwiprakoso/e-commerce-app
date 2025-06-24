<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsumersController extends Controller
{
    public function index()
    {
        return view('admin.page.consumers.index');
    }
}
