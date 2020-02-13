<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagPath = ($this->image) ?  $this->image : 'profile/FX1zYplGTKhRCl9dyQH8pAaqIzRsbHdjAQ9Ym04N.jpeg';

        return '/storage/' . $imagPath ;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
