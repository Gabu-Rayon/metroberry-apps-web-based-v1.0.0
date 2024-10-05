<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleInsurance extends Model
{
    use HasFactory;


    protected $table = "vehicle_insurances";

    protected $fillable = [
        'vehicle_id',
        'insurance_company_id',
        'insurance_policy_no',
        'insurance_date_of_issue',
        'insurance_date_of_expiry',
        'charges_payable',
        'recurring_period_id',
        'recurring_date',
        'reminder',
        'deductible',
        'status',
        'remark',
        'policy_document',
        'created_by',
    ];

    protected $with = ['vehicle'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
    public function insuranceCompany()
    {
        return $this->belongsTo(InsuranceCompany::class, 'insurance_company_id');
    }

    public function recurringPeriod()
    {
        return $this->belongsTo(InsuranceRecurringPeriod::class, 'recurring_period_id');
    }
}
