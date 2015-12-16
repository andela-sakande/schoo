<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardPageTest extends TestCase
{
    public function testDashboardLoads()
    {
        $user = factory(\Schoo\User::class)->create();
        $this->actingAs($user);
        $this->call('GET', '/courses');
        $this->assertResponseOk();
    }
    public function testUserDetailsLoadOnDashboard()
    {
        $user = factory(\Schoo\User::class)->create();
        $this->actingAs($user);
        $this->call('GET', '/courses');
        $this->seePageIs('/courses');
        $this->assertViewHas([]);
    }
    public function testCoursesLoadOnPage()
    {
        $user = factory(\Schoo\User::class)->create();
        $this->actingAs($user);
        $this->call('GET', '/courses');
        $this->seePageIs('/courses');
        $this->assertViewHas('courses');
    }
}
