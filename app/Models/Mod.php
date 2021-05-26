<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mod extends Model
{
    use HasFactory;

    /**
     * the fillable attributes
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'path',
        'user_id'
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
     * get the id for a mod
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    /**
     * get the name for a mod
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    /*
     * get the url for a mod
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->getAttribute('path');
    }

    /*
     * get the created_at for a mod
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->getAttribute('created_at');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
