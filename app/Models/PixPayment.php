<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class PixPayment extends Model
{
    protected $fillable = [
        "transaction_id",
        "qr_code",
        "qr_code_base64",
        "expiration_date",
        "status",
        "payer_email",
        "response_payload"
    ];

    protected $casts = [
        'response_payload' => 'array',
        'expiration_date' => 'datetime',
    ];

    public function invoice(): MorphOne
    {
        return $this->morphOne(Invoice::class, 'payable');
    }
}
