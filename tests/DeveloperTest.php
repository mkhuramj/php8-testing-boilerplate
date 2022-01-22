<?php declare(strict_types = 1);

namespace Tests;

use Khuram\Developer;
use PHPUnit\Framework\TestCase;

class DeveloperTest extends TestCase
{
    public function test_developer_can_constructed(): void
    {
        $developer = new Developer();
        $this->assertInstanceOf(Developer::class, $developer);
    }

    public function test_developer_name_is_khuram(): void
    {
        $developer = new Developer();

        $this->assertEquals($developer->getName(), 'Khuram');
    }

    public function test_developer_is_a_full_stack_developer(): void
    {
        $developer = new Developer();

        $this->assertEquals($developer->getProfession(), 'Full Stack Developer');
    }

    public function test_developer_experience_is_6_years(): void
    {
        $developer = new Developer();

        $this->assertEquals($developer->getExperience(), '6 years');
    }

    public function test_getDeveloperInfo_returns_khuram_is_a_full_stack_developer_with_6_years_of_experience(): void
    {
        $developer = new Developer();

        $this->assertEquals($developer->getInfo(), 'Khuram is a Full Stack Developer with 6 years of experience.');
    }
}
