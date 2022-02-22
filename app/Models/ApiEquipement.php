<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_equipement
 * @property string $nom
 * @property string $type_equipement
 * @property float $prix
 * @property int $quantite
 * @property ApiLocation[] $apiLocations
 */
class ApiEquipement extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_equipement';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'type_equipement', 'prix', 'quantite'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiLocations()
    {
        return $this->hasMany('App\ApiLocation', 'id_equipement_id', 'id_equipement');
    }
}
