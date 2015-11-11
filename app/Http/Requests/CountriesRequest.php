<?php
/**
 * Countries Request
 *
 * @category   RequestController
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
namespace App\Http\Requests;

use App\Http\Requests\Request;
/**
 * Countries Request
 *
 * @category   RequestController
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
class CountriesRequest extends Request
{
    /**
    * function - get rules
    * 
    * @return     massive
    */
    public function rules ()
    {
        return[
                        'identity' => 'Required|Unique:countries',
                        'name' => 'Required|Min:3|Max:80',
                        'nameanime' => 'Required|Min:3|Max:80',
                        'language' => 'Required|Min:3|Max:80',
                        'area' =>'Integer|Min:1',
                        'year' => 'Integer|Min:1',
                        'sibling' => 'Required|Min:3|Max:80'
                ];
              
    }
        
}