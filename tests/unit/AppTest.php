<?php


use DI\ContainerBuilder;
use Ably\AppClient;

class AppTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $container;

    /**
     * @Inject
     * @var AppClient
     */
    protected $app;

    protected function _before()
    {
        // initialize the DI container
        $builder = new \DI\ContainerBuilder();
        $this->container = $builder->build();
    }

    protected function _after()
    {
    }


    /**
     * test the app creation via te REST Api
     */
    public function testCreateApp()
    {
        //arrange
        $params = $this->tester->getAppConfig(true);

        $app = new AppClient(new \GuzzleHttp\Client);
        $app->setEndpoint($this->tester->getSandboxUrl());

        //act
        $response = $app->createApp($params);

        //assert
        $this->tester->assertNotEmpty($response);

    }

}