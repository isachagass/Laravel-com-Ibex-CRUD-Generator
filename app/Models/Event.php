<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $date
 * @property $start_time
 * @property $end_time
 * @property $type_id
 * @property $latitude
 * @property $longitude
 * @property $district_id
 * @property $access_link
 * @property $ticket_quantity
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @property Eventtype $eventtype
 * @property District $district
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Event extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'date', 'start_time', 'end_time', 'type_id', 'latitude', 'longitude', 'district_id', 'access_link', 'ticket_quantity', 'created_by', 'updated_by'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function eventtype()
    // {
    //     return $this->belongsTo(\App\Models\Eventtype::class, 'type_id', 'id');
    // }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function district()
    // {
    //     return $this->belongsTo(\App\Models\District::class, 'district_id', 'id');
    // }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function user()
    // {
    //     return $this->belongsTo(\App\Models\User::class, 'created_by', 'id');
    // }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function user()
    // {
    //     return $this->belongsTo(\App\Models\User::class, 'updated_by', 'id');
    // }
    
}
