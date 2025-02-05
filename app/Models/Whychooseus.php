<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whychooseus extends Model
{

    protected $table = 'why-choose-uses';

    protected $primaryKey = 'id';

    public function services()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }
}
