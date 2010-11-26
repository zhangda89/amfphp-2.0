<?php

require_once dirname(__FILE__) . '/../../../../amfphp/ClassLoader.php';

/**
 * Test class for DefaultServiceRouter.
 * Generated by PHPUnit on 2010-11-26 at 16:50:22.
 */
class DefaultServiceRouterTest extends PHPUnit_Framework_TestCase {

    /**
     * @var DefaultServiceRouter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $mirrorServicePath = dirname(__FILE__) . '/../../../../amfphp/services/MirrorService.php';
        $mirrorServiceClassFindInfo = new ClassFindInfo($mirrorServicePath, "MirrorService");
        $serviceNames2ClassFilePath = array("MirrorService" => $mirrorServiceClassFindInfo);
        $this->object = new DefaultServiceRouter($serviceNames2ClassFilePath);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }
    
    public function testExecuteServiceCall(){
        $testParamsArray = array("a", "b", "c");
        $mirrored = $this->object->executeServiceCall("MirrorService", "mirror", $testParamsArray);
        $this->assertEquals($mirrored, $testParamsArray);
    }

}

?>