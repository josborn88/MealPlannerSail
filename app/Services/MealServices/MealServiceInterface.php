<?php

namespace App\Services\MealServices;

use App\Models\Meal;
interface MealServiceInterface
{
    public function getAllMeals();

    public function getById(int $id): Meal;
    
    public function getByName(string $name);

    public function getByCategory(string $category);
}