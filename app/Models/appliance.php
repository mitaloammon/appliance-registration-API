<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appliance extends Model
{

    protected $table = 'appliances';

    protected $fillable = ['id', 'name', 'description', 'voltage', 'brand_product'];

    protected $guarded = ['id'];

    use HasFactory;
}
