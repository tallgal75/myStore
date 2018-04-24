<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductSize;
use App\ProductColour;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category='')
    {
        if($category == '') {
            $products = Product::all();
        }
        else {
            $products = Products::where('category', '=', $category)->all();
        }
        return view('pages/shop', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories      = Category::all();
        $product_colours = ProductColour::all();
        $product_sizes   = ProductSize::all();
        return view('admin/products/index', compact('categories','product_colours','product_sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $product_colours = ProductColour::all();
        $product_sizes   = ProductSize::all();
        return view('shop/detail', compact('categories','product_colours','product_sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product_colours = ProductColour::all();
        $product_sizes   = ProductSize::all();
        return view('admin/products/edit', compact('categories','product_colours','product_sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id
    {
        //
    }
}
