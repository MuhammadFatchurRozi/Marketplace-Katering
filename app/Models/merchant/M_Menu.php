<?php

namespace App\Models\merchant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Call Model
use App\Models\customers\C_Cart;
use App\Models\User;

class M_Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false; 
    protected $keyType = 'string';
    protected $guarded = [];

    public function cart()
    {
        return $this->hasMany(C_Cart::class, 'menu_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
