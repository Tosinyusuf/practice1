<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section3 extends Model
{
    use HasFactory;

    protected $table = "section3s";

    protected $primaryKey = 'id';

    protected $fillable = ['imagetitle', 'imagetext', 'imagelink', 'image'];
}
