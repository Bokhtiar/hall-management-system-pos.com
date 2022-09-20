<?php

namespace App\Models;

use App\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Category extends Model
{
    use HasFactory;
    use CrudTrait;

    /**database table with field */
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_body',
    ];

    /**validation */
    public function scopeValidation($value, $request)
    {
        return Validator::make($request, [
            'category_name' => 'string | required | min:3',
        ])->validate();
    }
}