<?php
require_once(dirname(__FILE__).'/../../init_new.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsMySQLDatabaseSafeTest extends \PHPUnit_Framework_TestCase
{
    protected $myclass = 'XoopsMySQLDatabaseSafe';
    
    public function setUp()
	{
    }
	
    public function test___construct()
	{	
		$instance = new $this->myclass();
    }
	
	public function test_query()
	{
		// query
	}

}
