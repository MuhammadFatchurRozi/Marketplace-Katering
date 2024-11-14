<?php

namespace App\Models\customers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Call Model
use App\Models\merchant\M_Menu;
use App\Models\User;

class C_Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function menu()
    {
        return $this->belongsTo(M_Menu::class, 'menu_id', 'id');
    }
}
