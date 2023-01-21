<?php

namespace Tests\Feature\Livewire\User;

use App\Http\Livewire\User\UserOps;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(UserOps::class);

        $component->assertStatus(200);
    }
}
