
<?php

use Carbon\Carbon;


class Project extends Eloquent {

	protected $table = 'project';

	protected $fillable = ['name', 'user', 'description', 'state'];

	//protected $guarded = ['id', 'created_at', 'updated_at'];

	public function tasks()
	{
		return $this->hasMany('Task');
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