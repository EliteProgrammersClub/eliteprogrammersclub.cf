<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Subscriber extends Model
{

    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
