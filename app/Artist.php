<?php

namespace App;

use App\Manager;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['full_name', 'nick_name', 'search_box', 'label_id', 'manager_id', 'qisimah_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }
}
