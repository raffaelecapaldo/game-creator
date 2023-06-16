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

    public function create()
    {
        return view('admin.items.create');
    }

    public function edit(Item $item)
    {
        return view('admin.items.edit', compact('item'));
    }

    public function show(Item $item){
        return view('admin.items.show', compact('item'));
    }

    public function store(StoreItemRequest $request)
    {
        $data = $request->validated();
        $newitem = new Item();
        $newitem->fill($data);
        $newitem->save();

        return redirect()->route('admin.items.show', $newitem->slug);
    }



    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')->with('message', "$item->name eliminato correttamente.");
    }
}
