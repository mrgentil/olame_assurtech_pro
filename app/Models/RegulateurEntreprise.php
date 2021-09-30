<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RegulateurEntreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'user_id',

    ];
    public function getLgLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Regulateur' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getSmLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Regulateur' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getXsLogoAttribute()
    {
        return  asset('images' . DIRECTORY_SEPARATOR
            . 'Regulateur' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
