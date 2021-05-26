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
        'revoked'
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
     * @return int
     */
    public function getKey(): int
    {
        return $this->getAttribute('key');
    }

    /**
     * get the revoked for a token
     *
     * @return int
     */
    public function getRevoked(): int
    {
        return $this->getAttribute('revoked');
    }

    /**
     * get the created at time for a token
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->getAttribute('created_at');
    }

}
