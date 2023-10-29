<?php

namespace Tests\Feature\Services\MealService;

use Tests\TestCase;
use App\Models\Meal;
use App\Services\MealServices\MealService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MealServiceTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_getByID_returnsMeal_withIdPassedIn(): void
    {
        $meal = Meal::factory()->create([
            'name' => 'test meal',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ]);

        $mealService = new MealService();

        $mealFromId = $mealService->getById($meal->id);

        $this->assertEquals($meal->name, $mealFromId->name);
    }

}