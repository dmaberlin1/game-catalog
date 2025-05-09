<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
use HasFactory;

// Define the fillable attributes
protected $fillable = [
'title',
'developer',
'genre',
'release_date',
'platform',
'price',
'cover_image'
];
}
