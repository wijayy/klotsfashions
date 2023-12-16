<?php

namespace App\Models;

use App\Models\ProductImages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 use HasFactory;

 protected $_quarded = ["id"];
 protected $_with = ['image'];

 public function image()
 {
  return $this->belongsTo(ProductImages::class, "images_id");
 }

 public function category()
 {
  return $this->belongsTo(Category::class, "category_id");
 }

 public function scopeSearch($query, $filters)
 {
  $query->when($filters ?? false, function ($query, $search) {
   return $query->where("title", "like", "%" . $search . "%")
    ->orWhere("price", "<=", $search);
  });
 }

 public function scopeCategory($query, $filters)
 {
  $query->when($filters ?? false, function ($query, $search) {
   return $query->orWhereHas("category", function ($query) use ($search) {
    $query->where("name", "like", "%" . $search . "%");
   });
  });
 }

 public function getRouteKeyName()
 {
  return 'slug';
 }
}
