<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Newsite extends Model
{
    use HasFactory;

    /**
     * Get the phone associated with the user.
     */
    public function widgetsetting()
    {
        return $this->hasOne(Widgetsetting::class, 'site_id', 'id');
    }
}
