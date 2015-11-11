<?php

/**
 *  Countries Table
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
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *  Countries Table
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

class CreateCountriesTable extends Migration
{
    /**
    * Create
    * 
    * @return nothing
    */
    
    public function up()
    {
        Schema::create(
            'countries', 
            function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identity');          
            $table->string('name');
            $table->string('nameanime');
            $table->string('language');
            $table->integer('area');
            $table->timestamps();        
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
        Schema::drop('countries');
    }
}
