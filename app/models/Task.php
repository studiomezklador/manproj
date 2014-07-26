
<?php

class Task extends Eloquent {

	protected $table = 'task';

	protected $guarded = ['id', 'created_at', 'updated_at'];

}