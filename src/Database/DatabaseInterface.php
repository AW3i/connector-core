<?php
/**
 *
 * @copyright 2010-2012 JTL-Software GmbH
 * @package Jtl\Connector\Core\Database
 */
namespace Jtl\Connector\Core\Database;

/**
 * Database Interface
 *
 * @author Daniel Böhmer <daniel.boehmer@jtl-software.de>
 */
interface DatabaseInterface
{
    /**
     * Connect to Database
     */
    public function connect(array $options = null);

    /**
     * Disconnect from Database
     */
    public function close();

    /**
     * Database Query
     *
     * @param string $query
     */
    public function query($query);

    /**
     * Database connection state
     *
     * @return bool $this->_isConnected
     */
    public function isConnected();
    
    /**
     * Returns a string that has been properly escaped
     *
     * @return string
     */
    public function escapeString($query);
}
