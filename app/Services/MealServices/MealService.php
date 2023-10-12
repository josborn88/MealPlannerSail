<?php

namespace App\Services\MealService;

use App\Models\Meal;
class MealService implements MealServiceInterface
{
    public function getAllMeals()
    {
        
    }

    public function getById(int $id): Meal
    {
        return new Meal();
    }

    public function getByName(string $name)
    {
        
    }

    public function getByCategory(string $category)
    {
        
    }
}