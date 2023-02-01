<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RajeevUser;

class RajeevUser extends Model
{
    use HasFactory;
    protected $fillable=['fname','lname','email','phone'];
}
