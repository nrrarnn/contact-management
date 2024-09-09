<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $response = $this->post('/api/users', [
            'username' => 'khannedy',
            'password' => 'rahasia',
            'name' => 'Eko Kurniawan Khannedy'
        ]);

        // Debug respons untuk melihat apa yang diterima
        // $response->dump(); // Akan mencetak hasil respons API ke terminal
        
        $response->assertStatus(201)->assertJson([
            "data" => [
                'username' => 'khannedy',
                'name' => 'Eko Kurniawan Khannedy'
            ]
        ]);

    }


    
}