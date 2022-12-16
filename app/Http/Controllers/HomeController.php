<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_product()
    {
        $kategoris = Category::where('active', 1)->get();
        $sub_kategoris = SubCategory::where('active', 1)->get();
        $produks = Product::where('active', 1)->get();

        return view('product', compact('kategoris', 'sub_kategoris', 'produks'));
    }
}
