<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'tbl_werkstukken';

    protected $fillable = ['owner_id', 'title', 'content', 'submission_date'];
}