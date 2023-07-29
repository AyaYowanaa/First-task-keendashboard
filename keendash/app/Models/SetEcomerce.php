<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetEcomerce extends Model
{
    use HasFactory;

    protected $table="set_ecomerces";

    protected $fillable =[
        'category_name','description'];
}
