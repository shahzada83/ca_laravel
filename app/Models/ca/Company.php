<?php

namespace App\Models\ca;

use App\Models\ca\CompanyDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;


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

    // Mutator
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucWords($value),
            set: fn (string $value) => strtolower($value),
        );
    }

    protected function city(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucWords($value),
            set: fn (string $value) => strtolower($value),
        );
    }

    protected function address(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucWords($value),
            set: fn (string $value) => strtolower($value),
        );
    }

    protected function primary_email(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower($value),
            set: fn (string $value) => strtolower($value),
        );
    }

    protected function secondary_email(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower($value),
            set: fn (string $value) => strtolower($value),
        );
    }
}
