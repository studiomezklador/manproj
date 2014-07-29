
<?php

class Step extends Eloquent {

	protected $table = 'step';
	protected $fillable = ['task','user','title','report','duration'];

	// protected $guarded = ['id', 'created_at', 'updated_at'];

}