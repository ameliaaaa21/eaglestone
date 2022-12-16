<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_sub_category_product(Request $request)
    {
        $sub_kategoris = SubCategory::where([
            ['category_id', '=', $request->p_kategori],
            ['active', 1]
        ])->get();

        return response()->json(['data' => $sub_kategoris]);
    }

    public function create()
    {
        $kategoris = Category::where('active', 1)->get();
        

        return view('admin.product', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->all();

            $product = new Product();
            $product->name = $data['nama_produk'];
            $product->category_id = $data['kategori'];

            if($data['kategori'] == 1){
                $product->sub_category_id = $data['sub_kategori'];    
            }
            

            $image_name = $data['nama_produk'] . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $image_name);
            $product->array_image = $image_name;

            $product->save();

            DB::commit();
            return redirect()->route('tambah_produk')->with('success_message', 'Produk berhasil ditambahkan!');          

        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json(['error_add_product' => $ex->getMessage() ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
