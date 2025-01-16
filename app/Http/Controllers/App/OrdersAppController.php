<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Country;
use App\Models\City;
use App\Models\SkinColor;
use App\Models\EmploymentStatus;
use App\Models\MaritalStatus;
use App\Models\EducationalLevel;
use App\Models\MariageType;
use App\Models\CommitmentDegree;
use App\Models\Tribe;
use App\Models\Weight;
use App\Models\RequesterData;
use App\Models\RequestedData;

class OrdersAppController extends Controller
{
    public function handleRequest(
        Request $request,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->get();
            case 'POST':
                return $this->addOrder(
                    $request,
                );
            default:
                return failureResponse();
        }
    }

    public function get()
    {
        try {
            $countries = Country::all();
            $cities = City::all();
            $SkinColors = SkinColor::all();
            $employmentStatuses = EmploymentStatus::all();
            $maritalStatus
                = MaritalStatus::all();
            $educationalLevels
                = EducationalLevel::all();
            $mariageTypes
                = MariageType::all();
            $commitmentDegrees
                = CommitmentDegree::all();
            $tribes = Tribe::all();
            $weights = Weight::all();


            return response()->json(
                [
                    "countries" => $countries,
                    "cities" => $cities,
                    "skin_colors" => $SkinColors,
                    "employment_statuses" => $employmentStatuses,
                    "marital_status" => $maritalStatus,
                    "educational_levels" => $educationalLevels,
                    "mariage_types" => $mariageTypes,
                    "commitment_degrees" => $commitmentDegrees,
                    "tribes" => $tribes,
                    "weights" => $weights,
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
    public function addOrder(Request $request)
    {
        try {
            $requesterData = $request->input('requester_data');
            $requestedData = $request->input('requested_data');
            if (!$requesterData || !$requestedData) {
                return response()->json([
                    'status' => false,
                    'message' => 'Missing required data.',
                ], 400);
            }
            $requesterDataEntry = RequesterData::create($requesterData);
            if (!$requesterDataEntry) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to save requester data.',
                ], 500);
            }
            $requestedDataEntry = RequestedData::create($requestedData);
            if (!$requestedDataEntry) {
                return response()->json([
                    'status' => false,
                    'error' => 'Failed to save requested data.',
                ], 500);
            }
            $order = Order::create(
                [
                    'requester_data_id' => $requesterDataEntry->id,
                    'requested_data_id' => $requestedDataEntry->id,
                ],
            );
            if (!$order) {
                return response()->json([
                    'status' => false,
                    'error' => 'Failed to create order.',
                ], 500);
            }
            return response()->json([
                'status' => true,
                'error' => 'Order created successfully.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }
}
