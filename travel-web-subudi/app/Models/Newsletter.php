<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
