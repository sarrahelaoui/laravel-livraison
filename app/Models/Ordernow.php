<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class Ordernow extends Model
{
    use HasFactory;

    protected $fillable=[
           'nom',
           'Email',
           'category',
           'product',
           'quantity',
           'adresse-depart',
           'adresse-destin',
           'tel',
           'message',



    ];

}
