<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 *
 * @property $id
 * @property $type
 * @property $grade
 * @property $created_at
 * @property $updated_at
 *
 * @property Subject[] $subjects
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grade extends Model
{
    
    static $rules = [
		'type' => 'required',
		'grade' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','grade'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjects()
    {
        return $this->hasMany('App\Models\Subject', 'grade_id', 'id');
    }
    

}
