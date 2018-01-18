<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 */
class Form extends Model
{
    protected $fillable = [
        'email',
        'name',
        'identification',
        'facebook',
        'address',
        'city',
        'number_invoice',
        'invoice',
        'image',
        'check',
    ];
}
