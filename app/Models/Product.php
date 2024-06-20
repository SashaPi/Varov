<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot('qty');
    }

    protected $fillable = [
        'category_id',
        'title',
        'img_path',
        'price',
        'qty',
        'country',
        'year',
        'description',
    ];

}
