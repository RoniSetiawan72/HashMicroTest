<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Models\Square;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function index()
    {
        // Contoh Data
        $shapes = [
            new Square(['name' => 'Square 1', 'side_length' => 4]),
            new Circle(['name' => 'Circle 1', 'radius' => 3]),
            new Square(['name' => 'Square 2', 'side_length' => 5]),
            new Circle(['name' => 'Circle 2', 'radius' => 7]),
        ];

        $result = [];

        // Nested Loop dan Nested If
        foreach ($shapes as $shape) {
            $area = $shape->calculateArea(); // Mathematics (perhitungan luas)

            // Nested If: Klasifikasi berdasarkan ukuran area
            if ($area > 30) {
                $category = 'Large';
            } elseif ($area > 10) {
                if ($shape instanceof Square) {
                    $category = 'Medium Square';
                } else {
                    $category = 'Medium Circle';
                }
            } else {
                $category = 'Small';
            }

            $result[] = [
                'name' => $shape->name,
                'type' => class_basename($shape),
                'area' => $area,
                'category' => $category
            ];
        }

        return view('admin.shapes', compact('result'));
    }
}
