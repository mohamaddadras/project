<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.market.category.index');
    }

    public function create()
    {
        return view('admin.market.category.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
