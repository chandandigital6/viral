<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function details()
    {
        return $this->hasMany(ServiceDetail::class);
    }
    public function benefits()
    {
        return $this->hasMany(ServiceBenefit::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
    public function content()
    {
        return $this->hasMany(ServiceContent::class);
    }

    public function video()
    {
        return $this->hasMany(ServiceVideo::class);
    }
}
