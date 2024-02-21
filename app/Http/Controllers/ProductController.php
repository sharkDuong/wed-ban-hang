<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::where('price', '>', 1);  
        // $products = Product::GetProducts();
        $searchKey = $request->search;
        // dd($searchKey);
        if ($searchKey) {
            // dd('kk');
            // \DB::enableQueryLog(); // Enable query log
            
            $products = $products->where('name','like','%' . $searchKey . '%');
            

            // dd(\DB::getQueryLog()); // Show results of log
        }
        $products = $products->take(6)->get();
        return view('products.index', ['products' => $products]);
    }
    public function show($Id)
    {
        // dd($productId);
        $product = Product::find($Id);

        return view('product-detail', ['product' => $product]);
    }

    public function create()
    {
        return view('products.create');
    }
}