<?php
/**
 * Created by PhpStorm.
 * User: cowell-7125
 * Date: 25/12/2019
 * Time: 09:57
 */

namespace _vendor_\_module_\Model\ResourceModel\_model_;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model and model
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($model, $resourceModel) */
        $this->_init('_vendor_\_module_\Model\_model_', '_vendor_\_module_\Model\ResourceModel\_model_');
    }
}
