<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'category_id', 'featured','slug'
    ];
    
    //return the complete path of image with domain. If you dont add this
    // it will only return the featuree name in database without http://domainname
    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
    
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Posts');
    }

}
