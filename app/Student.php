<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name',
    	'address',
    	'birthday',
    	'email_address',
    ];
    public $timestamps = false;
//    protected $dates = ['deleted_at'];
/*    public $StudentFields = [
    	'forms' => [
	    	'first_name'=>'',
	    	'middle_name'=>'',
	    	'last_name'=>'',
	    	'address'=>'',
	    	'birthday'=>'',
	    	'email_address'=>'',
	    ],
	    'formAttributes' => [
	    	'' => '',
	    ],

    ];*/
}
