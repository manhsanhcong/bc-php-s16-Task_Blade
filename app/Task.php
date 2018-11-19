<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 19/11/2018
 * Time: 09:18
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'expiration_date', 'image'
    ];

    public function category()
    {
        return $this->belongsTo("App\Category");
    }

    protected $table = '';
}