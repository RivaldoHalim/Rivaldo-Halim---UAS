<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tamu_menginap_hotel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tamu_menginap_hotels';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['deposit_tamu', 'tanggal_menginap'];

    
}
