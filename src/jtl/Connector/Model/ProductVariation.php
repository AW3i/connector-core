<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

/**
 * ProductVariation Model. Each product defines its own variations, that means  variations are not global  in contrast to specifics. .
 *
 * @access public
 * @package jtl\Connector\Model
 */
class ProductVariation extends DataModel
{
    /**
     * @type Identity Unique productVariation id
     */
    protected $id = null;

    /**
     * @type Identity Reference to product
     */
    protected $productId = null;

    /**
     * @type int Optional sort number
     */
    protected $sort = 0;

    /**
     * @type string Variation type e.g. radio or select
     */
    protected $type = '';

    /**
     * @type \jtl\Connector\Model\ProductVariationValue[]
     */
    protected $values = array();

    /**
     * @type \jtl\Connector\Model\ProductVariationInvisibility[]
     */
    protected $invisibilities = array();

    /**
     * @type \jtl\Connector\Model\ProductVariationI18n[]
     */
    protected $i18ns = array();

    /**
     * @type array list of identities
     */
     protected $identities = array(
        'id',
        'productId',
    );

    /**
     * @param  Identity $id Unique productVariation id
     * @return \jtl\Connector\Model\ProductVariation
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('Id', $id, 'Identity');
    }

    /**
     * @return Identity Unique productVariation id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\ProductVariation
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setProductId(Identity $productId)
    {
        return $this->setProperty('ProductId', $productId, 'Identity');
    }

    /**
     * @return Identity Reference to product
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param  int $sort Optional sort number
     * @return \jtl\Connector\Model\ProductVariation
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setSort(Identity $sort)
    {
        return $this->setProperty('Sort', $sort, 'int');
    }

    /**
     * @return int Optional sort number
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param  string $type Variation type e.g. radio or select
     * @return \jtl\Connector\Model\ProductVariation
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setType(Identity $type)
    {
        return $this->setProperty('Type', $type, 'string');
    }

    /**
     * @return string Variation type e.g. radio or select
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  \jtl\Connector\Model\ProductVariationValue $values
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addValue(\jtl\Connector\Model\ProductVariationValue $value)
    {
        $this->values[] = $value;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationValue[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearValues()
    {
        $this->values = array();
        return $this;
    }
    /**
     * @param  \jtl\Connector\Model\ProductVariationInvisibility $invisibilities
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addInvisibility(\jtl\Connector\Model\ProductVariationInvisibility $invisibility)
    {
        $this->invisibilities[] = $invisibility;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationInvisibility[]
     */
    public function getInvisibilities()
    {
        return $this->invisibilities;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearInvisibilities()
    {
        $this->invisibilities = array();
        return $this;
    }
    /**
     * @param  \jtl\Connector\Model\ProductVariationI18n $i18ns
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function addI18n(\jtl\Connector\Model\ProductVariationI18n $i18n)
    {
        $this->i18ns[] = $i18ns;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\ProductVariationI18n[]
     */
    public function getI18ns()
    {
        return $this->i18ns;
    }

    /**
     * @return \jtl\Connector\Model\ProductVariation
     */
    public function clearI18ns()
    {
        $this->i18ns = array();
        return $this;
    }
 
}
