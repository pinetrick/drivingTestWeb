<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserExplainAgree extends Model
{
    use SoftDeletes;
    protected $table = 'user_explain_agree';
}