<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Awobaz\Compoships\Compoships;

class Image extends Model
{
    use HasFactory;
    use \Awobaz\Compoships\Compoships;
    //protected $table = 'images';
    protected $fillable = ['id','album_id'];
    /*public function RecentImage()
    {
        return $this->belongsTo('App\Models\RecentImage',['album_id', 'id'], ['album_id', 'id']);
    }*/
}
