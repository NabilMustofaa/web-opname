<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpnameUserAPI extends Controller
{
    public function show ($token)
    {
        $users = DB::table('StockCountTask')
            ->join('StockCountUser', 'StockCountUser.TaskId', '=', 'StockCountTask.Id')
            ->where('StockCountTask.Token', $token)
            ->select('StockCountTask.Description', 'StockCountTask.Location', 'StockCountTask.StartDate', 'StockCountTask.EndDate', 'StockCountUser.Operator')
            ->get();
        
        if ($users->isEmpty()) {
            return response()->json(['message' => 'token not found'], 400);
        }


        return response()->json([
            'data' => $users
        ]);
    }
}
