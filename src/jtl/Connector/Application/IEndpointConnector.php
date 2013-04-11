<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Application
 */

namespace jtl\Connector\Application;

/**
 * 
 * 
 * @access public
 * @author Daniel Böhmer <daniel.boehmer@jtl-software.de>
 */
interface IEndpointConnector
{
    /**
     * 
     * @param string $method
     */
    public function canHandle($method);
    
    
    /**
     * @param integer $id
     * @param string $method
     * @param string|array|object $params
     */
	public function handle($id, $method, $params = null);
}
?>