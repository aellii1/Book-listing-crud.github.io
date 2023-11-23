<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title',
        'Genre',
        'Author',
        'Pages',
        'Price',
        'Publication_Date',
    ];
}
