
<?php

use Carbon\Carbon;

class Step extends Eloquent {

	protected $table = 'step';
	protected $fillable = ['task','user','title','report','duration'];

	// protected $guarded = ['id', 'created_at', 'updated_at'];

	public function task()
	{
		return $this->belongsTo('Task');
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