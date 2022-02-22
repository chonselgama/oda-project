<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_client
 * @property string $nom
 * @property string $prenom
 * @property string $date_de_naissance
 * @property string $lieu_de_naissance
 * @property ApiLocation[] $apiLocations
 */
class ApiClient extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_client';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'date_de_naissance', 'lieu_de_naissance'];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiLocations()
    {
        return $this->hasMany('App\ApiLocation', 'id_client_id', 'id_client');
    }
}
