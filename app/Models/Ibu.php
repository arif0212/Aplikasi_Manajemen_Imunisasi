<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ibu extends Model
{
    protected $table = 'ibu';

    protected $primaryKey = 'ibu_id';

    protected $guarded = ['ibu_id'];


    public function anak(): HasMany
    {
        return $this->hasMany(Anak::class, 'ibu_id', 'ibu_id_anak');
    }
}