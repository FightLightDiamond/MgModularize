<?php
/**
 * Created by PhpStorm.
 * User: cowell-7125
 * Date: 21/11/2019
 * Time: 17:07
 */

namespace _vendor_\_module_\Queue\Publisher;


//use _vendor_\_module_\Api\Data\CustomerInterface;

class _action_Publisher
{
    const TOPIC_NAME = '_topic_';
    /**
     * @var \Magento\Framework\MessageQueue\PublisherInterface
     */
    private $publisher;
    /**
     * @param \Magento\Framework\MessageQueue\PublisherInterface $publisher
     */
    public function __construct(\Magento\Framework\MessageQueue\PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }
    /**
     * {@inheritdoc}
     */
    public function execute($customer)
    {
        $this->publisher->publish(self::TOPIC_NAME, $customer);
    }
}