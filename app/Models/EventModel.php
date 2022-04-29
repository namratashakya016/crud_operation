<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates =['deleted_at'];
    protected $table ='event';
    protected $fillable = ['title','start_date','end_date','first_drop','second_drop'];
}
