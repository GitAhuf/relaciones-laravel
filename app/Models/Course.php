<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    //  $course = App\Models\Course::first();

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    // $lesson = App\Models\Lesson::first();

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
