<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**Relations */
    public function products() :HasMany
    {
      return $this->hasMany(Product::class);
    }
    
    public function coupons() :BelongsTo
    {
      return $this->belongsTo(Coupon::class);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
      
    }


}
