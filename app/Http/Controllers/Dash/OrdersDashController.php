<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Country;
use App\Models\City;
use App\Http\Resources\OrderResource;
use App\Models\MaritalStatus;
use App\Models\EducationalLevel;

class OrdersDashController extends Controller
{
    public function handleOrders(
        Request $request,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->getOrders(
                    $request,
                );
            default:
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Invalid request method',
                    ],
                );
        }
    }
    public function getOrders()
    {

        $orders = Order::with(
            [
                'requesterData.nationality',
                'requesterData.skinColor',
                'requesterData.employmentStatus',
                'requesterData.commitmentDegree',
                'requesterData.tribe',
                'requesterData.maritalStatus',
                'requesterData.educationalLevel',
                'requesterData.residenceArea',
                'requesterData.mariageType',
                'requestedData.maritalStatus',
                'requestedData.residenceArea',
                'requestedData.educationalLevel',
                'requestedData.skinColor',
            ]
        )->get();
        $orders->each(
            function ($order) {
                if ($order->requesterData) {
                    $order->requesterData->makeHidden(
                        [
                            'nationality_id',
                            'employment_status_id',
                            'commitment_degree_id',
                            'tribe_id',
                            'mariage_type_id',
                            'marital_status_id',
                            'residence_area_id',
                            'educational_level_id',
                            'skin_color_id',
                        ],
                    );
                }

                if ($order->requestedData) {
                    $order->requestedData->makeHidden(
                        [
                            'marital_status_id',
                            'residence_area_id',
                            'educational_level_id',
                            'skin_color_id',
                        ],
                    );
                }
            },
        );
        return response()->json(
            $orders,
        );
    }
    public function getSettings()
    {
        try {
            $countries = Country::all();
            $cities = City::all();
            $maritalStatus
                = MaritalStatus::all();
            $educationalLevels
                = EducationalLevel::all();
            return response()->json(
                [
                    "countries" => $countries,
                    "cities" => $cities,
                    "marital_status" => $maritalStatus,
                    "educational_levels" => $educationalLevels,
                ],
                200
            );
        } catch (\Exception $e) {
            return response()->json(
                $e->getMessage(),
                500
            );
        }
    }
    public function search(Request $request)
    {
        $orders = Order::with('requesterData')
            ->whereHas('requesterData', function ($query) use ($request) {
                if (!empty($request->age)) {
                    $query->where('age', '=', $request->age);
                }
                if (!empty($request->gender)) {
                    $query->where('gender', '=', $request->gender);
                }
                if (!empty($request->residence_area_id)) {
                    $query->where('residence_area_id', '=', $request->residence_area_id);
                }
                if (!empty($request->marital_status_id)) {
                    $query->where('marital_status_id', '=', $request->marital_status_id);
                }
                if (!empty($request->educational_level_id)) {
                    $query->where('educational_level_id', '=', $request->educational_level_id);
                }
            })
            ->with([
                'requesterData.nationality',
                'requesterData.skinColor',
                'requesterData.employmentStatus',
                'requesterData.commitmentDegree',
                'requesterData.tribe',
                'requesterData.maritalStatus',
                'requesterData.educationalLevel',
                'requesterData.residenceArea',
                'requesterData.mariageType',
                'requestedData.maritalStatus',
                'requestedData.residenceArea',
                'requestedData.educationalLevel',
                'requestedData.skinColor',
            ])
            ->get();

        $orders->each(function ($order) {
            if ($order->requesterData) {
                $order->requesterData->makeHidden([
                    'nationality_id',
                    'employment_status_id',
                    'commitment_degree_id',
                    'tribe_id',
                    'mariage_type_id',
                    'marital_status_id',
                    'residence_area_id',
                    'educational_level_id',
                    'skin_color_id',
                ]);
            }

            if ($order->requestedData) {
                $order->requestedData->makeHidden([
                    'marital_status_id',
                    'residence_area_id',
                    'educational_level_id',
                    'skin_color_id',
                ]);
            }
        });

        return response()->json($orders);
    }
}
