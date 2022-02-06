<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section2 extends Model
{
    use HasFactory;

    protected $table = "section2s";

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'subtitle', 'link'];
}
