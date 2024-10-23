<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'order_number',
        'customer_id',
        'order_date',
        'total_amount',
        'order_status', 
        'payment_method'
    ];

    

    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_items');
    }

    public function calculaterSGST(): float
    {
        return $this->total_amount * 0.06; // Corrected the calculation
    }

    public function calculaterCGST(): float
    {
        return $this->total_amount * 0.06; // Corrected the calculation
    }

    public function calculate_SGST_CGST(): float 
    {
        return $this->calculaterSGST() + $this->calculaterCGST();
    }

    public function total_amount_with_SGST_CGST(): float
    {
        // $total_amount = $this->total_amout;

        // $total_amount += $this->calculaterSGST();

        // $total_amount += $this->calculaterCGST();

        // return $total_amount;

        return $this->total_amount + $this->calculaterSGST() + $this->calculaterCGST();
    }

    public function getTotalAmountInWords(): string
    {
        $numberToWords = new NumberToWords();
        $transformer = $numberToWords->getNumberTransformer('en');
        return $transformer->toWords($this->total_amount);
    }

    public function convertTaxAmountInWords(): string
    {
        $numberToWords = new NumberToWords();
        $transformer = $numberToWords->getNumberTransformer('en');
        $taxAmount = $this->calculaterSGST() + $this->calculaterCGST(); // Calculated tax amount
        return $transformer->toWords($taxAmount);
    }

    public function history()
    {
        return $this->hasMany(OrderHistory::class, 'order_id');
    }
}
