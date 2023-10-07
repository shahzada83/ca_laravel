<?php

namespace App\Models\ca;

use App\Models\ca\CompanyDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
