<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Widgetsetting extends Model
{
    use HasFactory;
    protected $table = 'widgetsettings';
    protected $fillable = [
        'site_id',
        'data',
    ];

    /**
     * Get the NewSite that owns the phone.
     */
    public function newsite()
    {
        return $this->belongsTo(NewSite::class, 'site_id', 'id');
    }
}
