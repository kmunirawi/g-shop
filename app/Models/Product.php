<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**Relation */
    public function catoegory() :BelongsTo
    {
      return $this->belongsTo(Category::class);
    }

    public function cart() :BelongsTo
    {
      return $this->belongsTo(Cart::class);
    }
}
