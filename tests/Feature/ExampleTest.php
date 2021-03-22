<?php

namespace Tests\Feature;

use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->create([
            'rfid_uuid' => $this->faker()->uuid .' test'
        ]);
        $response = $this->get("api/timeIn/rfid/$user->rfid_uuid");
        $response->dump();
        $this->assertDatabaseHas('attendances',[
            'user_id' => $user->id,
            'datetime_In' => Carbon::now()
        ]);
        $response->assertStatus(200);
    }
}
