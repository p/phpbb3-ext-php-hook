<?php

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class phpbb_ext_indexpagetitle_event_index_page_title_subscriber implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
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
