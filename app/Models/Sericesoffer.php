<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sericesoffer extends Model
{
    protected $table = 'sericesoffers';

    protected $primaryKey = 'id';

    public function services()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }

    
}
