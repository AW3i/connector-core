<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

/**
 * Media file model..
 *
 * @access public
 * @package jtl\Connector\Model
 */
class MediaFile extends DataModel
{
    /**
     * @type Identity Unique MediaFile id
     */
    protected $id = null;

    /**
     * @type Identity Reference to product
     */
    protected $productId = null;

    /**
     * @type string Optional media file category name
     */
    protected $mediaFileCategory = '';

    /**
     * @type string File path
     */
    protected $path = '';

    /**
     * @type int Optional sort number
     */
    protected $sort = 0;

    /**
     * @type string Media file type e.g. "pdf"
     */
    protected $type = '';

    /**
     * @type string Complete URL
     */
    protected $url = '';

    /**
     * @type \jtl\Connector\Model\MediaFileI18n[]
     */
    protected $i18ns = array();

    /**
     * @type \jtl\Connector\Model\MediaFileAttr[]
     */
    protected $attributes = array();

    /**
     * @type array list of identities
     */
     protected $identities = array(
        'id',
        'productId',
    );

    /**
     * @param  Identity $id Unique MediaFile id
     * @return \jtl\Connector\Model\MediaFile
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setId(Identity $id)
    {
        return $this->setProperty('Id', $id, 'Identity');
    }

    /**
     * @return Identity Unique MediaFile id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\MediaFile
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
     * @param  string $mediaFileCategory Optional media file category name
     * @return \jtl\Connector\Model\MediaFile
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setMediaFileCategory(Identity $mediaFileCategory)
    {
        return $this->setProperty('MediaFileCategory', $mediaFileCategory, 'string');
    }

    /**
     * @return string Optional media file category name
     */
    public function getMediaFileCategory()
    {
        return $this->mediaFileCategory;
    }

    /**
     * @param  string $path File path
     * @return \jtl\Connector\Model\MediaFile
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setPath(Identity $path)
    {
        return $this->setProperty('Path', $path, 'string');
    }

    /**
     * @return string File path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param  int $sort Optional sort number
     * @return \jtl\Connector\Model\MediaFile
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
     * @param  string $type Media file type e.g. "pdf"
     * @return \jtl\Connector\Model\MediaFile
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setType(Identity $type)
    {
        return $this->setProperty('Type', $type, 'string');
    }

    /**
     * @return string Media file type e.g. "pdf"
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  string $url Complete URL
     * @return \jtl\Connector\Model\MediaFile
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setUrl(Identity $url)
    {
        return $this->setProperty('Url', $url, 'string');
    }

    /**
     * @return string Complete URL
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param  \jtl\Connector\Model\MediaFileI18n $i18ns
     * @return \jtl\Connector\Model\MediaFile
     */
    public function addI18n(\jtl\Connector\Model\MediaFileI18n $i18n)
    {
        $this->i18ns[] = $i18ns;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\MediaFileI18n[]
     */
    public function getI18ns()
    {
        return $this->i18ns;
    }

    /**
     * @return \jtl\Connector\Model\MediaFile
     */
    public function clearI18ns()
    {
        $this->i18ns = array();
        return $this;
    }
    /**
     * @param  \jtl\Connector\Model\MediaFileAttr $attributes
     * @return \jtl\Connector\Model\MediaFile
     */
    public function addAttribute(\jtl\Connector\Model\MediaFileAttr $attribute)
    {
        $this->attributes[] = $attribute;
        return $this;
    }
    
    /**
     * @return \jtl\Connector\Model\MediaFileAttr[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return \jtl\Connector\Model\MediaFile
     */
    public function clearAttributes()
    {
        $this->attributes = array();
        return $this;
    }
 
}
