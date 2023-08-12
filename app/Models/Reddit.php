<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Reddit extends Model implements AuthenticatableContract, AuthorizableContract
{
    // Utiliza traits que proporcionan funcionalidad de autenticación y autorización
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // Define los campos que se pueden asignar masivamente (se pueden establecer al crear o actualizar el modelo)
    protected $fillable = [
        'display_name', 'title', 'url', 'description', 'banner_background_image', 'display_name_prefixed'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    // Define los campos que se ocultarán cuando se convierta el modelo a formato JSON
    protected $hidden = [
    ];
}
