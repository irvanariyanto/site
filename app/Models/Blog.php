<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $table ="blog";
    public $timestamps = false; //create_at update_at ngga ada

    //whitelist
    // protected $fillable=['title','description'];


    //blacklist
    protected $guarded=['created_at'];

}
 
