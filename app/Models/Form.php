<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property mixed $invoice
 * @property mixed $image
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

    /**
     * @param $value
     * @return mixed
     */
    public function getInvoiceAttribute($value)
    {
        return url(Storage::url($value));
    }
    /**
     * @param $value
     * @return mixed
     */
    public function getImageAttribute($value)
    {
        return url(Storage::url($value));
    }
}
