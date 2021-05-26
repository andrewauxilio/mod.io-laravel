<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Token;

class Log extends Model
{

    /**
     * the fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'action',
        'key',
    ];

    /**
     * relationship with token
     *
     * @return BelongsTo
     */
    public function tokens(): BelongsTo
    {
        return $this->belongsTo(Token::class, 'key', 'key');
    }
}
