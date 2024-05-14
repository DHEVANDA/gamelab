<?php

namespace App\Http\Controllers;

//inport model
use App\Models\Menu;

//return view
use Illuminate\View\View;

//return type redirectResponse //materi create
use Illuminate\Http\RedirectResponse;

//import Facade "Storage" //materi edit
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class MenuController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get menus dari Model Menu
        $menus = Menu::latest()->paginate(5);

        //render view with menus
        return view('menus.index', compact('menus'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('menus.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama_menu'     => 'required|min:5',
            'harga'     => 'required|min:3',
            'deskripsi'   => 'required|min:10'
        ]);

        //upload gambar
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/menus', $gambar->hashName());

        //create Menu
        Menu::create([
            'gambar'     => $gambar->hashName(),
            'nama_menu'     => $request->nama_menu,
            'harga'     => $request->harga,
            'deskripsi'   => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('menus.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

     /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get menu by ID
        $menu = Menu::findOrFail($id);

        //render view with menu
        return view('menus.show', compact('menu'));
    }

     /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get menu by ID
        $menu = Menu::findOrFail($id);

        //render view with menu
        return view('menus.edit', compact('menu'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama_menu'     => 'required|min:5',
            'harga'     => 'required|min:3',
            'deskripsi'   => 'required|min:10'
        ]);

        //get menu by ID
        $menu = Menu::findOrFail($id);

        //check if gambar is uploaded
        if ($request->hasFile('gambar')) {

            //upload new gambar
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/menus', $gambar->hashName());

            //delete old gambar
            Storage::delete('public/menus/'.$menu->gambar);

            //update menu with new gambar
            $menu->update([
                'gambar'     => $gambar->hashName(),
                'nama_menu'     => $request->nama_menu,
                'harga'     => $request->harga,
                'deskripsi'   => $request->deskripsi
            ]);

        } else {

            //update menu without gambar
            $menu->update([
                'nama_menu'     => $request->nama_menu,
                'harga'     => $request->harga,
                'deskripsi'   => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->route('menus.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $menu = Menu::findOrFail($id);
        //delete image
        Storage::delete('public/menus/'. $menu->gambar);
        //delete post
        $menu->delete();
        //redirect to index
        return redirect()->route('menus.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
