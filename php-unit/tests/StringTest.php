<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testIfStringContainsWithString()
    {
        // Success if string contains with string
        // This failure
        // $this->assertStringContainsString('foo', 'bar');

        $this->assertStringContainsString('cat', 'cat');
    }

    public function testIfStringHasIgnoreCaseWithString()
    {
        // Success if string contains ignore case with string
        // This failure
        // $this->assertStringContainsStringIgnoringCase('Laravel', 'Rails');

        // This Success
        $this->assertStringContainsStringIgnoringCase('React', 'React');
    }

    public function testIfOnlyContainsTypeElements()
    {
        $animals = ['Dog', 'Cat', 'Elephant'];

        // Success if string contains with type
        // This failure
        // $this->assertContainsOnly('array', $animals);

        // This success
        $this->assertContainsOnly('string', $animals);
    }

    public function testIfStringEqualsWithString()
    {
        // Success if string equals with string
        // This failure
        // $this->assertEquals('Laravel', 'Rails');

        // This success
        $this->assertEquals('Laravel', 'Laravel');
    }

    public function testIfStringEqualsWithIgnoreCase()
    {
        // Success if string equals ignore case
        // This Failure
        // $this->assertEqualsIgnoringCase('LARAVEL', 'FRAMEWORK');

        // This success
        $string = 'I love ruby';

        $this->assertEqualsIgnoringCase('I love ruby', $string);
    }

    public function testIfIsString()
    {
        // Failure if is not string type
        $string = "Laravel Framework";

        $this->assertIsString($string);
    }
}