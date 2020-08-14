<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{

    protected $fillable = ['user_id', 'social_id', 'social_name', 'social_avatar'];

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

}
