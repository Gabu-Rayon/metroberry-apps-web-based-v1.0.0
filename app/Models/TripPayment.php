<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripPayment extends Model
{
    use HasFactory;

    protected $table = 'trip_payments';

    protected $fillable = [
        'trip_id',
        'customer_id',
        'invoice_no',
        'account_id',
        'customer_tin',
        'customer_name',
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

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function account()
    {
        return $this->belongsTo(MetroBerryAccounts::class, 'account_id');
    }


}