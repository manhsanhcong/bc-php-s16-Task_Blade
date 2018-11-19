<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 19/11/2018
 * Time: 09:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
