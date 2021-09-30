<?php

namespace App\Models;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rccm',
        'assurance',
        'agent_commercial_id',
        'adress',
        'image',
        'secteur_activity',
        'prime',
        'province',
        'branche_assurance_id',
        'user_id',
        'permission_id',
        'entreprise_assurance_id'

    ];
    public function getLgLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Client' . DIRECTORY_SEPARATOR . 'lg' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getSmLogoAttribute()
    {
        return  asset( 'images' . DIRECTORY_SEPARATOR
            . 'Client' . DIRECTORY_SEPARATOR . 'sm' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function getXsLogoAttribute()
    {
        return  asset('images' . DIRECTORY_SEPARATOR
            . 'Client' . DIRECTORY_SEPARATOR . 'xs' . DIRECTORY_SEPARATOR . $this->image);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class,'permission_id');
    }

    public function agentCommercial()
    {
        return $this->belongsTo(AgentCommercial::class,'agent_commercial_id');
    }

    public function branche()
    {
        return $this->belongsTo(BrancheAssurance::class,'branche_assurance_id');
    }

    public function devis () {
        return $this->hasMany(Devis::class);
    }

    public function getPrime()
    {
        if ($this->prime <= 0)
        {
            return 0;
        }
        $prime = $this->prime->sum();
        return $prime; //$amount*100/$this->raised;
    }

    public function getMonthAttribute()
    {
        return ucfirst((new Carbon($this->created_at))->translatedFormat('F'));
    }
    public function getYearAttribute()
    {
        return ucfirst((new Carbon($this->created_at))->translatedFormat('Y'));
    }

}
