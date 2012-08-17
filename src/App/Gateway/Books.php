<?php
/**
 * Quasar Framework QuickStart Project © 2012
 * Copyright © 2012 Sasquatch <Joan-Alexander Grigorov>
 *                              http://bgscripts.com
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License v3
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   Application
 * @package    Application Table Data Gateways
 * @copyright  Copyright (c) 2012 Sasquatch
 */

namespace App\Gateway;

use Quasar\Db\TableGateway\TableGateway;

/**
 * Books table data gateway
 * 
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Application
 * @package    Application Table Data Gateways
 * @copyright  Copyright (c) 2012 Sasquatch
 */
class Books extends TableGateway
{
    
    /**
     * {@inheritdoc}
     */
    protected $table = 'books';
    
}