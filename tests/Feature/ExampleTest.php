<?php

namespace Tests\Feature;

use App\Guest;
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
    public function testBasicTest_xx()
    {
        $user = factory(User::class)->create([
            'rfid_uuid' => $this->faker()->uuid .' test'
        ]);
        $response = $this->get("api/timeIn/rfid/$user->rfid_uuid/temperature/36.5");
        $response->dump();
        $this->assertDatabaseHas('attendances',[
            'user_id' => $user->id,
            'datetime_In' => Carbon::now()
        ]);
        $response->assertStatus(200);
    }
    public function testTimeIn_qr()
    {
        $qr =$this->faker()->uuid;
        $user = factory(Guest::class)->create([
            'qr_code' =>  $qr.' test',
            'qr_number' =>$qr
        ]);
        $response = $this->get("api/timeIn/qr/$user->qr_code/temperature/37.5");
        $response->dump();
      
        $response->assertStatus(200);
    }

}
