<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The table asociated with the model.
     *
     * @var array
     */
    protected $table = "contacts";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'name', 'surname', 'phone', 'email', 'address'
    ];

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
