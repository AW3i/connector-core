<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * ProductFunctionAttr Model
 * Monolingual product function attribute.
 *
 * @access public
 */
class ProductFunctionAttr extends DataModel
{
    /**
     * @var string - Unique productFunctionAttr id
     */
    protected $_id = '';
    
    /**
     * @var string - Reference to product
     */
    protected $_productId = '';
    
    /**
     * @var string - Attribute key
     */
    protected $_key = '';
    
    /**
     * @var string - Attribute value
     */
    protected $_value = '';
    
    /**
     * ProductFunctionAttr Setter
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
                case "_productId":
                case "_key":
                case "_value":
                
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