<?php

class phpbb_ext_indexpagetitle_event_index_page_title_subscriber implements phpbb_event_subscriber_interface
{
	static public function get_subscribed_events()
	{
		return array(
			'core.index' => 'page_header',
		);
	}

	public function page_header($event)
	{
		$event['page_title'] = 'mv php /dev/null';
	}
}
