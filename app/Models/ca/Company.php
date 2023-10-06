<?php

namespace App\Models\ca;

use App\Models\ca\CompanyDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the phone associated with the user.
     */
    public function company_details(): HasOne
    {
        return $this->hasOne(CompanyDetail::class);
    }
}
