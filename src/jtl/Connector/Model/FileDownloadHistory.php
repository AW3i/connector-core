<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * FileDownloadHistory Model
 * ToDo: Remove (deprecated)
 *
 * @access public
 */
class FileDownloadHistory extends DataModel
{
    /**
     * @var string
     */
    protected $_id = '0';
    
    /**
     * @var string
     */
    protected $_fileDownloadId = '0';
    
    /**
     * @var string
     */
    protected $_customerId = '0';
    
    /**
     * @var string
     */
    protected $_customerOrderId = '0';
    
    /**
     * @var string
     */
    protected $_created = null;
    
    /**
     * FileDownloadHistory Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            if ($value === null) {
                $this->$name = null;
                return;
            }
        
            switch ($name) {
                case "_id":
                case "_fileDownloadId":
                case "_customerId":
                case "_customerOrderId":
                case "_created":
                
                    $this->$name = (string)$value;
                    break;
            
            }
        }
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}
?>