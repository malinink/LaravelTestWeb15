<?php
/**
 * Countries Model
 *
 * @category   Model
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Countries Model
 *
 * @category   Model
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
class Countries extends Model
{
        protected $table = 'countries';
        protected $fillable = ['identity','name','nameanime','language','area',
            'year','sibling'];
        public $timestamps=false;
        
}
