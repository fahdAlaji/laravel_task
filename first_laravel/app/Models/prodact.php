<?php

namespace App\Models\Prodact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodact extends Model
{
    use HasFactory;
    protected $fullable=['name','price']; 

}
