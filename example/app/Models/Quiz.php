<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function getPhotoAttribute($value)
{
    return 'Images/' . $value; // Adjust according to your file structure
}
}



