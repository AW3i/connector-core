<?php
namespace jtl\Connector\Event\Image;

use Symfony\Component\EventDispatcher\Event;
use jtl\Connector\Model\Image;


class ImageAfterDeleteEvent extends Event
{
    const EVENT_NAME = 'image.after.delete';

	protected $image;

    public function __construct(Image &$image)
    {
		$this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
	}
	
}