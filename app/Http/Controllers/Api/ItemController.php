<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class ItemController extends Controller
{
  public function index(){
      return response()->json(['data' => Item::all(), 'status' => 200]); 
  }  
}
