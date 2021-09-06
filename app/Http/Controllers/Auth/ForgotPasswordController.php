<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    protected function sendResetLinkResponse(Request $request, $response): \Illuminate\Http\JsonResponse
    {
        return response()->json(['message' => trans($response)], 200);
    }

    protected function sendResetLinkFailedResponse(Request $request, $response): \Illuminate\Http\JsonResponse
    {
        return response()->json(['message' => trans($response)], 422);
    }
}