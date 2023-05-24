<?php

namespace App\Http\Controllers\Unlock;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnlockRequest;
use App\Models\Rep;
use Illuminate\Http\Request;

class StoreUnlockController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUnlockRequest $request)
    {
        $data = $request->validated();
        $rep = Rep::query()->with('unlocks')->firstOrCreate(['serial_number'=> $data['serial_number']]);
        $rep->update(['amount' => $rep->amount + 1]);
        $rep->unlocks()->create($data);
        return response()->json($rep);
    }
}
