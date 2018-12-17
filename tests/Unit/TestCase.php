<?php
namespace Bworksio\NovaQuestionable\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function testSomething()
    {
        $this->assertDatabaseHas('users', ['email' => 'info@b-works.io']);
    }
}
