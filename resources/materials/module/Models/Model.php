<?php

namespace _vendor_\_module_\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class _model_ extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = '_vendor___module___model_';

    protected $_cacheTag = '_vendor___module___model_';

    protected $_eventPrefix = '_vendor___module___model_';


    //No __construct
    protected function _construct()
    {
        $this->_init('_vendor_\_module_\Model\ResourceModel\_model_');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
