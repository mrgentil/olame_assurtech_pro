<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = [
        'assurance',
        'client_id'

    ];

    public function client ()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function user () {
        return $this->belongsTo(User::class);
    }


}