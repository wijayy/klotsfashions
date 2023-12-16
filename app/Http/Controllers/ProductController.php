<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
 /**
  * Display a listing of the resource.
  */
 public function index()
 {
  return view("products", [
   "title" => "All Products",
   "products" => Product::latest()->search(request("search"))
    ->category(request("search"))->paginate(12)->withQueryString(),
  ]);
 }

 /**
  * Show the form for creating a new resource.
  */
 public function create()
 {
  //
 }

 /**
  * Store a newly created resource in storage.
  */
 public function store(StoreProductRequest $request)
 {
  //
 }

 /**
  * Display the specified resource.
  */
 public function show(Product $product)
 {
  return view("product", [
   'title' => $product->title,
   'images' => $product->image,
   "product" => $product,

  ]);
 }

 /**
  * Show the form for editing the specified resource.
  */
 public function edit(Product $products)
 {
  //
 }

 /**
  * Update the specified resource in storage.
  */
 public function update(UpdateProductRequest $request, Product $products)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  */
 public function destroy(Product $products)
 {
  //
 }
}
