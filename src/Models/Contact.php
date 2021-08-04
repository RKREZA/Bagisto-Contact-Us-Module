<?php

namespace RKREZA\Contact\Models;

use Illuminate\Database\Eloquent\Model;
use RKREZA\Contact\Contracts\Contact as ContactContract;

class Contact extends Model implements ContactContract
{
	protected $table = 'contacts';
    protected $fillable = ['name','email','message_title','message_body','message_reply']; 

}