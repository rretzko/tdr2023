<?php

namespace Tests\Feature\AuthUser;

use App\Http\Controllers\Library\CompositionController;
use App\Models\Library\ArrangementType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompositionTest extends TestCase
{
    private $users;

    /**
     * Test that non-authorized user (guest) cannot get to composition page
     *
     * @test
     * @return void
     */
    public function guest_is_redirected_to_login(): void
    {
        //$this->withoutExceptionHandling();

        $response = $this->get('library/composition')
        ->assertRedirect('/login');
    }

    /**
     * Confirm logged in user can access composition page
     * @test
    */
    public function auth_user_can_access_page()
    {
        $this->withoutExceptionHandling();

        $users = User::factory(5)->create();

        $response = $this->actingAs($users->first())
            ->get('library/composition')
            ->assertSuccessful();
    }

    /**
     * Confirm that a new form can be submitted
     * @test
    */
    public function new_composition_can_be_submitted() : void
    {
        $this->withoutExceptionHandling();

        $this->setUsers(5);

        $this->actingAs ($this->users->first())
            ->post('composition/store',
            [
                'subtitle' => 'A Chorus Line',
                'title' => 'Highlights',
                'tagid' => '1',
            ],
            [
                //headers
            ])
            ->assertRedirect('/library/composition');

        $this->assertDatabaseHas(\App\Models\Library\Composition::class,
        [
            'subtitle' => 'A Chorus Line',
            'title' => 'Highlights',
            'arrangement_type_id' => '1',
        ]);

    }

    /**
     * Confirm that a new form with a new arrangement type can be submitted
     * @test
     */
    public function new_composition_with_new_arrangement_type_can_be_submitted() : void
    {
        $this->withoutExceptionHandling();

        $this->setUsers(5);

        $this->actingAs ($this->users->first())
            ->post('composition/store',
                [
                    'subtitle' => 'A Chorus Line',
                    'title' => 'Highlights',
                    'tagid' => '0',
                    'new_arrangement_type' => 'testtest',
                ],
                [
                    //headers
                ])
            ->assertRedirect('/library/composition');

        $this->assertDatabaseHas(\App\Models\Library\Composition::class,
            [
                'subtitle' => 'A Chorus Line',
                'title' => 'Highlights',
                'arrangement_type_id' => \App\Models\Library\ArrangementType::where('descr', 'testtest')->first()->id,
            ]);

    }

    /**
     * Confirm that a new form with a new arrangement type AND a selected arrangement_type_id can be submitted
     * AND the new arrangement type will take precedence
     *
     * @test
     */
    public function new_composition_with_new_arrangement_type_and_arrangement_type_id_can_be_submitted() : void
    {
        $this->withoutExceptionHandling();

        $this->setUsers(5);

        $this->actingAs ($this->users->first())
            ->post('composition/store',
                [
                    'subtitle' => 'A Chorus Line',
                    'title' => 'Highlights',
                    'tagid' => '1', //existing arrangement_type_id
                    'new_arrangement_type' => 'testtesttest', //new arrangement type
                ],
                [
                    //headers
                ])
            ->assertRedirect('/library/composition');

        $this->assertDatabaseHas(\App\Models\Library\Composition::class,
            [
                'subtitle' => 'A Chorus Line',
                'title' => 'Highlights',
                'arrangement_type_id' => \App\Models\Library\ArrangementType::where('descr', 'testtesttest')->first()->id,
            ]);

    }

    protected function setUsers(int $count) : void
    {
        $this->users = User::factory($count)->create();
    }
}
