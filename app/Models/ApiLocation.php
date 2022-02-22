<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_location
 * @property integer $id_client_id
 * @property integer $id_equipement_id
 * @property string $date
 * @property ApiClient $apiClient
 * @property ApiEquipement $apiEquipement
 */
class ApiLocation extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_location';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_client_id', 'id_equipement_id', 'date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apiClient()
    {
        return $this->belongsTo('App\ApiClient', 'id_client_id', 'id_client');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apiEquipement()
    {
        return $this->belongsTo('App\ApiEquipement', 'id_equipement_id', 'id_equipement');
    }
}
