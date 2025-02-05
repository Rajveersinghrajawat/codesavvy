<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table= 'services';

    protected $primaryKey = 'id';
    

    public function faqs()
    {
        return $this->hasMany(Faqs::class, 'service_id');
    }

    public function Whychooseus()
    {
        return $this->hasMany(Whychooseus::class, 'service_id');
    }
    

    public function Sericesoffer()
    {
    return $this->hasMany(Sericesoffer::class, 'service_id'); // Replace `ServiceOffer` with the actual model name
    }

}
