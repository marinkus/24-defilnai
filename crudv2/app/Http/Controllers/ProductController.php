<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;

        if ($request->file('image')) {
            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;

            $Image = Image::make($image)->resize(100, 100);

            $Image->save(public_path() . '/products/' . $file);

            // $image->move(public_path() . '/products', $file);

            $product->image = asset('/products') . '/' . $file;
        }

        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->shop_id = $request->shop_id;
        $product->save;
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->shop_id = $request->shop_id;

        if ($request->delete_image) {
            unlink(public_path() . '/products/' . pathinfo($product->image, PATHINFO_FILENAME) . '.' . pathinfo($product->image, PATHINFO_EXTENSION));
            $product->image = null;
        }

        if ($request->file('image')) {
            if ($product->image) {
                unlink(public_path() . '/products/' . pathinfo($product->image, PATHINFO_FILENAME) . '.' . pathinfo($product->image, PATHINFO_EXTENSION));
            }
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
            $Image = Image::make($image)->resize(100, 100);
            $Image->save(public_path() . '/products/' . $file);
            $product->image = asset('/products') . '/' . $file;
        }

        $product->save;
        return redirect()->back();
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
