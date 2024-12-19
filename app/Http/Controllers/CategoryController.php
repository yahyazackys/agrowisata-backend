<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        // menampilkan data merk dari database
        $data = Category::orderBy('kategori_produk','ASC')->get();
        // dd($data);
        return view('category.index', compact('data') );
    }

    public function add()
    {
        // menampilkan form add.blade.php
        return view('category.add');
    }

    public function store(Request $request)
    {
        
        try {
            //fungsi insert data
            Category::create([
                'kategori_produk' => $request->kategori_produk, // ambil nilai dari inputan yg ada di form sesuai dengan atribut merk_productnya
                'status' => $request->status // ambil nilai dari inputan yg ada di form sesuai dengan atribut merk_productnya
            ]);

            return redirect('category');

        } catch (Exception $error) {
            //jika terjadi error
            return redirect()->back()->with([
                'failed' => $error->getMessage() // ambil pesan error yg di catch
            ]);
        }
    }

    public function edit($id)
    {
        $data = Category::find($id);

        return view('category.edit', compact('data') );
    }

    public function update(Request $request)
    {
        
        try {
            // ambil data merk berdasarkan idnya
            $id = $request->id;
        
            //fungsi update data
            Category::where('id', $id )->update([
                'kategori_produk' => $request->kategori_produk, // ambil nilai dari inputan yg ada di form sesuai dengan atribut merk_productnya 
                'status' => $request->status // ambil nilai dari inputan yg ada di form sesuai dengan atribut merk_productnya
            ]);

            return redirect('category');

        } catch (Exception $error) {
            //jika terjadi error
            return redirect()->back()->with([
                'failed' => $error->getMessage() // ambil pesan error yg di catch
            ]);
        }
    }

    public function delete($id)
    {
        try {
            Category::destroy($id);
            return redirect('category');
        } catch (Exception $error) {
            //jika terjadi error
            return redirect()->back()->with([
                'failed' => $error->getMessage() // ambil pesan error yg di catch
            ]);
        }
    }
}
