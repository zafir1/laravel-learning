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

   public function addTask($description)
   {
      $attr = request()->validate([
            'description' => ['required','min:3','max:255']
        ]);
      return  Task::create([
            'projects_id' => $this->id,
            'description' => request()->description
        ]);
   }
}
