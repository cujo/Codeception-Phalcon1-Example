<?php
use Codeception\Util\Stub;

class IndexControllerTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;

    protected function _before()
    {
        $moduleDi = $this->getModule('Phalcon1')->di;
        $defaultDi = \Phalcon\Di::getDefault();

        $this->assertSame($moduleDi, $defaultDi);
    }

    protected function _after()
    {
    }

    // tests
    public function testIndexAction()
    {
        $controller = new IndexController();
        $this->assertNull($controller->indexAction());
    }

}
