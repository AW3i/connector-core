<?php
namespace jtl\Connector\Event\CustomerOrder;

use Symfony\Component\EventDispatcher\Event;
use jtl\Connector\Model\CustomerOrder;


class CustomerOrderAfterStatisticEvent extends Event
{
    const EVENT_NAME = 'customerorder.after.statistic';

	protected $customerorder;

    public function __construct(CustomerOrder &$customerorder)
    {
		$this->customerorder = $customerorder;
    }

    public function getCustomerorder()
    {
        return $this->customerorder;
	}
	
}