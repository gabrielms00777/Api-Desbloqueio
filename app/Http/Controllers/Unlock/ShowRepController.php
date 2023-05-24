<?php

namespace App\Http\Controllers\Unlock;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowRepRequest;
use App\Models\Rep;
use Illuminate\Http\Request;

class ShowRepController extends Controller
{
    public function __invoke(ShowRepRequest $request)
    {
        $data = $request->validated();
        $rep = Rep::query()->with('unlocks')->whereSerialNumber($data['serial_number'])->first();
        return response()->json($rep);
    }
}
