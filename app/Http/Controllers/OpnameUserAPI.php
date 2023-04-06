<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpnameUserAPI extends Controller
{
    public function show ($keyword)
    {
        $users = DB::table('StockCountTask')
            ->join('StockCountUser', 'StockCountUser.TaskId', '=', 'StockCountTask.Id')
            ->where('StockCountTask.Keyword', $keyword)
            ->select('StockCountTask.Description', 'StockCountTask.Location', 'StockCountTask.StartDate', 'StockCountTask.EndDate', 'StockCountUser.Operator')
            ->get();
        
        if ($users->isEmpty()) {
            return response()->json(['message' => 'Keyword not found'], 400);
        }


        return response()->json([
            'data' => $users
        ]);
    }
}
