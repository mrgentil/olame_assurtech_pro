<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\EntrepriseAssurance;
use Spatie\Permission\Traits\HasRoles;
use YoHang88\LetterAvatar\LetterAvatar;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;  use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($avatar)
    {
        return $avatar;
    }

    public function getAvatarWithoutHostAttribute()
    {
        if ($this->avatar === 'assets/images/users/user-1.jpg') {
            return new LetterAvatar($this->name, 'circle', 100);
        }

        if (Str::startsWith($this->avatar, 'http://') || Str::startsWith($this->avatar, 'https://')) {
            return asset($this->avatar);
        } else {
            return ($this->avatar);
        }
    }

    public function adminRegulateur(){
        return $this->hasOne(AdminRegulateur::class);
    }

    public function adminEntreprise(){
        return $this->hasOne(AdminEntrepriseAssurance::class);
    }

    public function agentRegulateur(){
        return $this->hasOne(AgentRegulateur::class);
    }

    public function agentCommercial(){
        return $this->hasOne(AgentCommercial::class);
    }

    public function client(){
        return $this->hasOne(Client::class);
    }

    public function devis () {
        return $this->hasOne(Devis::class);
    }

    public function getPercentage()
    {
        $users = User::all();
        $percentage = $users->sum();
        return $percentage*100/$users;
    }

    public function entrepriseAssurance(){
        return $this->HasOne(EntrepriseAssurance::class);
    }
}
