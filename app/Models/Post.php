<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Post extends Model
{
    public function getFormattedDAte($column, $format = 'd-m-Y H:i')
    {
        return Carbon::create($this->$column)->format($format);

        
    }
    protected $fillable = ['title','author','content','date','url'] ;
}
