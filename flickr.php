<?php

class Flickr {
	private $apiKey = '55b2ff0440d81b69e06dd64d90a05dcf';

	public function __construct() {
	}

	public function search($query = null) {
		$search = 'https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=55b2ff0440d81b69e06dd64d90a05dcf&user_id=59589689@N03&format=php_serial&per_page=9'; 
		$result = file_get_contents($search);
		$result = unserialize($result);
		return $result;
	}
}




?>
