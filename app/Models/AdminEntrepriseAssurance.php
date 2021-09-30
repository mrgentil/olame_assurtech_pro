<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class AdminEntrepriseAssurance extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'firstName',
        'lastName',
        'adress',
        'phone',
        'genre',
        'image',
        'user_id',
        'permission_id',
        'entreprise_assurance_id'
    ];
    public function getLgLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Assurance' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getSmLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Assurance' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getXsLogoAttribute()
    {
        return  asset('images' . DIRECTORY_SEPARATOR
            . 'Assurance' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class,'permission_id');
    }

    public function entrepriseAssurance()
    {
        return $this->belongsTo(EntrepriseAssurance::class,'entreprise_assurance_id');
    }

    public function agents()
    {
        return $this->hasMany(AgentCommercial::class);
    }
}
