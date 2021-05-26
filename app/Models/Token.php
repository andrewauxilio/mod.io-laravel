<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    /**
     * the fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'key',
        'revoked',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * get the id for a token
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    /**
     * get the key for a token
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->getAttribute('key');
    }

    /**
     * get the revoked for a token
     *
     * @return mixed
     */
    public function getRevoked(): string|null
    {
        return $this->getAttribute('revoked');
    }

    /**
     * get the created at time for a token
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->getAttribute('created_at');
    }

}
