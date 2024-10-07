<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceServicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintenance_service_id',
        'vehicle_id',
        'service_type_id',
        'service_category_id',
        'service_date',
        'service_cost',
        'account_id',
        'invoice_no',
        'receipt_type_code',
        'payment_type_code',
        'confirm_date',
        'payment_date',
        'total_taxable_amount',
        'total_tax_amount',
        'total_amount',
        'remark',
        'payment_receipt',
        'reference',
        'qr_code_url',
        'created_by'
    ];


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceTypeCategory::class);
    }

    public function account()
    {
        return $this->belongsTo(MetroBerryAccounts::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}