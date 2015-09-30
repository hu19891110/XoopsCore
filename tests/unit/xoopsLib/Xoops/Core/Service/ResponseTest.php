<?php
require_once(dirname(__FILE__).'/../../../../init_new.php');

use Xoops\Core\Service\Response;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-07-30 at 19:01:49.
 */

/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Response
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Response;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xoops\Core\Service\Response::__constructor
     */
    public function test__constructor()
    {
        $instance = $this->object;
        $this->assertInstanceOf('\\Xoops\\Core\\Service\\Response', $instance);
    }

    /**
     * @covers Xoops\Core\Service\Response::getValue
     */
    public function testGetValue()
    {
        $value = 'value';
        $instance = new Response($value);
        $result = $instance->getValue();
        $this->assertSame($value,$result);
    }

    /**
     * @covers Xoops\Core\Service\Response::isSuccess
     */
    public function testIsSuccess()
    {
        $value = 'value';
        $instance = new Response($value, false);
        $result = $instance->isSuccess();
        $this->assertFalse($result);

        $instance = new Response($value, true);
        $result = $instance->isSuccess();
        $this->assertTrue($result);
    }

    /**
     * @covers Xoops\Core\Service\Response::getErrorMessage
     */
    public function testGetErrorMessage()
    {
        $value = 'value';
        $error = 'error';
        $instance = new Response($value, true, $error);
        $result = $instance->getErrorMessage();
        $this->assertTrue(is_array($result));
        $this->assertTrue(in_array($error,$result));
    }

    /**
     * @covers Xoops\Core\Service\Response::setValue
     */
    public function testSetValue()
    {
        $instance = $this->object;
        
        $result = $instance->getValue();
        $this->assertTrue(is_null($result));
        
        $value = 'value';
        $result = $instance->setValue($value);
        $this->assertSame($instance, $result);
        
        $result = $instance->getValue();
        $this->assertSame($value,$result);
    }

    /**
     * @covers Xoops\Core\Service\Response::setSuccess
     */
    public function testSetSuccess()
    {
        $value = 'value';
        $instance = new Response($value, false);
        $result = $instance->isSuccess();
        $this->assertFalse($result);

        $result = $instance->setSuccess(true);
        $this->assertSame($instance, $result);
        
        $result = $instance->isSuccess();
        $this->assertTrue($result);
        
        $instance->setSuccess(false);
        $result = $instance->isSuccess();
        $this->assertFalse($result);
    }

    /**
     * @covers Xoops\Core\Service\Response::addErrorMessage
     */
    public function testAddErrorMessage()
    {
        $value = 'value';
        $error = 'error';
        $instance = new Response($value, true, $error);
        
        $error1 = 'error1';
        $result = $instance->addErrorMessage($error1);
        $this->assertSame($instance, $result);
        
        $data = array('error2','error3');
        $result = $instance->addErrorMessage($data);

        $result = $instance->getErrorMessage();        
        $this->assertTrue(is_array($result));
        $this->assertTrue(in_array($error,$result));
        $this->assertTrue(in_array($error1,$result));
        $this->assertTrue(in_array('error2',$result));
        $this->assertTrue(in_array('error3',$result));
    }
}
