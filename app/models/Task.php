
<?php

use Carbon\Carbon;

class Task extends Eloquent {

	protected $table = 'task';

	protected $fillable = ['project','title','user','description','duration','state','complete'];

	// protected $guarded = ['id', 'created_at', 'updated_at'];

	public function steps()
	{
		return $this->hasMany('Step');
	}

	public function project()
	{
		return $this->belongsTo('Project');
	}

	// SETTERS
	public function getCreatedAtAttribute($attr)
	{
        return Carbon::parse($attr)->format('d/m/Y à H:i'); //Change the format to whichever you desire
    }

    public function getUpdatedAtAttribute($attr)
	{
        return Carbon::parse($attr)->format('d/m/Y à H:i'); //Change the format to whichever you desire
    }
}