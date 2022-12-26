<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic_name',
        'description', 'image', 'category_id', 'painter_id', 'dimension_id'
    ];
    /**
     * Undocumented function
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function painter()
    {
        return $this->belongsTo(Painter::class);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
