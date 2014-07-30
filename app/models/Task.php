
<?php

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
		return $this->belongsTo('Project', 'project');
	}

}