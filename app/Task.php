<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $guarded = ['id'];

    public static $rules = [
        'user_id' => 'required',
        'title' => 'required',
        'description' => 'required',
    ];


    public function getTitle()
    {
        return $this->title;
    }
}
