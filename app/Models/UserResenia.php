<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResenia extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'resenia_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function resenia()
    {
        return $this->belongsTo(Resenia::class, 'resenia_id');
    }
}
