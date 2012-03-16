<?php

class phpbb_ext_index_page_title_event_index_page_title_subscriber implements phpbb_event_subscriber_interface
{
	function get_subscribed_events()
	{
		return array(
			'page_header' => 'page_header',
		);
	}

	function page_header()
	{
		return 'page header';
	}
}
