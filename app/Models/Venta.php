<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fecha','user_id',
        'producto','total'
    ];

    public function productos(){
        return $this->hasMany(Producto::class);
    } 

    public function usuario(){
        return $this->belongsTo(User::class);
    }

    public function socio(){
        return $this->hasOne(Socio::class);
    }
}
