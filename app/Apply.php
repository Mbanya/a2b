<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable =[

        'first_name','last_name','email',
        'phone_number','location','college','education','graduation_year',
        'graduation_month','interest','programme'
    ];

}
