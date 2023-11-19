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

    public function test_getByName_returnsOneMeal_withNameWithOneMatch(): void
    {
        $meal = Meal::factory()->create([
            'name' => 'test One',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ]);

        $mealService = new MealService();

        $mealsFromName = $mealService->getByName('test');

        $this->assertCount(1, $mealsFromName);
        $this->assertEquals($meal->name, $mealsFromName[0]['name']);
    }

    public function test_getByName_returnsTwoMeal_withNameWithTwoMatch(): void
    {
        $meal = Meal::factory()->create([
            'name' => 'test One',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ]);

        $mealTwo = Meal::factory()->create([
            'name' => 'test two',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ]);

        $mealService = new MealService();

        $mealsFromName = $mealService->getByName('test');

        $this->assertCount(2, $mealsFromName);
        $this->assertEquals($meal->name, $mealsFromName[0]['name']);
        $this->assertEquals($mealTwo->name, $mealsFromName[1]['name']);
    }

    public function test_getAllMeals_returnsOneMealIfOneExists(): void
    {
        Meal::factory()->create([
            'name' => 'test One',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ]);

        $mealService = new MealService();

        $allMeals = $mealService->getAllMeals();

        $this->assertCount(1, $allMeals);
    }

    public function test_getAllMeals_returnsTwoMealIfTwoExists(): void
    {
        Meal::factory()->create([
            'name' => 'test One',
            'categories' => json_encode([]),
            'notes' => 'test notes',
        ])->times(2);

        $mealService = new MealService();

        $allMeals = $mealService->getAllMeals();

        $this->assertCount(1, $allMeals);
    }
}