<?php
/**
 * Add to Countries Table
 *
 * @category   Table
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
use Illuminate\Database\Migrations\Migration;

/**
 * Add to Countries Table
 *
 * @category   Table
 * @package    Mainpackage
 * @author     AlfredJones <AlfredJones@nyasha.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$3
 * @link       http://pear.php.net/package/PackageName
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

class AddToCountriesTable extends Migration
{
    /**
    * Create
    * 
    * @return nothing
    */
    
    public function up()
    {
        Schema::table(
            'countries',
            function ($table) {
            $table->integer('year');
            $table->string('sibling');
            }
        );
    }

    /**
    * Delete
    * 
    * @return nothing
    */
    
    public function down()
    {
        Schema::table(
            'countries',
            function ($table) {
            
            $table->dropColumn(['year','sibling']);
        
            }
        );
    }
}

