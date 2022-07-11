<?php

namespace Tests\Feature\AuthUser;

use App\Http\Controllers\Library\CompositionController;
use App\Models\Library\ArrangementType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LibraryTest extends TestCase
{
    private $users;

    protected function setUp() : void
    {
        parent::setUp();

        $this->users = User::factory(5)->create();
    }

    /**
     * Test that non-authorized user (guest) cannot get to library page
     *
     * @test
     * @return void
     */
    public function guest_is_redirected_to_login(): void
    {
        //$this->withoutExceptionHandling();

        $response = $this->get('library')
        ->assertRedirect('/login');
    }

    /**
     * Confirm logged in user can access composition page
     * @test
    */
    public function auth_user_can_access_page()
    {
        $this->withoutExceptionHandling();

        //$users = User::factory(5)->create();

        $response = $this->actingAs($this->users->first())
            ->get('library')
            ->assertSuccessful();
    }
}
