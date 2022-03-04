<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExperienceUser extends Model
{
     // use HasFactory;
     use SoftDeletes;

     protected $table = 'experience_user';

     protected $dates = [
         'updated_at',
         'created_at',
         'deleted_at',
     ];

     protected $fillable = [
         'detail_user_id',
         'experience',
         'updated_at',
         'created_at',
         'deleted_at',
     ];
      // one to many
    public function detail_user()
    {
        return $this->belongsTo('App/Models/DetailUser','detail_user_id','id');
    }
}
