<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ReservationStatus;

class StatusTest extends TestCase
{
    use RefreshDatabase;
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_see_all_status(){
        $reservationStatus = ReservationStatus::all();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee($reservationStatus[0]->status);
    }

    /** @test */
    public function user_can_see_a_single_status(){
        $reservationStatus = ReservationStatus();

        $response = $this->get('/ReservationStatus/{ReservationStatus}');

        $response->assertSee($reservationStatus->status);
    }

    /** @test */
    public function user_can_store_status(){
        $response = $this->get('/create');

        $response->assertStatus(200);  
        $response->assertSee('Create Status');
    }

    /** @test */
    public function user_can_store_a_new_status(){
        $validated_fields = request()->validate([
            'status' => 'required',
            'description' => 'required'
        ]);
        
        $response = $this->post('/create', $validated_fields);

        $this->assertDatabaseHas('reservation_statuses', $validated_fields);
        $response->assertRedirect('/');
    }
}
