<?php

namespace App\Services\MealService;

interface MealServiceInterface
{
    public function getAllMeals();

    public function getByName(string $name);

    public function getByCategory(string $category);
}