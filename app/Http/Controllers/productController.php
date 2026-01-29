<?php

namespace App\Http\Controllers;

use App\Http\Middleware;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class productController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return [CheckTimeAccess::class];
    }

    public function index(){
        $title = "Product List";
        return view("product.index",["title" => $title,
            'products' => [
            ['id' => 1, 'name' => 'Product A', 'price' => 100000],
            ['id' => 2, 'name' => 'Product B', 'price' => 100000],
            ['id' => 3, 'name' => 'Product C', 'price' => 100000],
        ]]);
    }

    public function getDetail(string $id = "123") {
        return view("product.detail", ['id' => $id]);
    }

    public function create() {
        return view("product.add");
    }

    public function store(Request $request) {
        return $request -> all();
    }
}