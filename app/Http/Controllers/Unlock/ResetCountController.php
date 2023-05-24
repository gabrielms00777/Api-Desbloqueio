<?php

namespace App\Http\Controllers\Unlock;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowRepRequest;
use App\Models\Rep;

class ResetCountController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShowRepRequest $request)
    {
        $rep = Rep::query()->whereSerialNumber($request->get('serial_number'))->first();
        $rep->amount = 0;
        $rep->save();
        return response(['message' => 'Rep zerado com sucesso', 'rep' => $rep]);
    }
}
