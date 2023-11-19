<?php

namespace App\Services\MealServices;

use App\Models\Meal;
interface MealServiceInterface
{
    public function getAllMeals(): array;

    public function getById(int $id): Meal;
    
    public function getByName(string $name): array;

    public function getByCategory(string $category);

    public function createMeal(): Meal;
}