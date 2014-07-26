
<?php

class Project extends Eloquent {

	protected $table = 'project';

	protected $guarded = ['id', 'created_at', 'updated_at'];

}