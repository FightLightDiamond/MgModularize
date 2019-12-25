<?php
/**
 * Created by PhpStorm.
 * User: cowell-7125
 * Date: 25/12/2019
 * Time: 09:35
 */

namespace _vendor_\_module_\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class _model_ extends AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        /* _init($mainTable, $idFieldName) */
        $this->_init('_table_', '_id_');
    }
}
