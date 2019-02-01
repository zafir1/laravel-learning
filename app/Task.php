<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
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
}
