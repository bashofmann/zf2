<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Service
 * @subpackage AgileZen_Resources
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Zend\Service\AgileZen\Resources;

use Zend\Service\AgileZen\AgileZen;
use Zend\Service\AgileZen\AbstractEntity;

/**
 * @category   Zend
 * @package    Zend_Service
 * @subpackage AgileZen_Resources
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class User extends AbstractEntity
{
    /**
     * Name
     * 
     * @var string 
     */
    protected $name;

    /**
     * Username
     * 
     * @var string 
     */
    protected $userName;

    /**
     * Email
     * 
     * @var string 
     */
    protected $email;

    /**
     * AgileZen service
     * 
     * @var Zend\Service\AgileZen\AgileZen 
     */
    protected $service;

    /**
     * Constructor
     * 
     * @param  AgileZen $service
     * @param  array $data 
     * @return void
     */
    public function __construct(AgileZen $service, array $data)
    {
        if (!array_key_exists('id', $data)) {
             throw new Exception\InvalidArgumentException("You must pass the id of the user");
        }
        if (!array_key_exists('name', $data)) {
             throw new Exception\InvalidArgumentException("You must pass the name of the user");
        }
        
        $this->name     = $data['name'];
        $this->userName = $data['userName'];
        $this->email    = $data['email'];
        $this->service  = $service;
        
        parent::__construct($data['id']);
    }

    /**
     * Get the name
     * 
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the username
     * 
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Get the email 
     * 
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
