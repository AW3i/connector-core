<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 * @subpackage GlobalData
 */

namespace jtl\Connector\Model;

/**
 * Specifies product units like "piece", "bottle", "package".
 *
 * @access public
 * @package jtl\Connector\Model
 * @subpackage GlobalData
 */
class Unit extends DataModel
{
    /**
     * @var Identity Unit id
     */
    protected $_id = null;
    
    /**
     * @var string Locale
     */
    protected $_localeName = '';
    
    /**
     * @var string Localized unit name
     */
    protected $_name = '';
    
    /**
     * @var bool
     */
    protected $_isUserDefined = false;
    
    /**
     * @var mixed:string
     */
    protected $_identities = array(
        '_id'
    );
    
    /**
     * Unit Setter
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
                
                    $this->$name = Identity::convert($value);
                    break;
            
                case "_localeName":
                case "_name":
                
                    $this->$name = (string)$value;
                    break;
            
                case "_isUserDefined":
                
                    $this->$name = (bool)$value;
                    break;
            
            }
        }
    }
    
    /**
     * @param Identity $id Unit id
     * @return \jtl\Connector\Model\Unit
     */
    public function setId(Identity $id)
    {
        $this->_id = $id;
        return $this;
    }
    
    /**
     * @return Identity Unit id
     */
    public function getId()
    {
        return $this->_id;
    }
    /**
     * @param string $localeName Locale
     * @return \jtl\Connector\Model\Unit
     */
    public function setLocaleName($localeName)
    {
        $this->_localeName = (string)$localeName;
        return $this;
    }
    
    /**
     * @return string Locale
     */
    public function getLocaleName()
    {
        return $this->_localeName;
    }
    /**
     * @param string $name Localized unit name
     * @return \jtl\Connector\Model\Unit
     */
    public function setName($name)
    {
        $this->_name = (string)$name;
        return $this;
    }
    
    /**
     * @return string Localized unit name
     */
    public function getName()
    {
        return $this->_name;
    }
    /**
     * @param bool $isUserDefined
     * @return \jtl\Connector\Model\Unit
     */
    public function setIsUserDefined($isUserDefined)
    {
        $this->_isUserDefined = (bool)$isUserDefined;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getIsUserDefined()
    {
        return $this->_isUserDefined;
    }
}