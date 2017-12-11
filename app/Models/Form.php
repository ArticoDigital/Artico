<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['type-form', 'name', 'email', 'celphone', 'phone', 'name-company', 'website-company', 'city', 'do-company', 'website', 'appmobile', 'appweb',
        'seo', '3d', 'elearning', 'rrss', 'landing', 'adwords', 'ux', 'email-marketing', 'other', 'budget-max', 'budget-min', 'date-initial', 'date-end', 'not-sure',
        'summary', 'attached','code'];
}
