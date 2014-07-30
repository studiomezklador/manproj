
<?php

class Project extends Eloquent {

	protected $table = 'project';

	protected $fillable = ['name', 'user', 'description', 'state'];

	//protected $guarded = ['id', 'created_at', 'updated_at'];

	public function tasks()
	{
		return $this->hasMany('Task');
	}

}