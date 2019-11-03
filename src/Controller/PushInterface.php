<?php
/**
 * @copyright 2010-2019 JTL-Software GmbH
 * @package Jtl\Connector\Core\Application
 */

namespace Jtl\Connector\Core\Controller;

use Jtl\Connector\Core\Model\DataModel;

interface PushInterface
{
    /**
     * Insert or update
     *
     * @param DataModel $model
     * @return DataModel
     */
    public function push(DataModel $model) : DataModel;
}