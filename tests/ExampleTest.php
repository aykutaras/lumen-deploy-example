<?php

use AykutAras\ComposerSample\Sampler;

class ExampleTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->call('GET', '/');

        $this->assertResponseOk();
    }

   public function testDummyController()
   {
        $response = $this->call('GET', '/dummy/a');

        $this->assertResponseOk();
        $this->assertEquals('My Dummy Response a', $response->getContent());
   }

   public function testTesterCommand()
   {
        $tester = new App\Commands\TesterCommand();
	$tester->handle();
        $this->assertEquals(null, $tester->handle());
   }

   public function testSamplerTest()
   {
       $sampler = new AykutAras\ComposerSample\Sampler;
       $welcome = $sampler->Welcome();
       $this->assertEquals($welcome, "Welcome home Jack");
   }
}
