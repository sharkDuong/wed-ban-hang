<?php
 
namespace App\Http\Controllers;

use App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users where name = ?', ['Duong']);
 
        return view('users.index', ['users' => $users])
        ->with('name', 'Victoria');
    }
}