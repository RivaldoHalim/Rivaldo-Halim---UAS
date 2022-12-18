<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tamu_hotel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tamu_hotels';

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
    protected $fillable = ['id_tamu', 'nama_tamu', 'alamat_tamu', 'tempat_tinggal_tamu', 'no_telp', 'no_identitas_tamu'];

    
}
