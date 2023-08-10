<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create()
    {
        return view('admin.menus.create');
    }
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }
    public function store(StoreMenuRequest $request)
    {
        $dbName = null;
        //dd($request);
        //$menu = Menu::find($request->menu_id);
        // dd($request->menu_id);
        $image = $request->image;
        //dd($image);
        if ($request->image) {
            $dbName = 'menu-image-' . time() . '.' . $image->clientExtension();
            $source = $image->getRealPath();
            //dd($source);
            $destination = 'uploads/menus/' . $dbName;
            copy($source, $destination);
            // dd($image);
        }

        Menu::create([
            'name' => $request->name,
            'price' => $request->price,

            'image' => $dbName,
            'description' => $request->description,

        ]);
        return to_route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        // dd($blog->category->id);
        //$categories = Category::get();
        // return view('admin.menus.edit',compact('menu','categories'));
        return view('admin.menus.edit', compact('menu'));
    }

    //     public function update(StoreMenuRequest $request, Menu $menu)
    //     {
    //         $image = $request->image;
    // //dd($image);
    //         if ($image) {
    //             if($menu->image)
    //             unlink('uploads/menus/'.$menu->image);

    //             $dbName = 'menu-image-' . time() . '.' . $image->clientExtension();
    //             $source = $image->getRealPath();
    //             $destination = 'uploads/menus/'.$dbName;
    //             copy($source,$destination);
    //             $menu->update($request->validated() + ['image'=> $dbName]);
    //         }
    //         else
    //         $menu->update($request->validated());

    //         return redirect(route('menus.index'))->with('success','menu updated successfully');
    //     }
    public function update(StoreMenuRequest $request, Menu $menu)
    {
        // $blog->category_id = $request->category_id;
        // $blog->save();
        $image = $request->image;
        if ($image) {
            if ($menu->image)
                unlink('uploads/menus/' . $menu->image);
            $dbName = 'menu-image-' . time() . '.' . $image->clientExtension();
            $source = $image->getRealPath();
            $destination = 'uploads/menus/' . $dbName;
            copy($source, $destination);
            $menu->update($request->validated() + ['image' => $dbName]);
        } else
            $menu->update($request->validated());

        return redirect(route('menus.index'))->with('success', 'menu updated successfully');
    }

    public function destroy(Menu $menu)
    {

        $menu->delete();
        return redirect(route('menus.index'))->with('success', 'Data deleted successfully');
    }
}
