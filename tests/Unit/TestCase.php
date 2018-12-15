<?php
namespace Bworksio\NovaQuestionable\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function testSomething() {
        $this->assertTrue(true);
        $this->assertDatabaseHas('questions');
    }
    public function testDatabase() {
        $this->assertDatabaseHas('users', [
            'email' => 'info@b-works.io'
        ]);
    }
}

