<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'image', 'category_id', 'subtitle'];

    public static function boot()
    {
        parent::boot();

        static::creating(static function ($model) {
            $model->slug = str_slug($model->title);
        });
    }

    public function getImageAttribute($value)
    {
        return $value ?? 'Dare_Logo_AdmiralBlue_RGB.png';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
