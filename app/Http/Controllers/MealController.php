<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MealServices\MealServiceInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MealController extends Controller
{
    public function __construct(private MealServiceInterface $mealService)
    {
        
    }

    public function getAllMeals(): JsonResponse
    {
        $meals = $this->mealService->getAllMeals();

        $meals = [
            [
                'id' => 1,
                'name' => 'test meal',
            ],
            [
                'id' => 2,
                'name' => 'tacos'
            ]
        ];
        return response()->json($meals, Response::HTTP_OK);
    }

    public function getMealById(int $id): JsonResponse
    {
        $meal = $this->mealService->getById($id);

        return response()->json($meal, Response::HTTP_OK);
    }

    public function getMealByName(string $name): JsonResponse
    {
        $meal = $this->mealService->getByName($name);

        return response()->json($meal, Response::HTTP_OK);
    }

    public function createMeal(Request $request): JsonResponse
    {
        
        $meal = $this->mealService->createMeal();

        return response()->json($meal, Response::HTTP_CREATED);
    }

    public function store(Request $request)
    {
        // Logic to store new meal in database
        $meal = new Meal;
        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->save();

        // Redirect to index page with success message
        return redirect()->route('meals.index')->with('success', 'Meal created successfully!');
    }



}
