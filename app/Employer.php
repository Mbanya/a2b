<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable =[

        'Company_name','location','phone','email',
        'title','description','department',
        'period'
    ];

}
