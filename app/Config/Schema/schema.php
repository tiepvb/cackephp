<?php
class AppSchema extends CakeSchema {

	public $users = array(
		'id'            => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username'      => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'password'      => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'token'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'created'       => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'      => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),
			'username_UNIQUE' => array('column' => 'username', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $user_hostings = array(
		'id'            => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id'       => array('type' => 'integer', 'null' => false, 'default' => null),
		'hosting_id'    => array('type' => 'integer', 'null' => false, 'default' => null),
		'created'       => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'      => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $hostings = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'airbnb_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_username'   => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_password'   => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'auth_cookie_path'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'api_key'           => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $threads = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'airbnb_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $listings = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'airbnb_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'name'              => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'thumbnail_url'     => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'status'            => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'person_capicity'   => array('type' => 'integer', 'null' => false, 'default' => null),
		'ical_file_url'     => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $reservations = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'airbnb_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_hosting_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'listing_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_listing_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'thread_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_thread_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),

		'start_date'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nights'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'number_of_gurest'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'status'            => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'status_code'        => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'confirmation_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_location' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_avatar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'payout_price_native' => array('type' => 'float', 'null' => false, 'default' => 0.00),
		'native_currency' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')

	);
	public $messages = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'airbnb_id'         => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_thread_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'guest_id'          => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'message'           => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_id'           =>  array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_type'         =>  array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'special_offer'     => array('type' => 'float', 'null' => false, 'default' => 0.00),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $prices = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'listing_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_hosting_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_listing_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'date'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'year'  => array('type' => 'string', 'null' => true, 'length' => 4),
		'month'  => array('type' => 'string', 'null' => true, 'length' => 2),
		'day'  => array('type' => 'string', 'null' => true, 'length' => 2),
		'native_offer'     => array('type' => 'float', 'null' => false, 'default' => 0.00),
		'native_currency'  => array('type' => 'string', 'null' => true, 'length' => 3),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')

	);
	public $pvs = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'listing_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_hosting_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_listing_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'date'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'year'  => array('type' => 'string', 'null' => true, 'length' => 4),
		'month'  => array('type' => 'string', 'null' => true, 'length' => 2),
		'day'  => array('type' => 'string', 'null' => true, 'length' => 2),
		'bookings'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'inquiries'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'page_views'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);
	public $sales = array(
		'id'                => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'hosting_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'listing_id'        => array('type' => 'integer', 'null' => false, 'default' => null),
		'airbnb_hosting_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'airbnb_listing_id'  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'date'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'year'  => array('type' => 'string', 'null' => true, 'length' => 4),
		'month'  => array('type' => 'string', 'null' => true, 'length' => 2),
		'day'  => array('type' => 'string', 'null' => true, 'length' => 2),

		'type' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'length' => 1),
		'amount' => array('type' => 'float', 'null' => false, 'default' => 0.00),
		'payout' => array('type' => 'float', 'null' => false, 'default' => 0.00),

		'created'           => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified'          => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes'       => array(
			'PRIMARY'   =>  array('column' => 'id', 'unique' => 1),

		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

}
