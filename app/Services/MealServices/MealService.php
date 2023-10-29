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

    public function getByName(string $name): array
    {
        return Meal::query()->where('name', 'like', '%' . $name . '%')->get()->toArray();   
    }

    public function getByCategory(string $category)
    {
        
    }
}