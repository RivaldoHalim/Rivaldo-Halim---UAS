<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar_tamu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kamar_tamus';

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
    protected $fillable = ['no_kamar_tamu', 'jenis_kamar', 'harga_kamar', 'keterangan'];

    
}
