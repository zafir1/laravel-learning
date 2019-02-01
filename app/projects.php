<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
    	'title','description'
    ];

   /**
    * projects has many Task.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function task()
   {
   	// hasMany(RelatedModel, foreignKeyOnRelatedModel = projects_id, localKey = id)
   	return $this->hasMany(Task::class);
   }

    // protected $guarded = [];
}
