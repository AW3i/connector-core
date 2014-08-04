<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

/**
 * Specifies product units like "piece", "bottle", "package"..
 *
 * @access public
 * @package jtl\Connector\Model
 */
class Unit extends DataModel
{
    /**
     * @type Identity Unit id
     */
    protected $id = null;

    /**
     * @type array list of identities
     */
     protected $identities = array(
        'id',
    );

    /**
     * @param  Identity $id Unit id
     * @return \jtl\Connector\Model\Unit
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('Id', $id, 'Identity');
    }

    /**
     * @return Identity Unit id
     */
    public function getId()
    {
        return $this->id;
    }

 
}
