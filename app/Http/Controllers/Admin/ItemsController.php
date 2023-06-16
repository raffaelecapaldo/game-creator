<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }
}
