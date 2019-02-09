<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $guarded = [];
    /**
     * Task belongs to Projects.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects()
    {
    	// belongsTo(RelatedModel, foreignKey = projects_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Projects::class);
    }

    public function complete($complete = true)
    {
        $this->update(['completed'=> $complete]);
    }

    public function incomplete()
    {
        $this->complete(false);
    }
}
