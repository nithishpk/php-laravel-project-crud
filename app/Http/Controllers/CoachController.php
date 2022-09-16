<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoachController extends Controller
{
    public function get(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'time_zone' => 'required|max:3',
        ]);
        $responseArr['status'] = true;
        if ($validator->fails()) {
            $responseArr['status'] = false;
            $responseArr['message'] = $validator->errors();
        } else {
            $result = Coaches::where('time_zone', strtolower($request->time_zone))->select('id', 'name')->get();
            $responseArr['status'] = true;
            $responseArr['message'] = 'success';
            $responseArr['data']['available_coach_count'] = count($result);
            $responseArr['data'] = $result;
        }
        return response()->json($responseArr);

    }

    public function getSingleCoach(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'time_zone' => 'required|max:3',
            'coach_name' => 'required',
        ]);
        $responseArr['status'] = true;
        if ($validator->fails()) {
            $responseArr['status'] = false;
            $responseArr['message'] = $validator->errors();
        } else {
            $result = Coaches::where('time_zone', strtolower($request->time_zone))->where('name', $request->coach_name)->select('id', 'name', 'day_of_week', 'available_at', 'available_until')->get();
            foreach ($result as $key => $coach) {
                $period = new CarbonPeriod($coach->available_at, '1 hour', $coach->available_until);
                $slots = [];
                foreach ($period as $item) {
                    array_push($slots, $item->format("h:i A"));
                }
                $result[$key]['available_time_slots'] = $slots;
            }

            $responseArr['status'] = true;
            $responseArr['message'] = 'success';
            $responseArr['data'] = $result;
        }
        return response()->json($responseArr);
        echo "working";
    }
}
