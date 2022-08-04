<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
      /**
     * The table name
     *
     * @var string
     */
    protected $table = 'people';

    protected $fillable = [
        'people_type',
        'name',
        'nickname',
        'nif',
        'email',
        'address',
        'phone',
        'zip_code',
        'district'
    ];


    /**
     * The user of the people.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
