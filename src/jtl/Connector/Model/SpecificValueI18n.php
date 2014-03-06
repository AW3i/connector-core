<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * SpecificValueI18n Model
 * Localized specific value text.
 *
 * @access public
 */
class SpecificValueI18n extends DataModel
{
    /**
     * @var string - locale
     */
    protected $_localeName = '';
    
    /**
     * @var string - Reference to specificValue
     */
    protected $_specificValueId = '';
    
    /**
     * @var string - Localized value
     */
    protected $_value = '';
    
    /**
     * @var string - Optional localized URL path
     */
    protected $_urlPath = '';
    
    /**
     * @var string - Optional localized description
     */
    protected $_description = '';
    
    /**
     * @var string - Optional localized meta description value
     */
    protected $_metaDescription = '';
    
    /**
     * @var string - Optional localized meta keywords value
     */
    protected $_metaKeywords = '';
    
    /**
     * @var string - Optional localized title tag value
     */
    protected $_titleTag = '';
    
    /**
     * SpecificValueI18n Setter
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
                case "_localeName":
                case "_specificValueId":
                case "_value":
                case "_urlPath":
                case "_description":
                case "_metaDescription":
                case "_metaKeywords":
                case "_titleTag":
                
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