<?php

class Shipping extends Eloquent {

	protected $table = 'info_shipping';

	public function user()
    {
          return $this->belongsTo('User');
    }
}
?>