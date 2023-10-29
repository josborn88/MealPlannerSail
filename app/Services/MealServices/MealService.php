<?php

namespace App\Services\MealServices;

use App\Models\Meal;
class MealService implements MealServiceInterface
{
    public function getAllMeals()
    {
        
    }

    public function getById(int $id): Meal
    {
        return Meal::query()->where('id', $id)->first();
    }

    public function getByName(string $name)
    {
        
    }

    public function getByCategory(string $category)
    {
        
    }
}