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
 * @package    Application Controllers
 * @copyright  Copyright (c) 2012 Sasquatch
 */

namespace App\Controller;

use App\Model\BookEntity,
    App\Mapper\Books,
    Quasar\Controller\Controller;

/**
 * Book details controller
 * 
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Application
 * @package    Application Controllers
 * @copyright  Copyright (c) 2012 Sasquatch
 */
class Book extends Controller
{
    
    /**
     * URI params map
     * 
     * @var array
     */
    protected $paramsMap = array('id' => null);
    
    /**
     * Books data mapper
     * 
     * @var Books
     */
    protected $booksMapper;
    
    /**
     * Constructor
     * 
     * Sets books data mapper dependency
     * 
     * @param Books $booksMapper
     */
    public function __construct(Books $booksMapper)
    {
        $this->booksMapper = $booksMapper;
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $id = $this->getParam('id');
        $bookEntity = new BookEntity(array('id' => $id));
        $this->response->book = $this->booksMapper->findById($bookEntity);
    }
}