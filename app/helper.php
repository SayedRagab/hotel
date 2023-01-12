<?php

if (!function_exists('failResponse')) {
    function failResponse($message = null, $data = null)
    {
        return response()->json(['status' => false, 'message' => $message ?? 'Something went wrong', 'data' => $data]);
    }
}

if (!function_exists('successResponse')) {
    function successResponse($message = null, $data = null, $pagination = null)
    {
        if ($pagination) {
            return response()->json([
                'status' => true,
                'message' => $message ?? "Done successfully",
                'pages_total' => $pagination->lastPage(),
                'current_page' => $pagination->currentPage(),
                'per_page' => $pagination->perPage(),
                'item_count' => $pagination->total(),
                'data' => $data
            ]);
        } else {
            return response()->json(['status' => true, 'message' => $message ?? "Done successfully", 'data' => $data]);
        }
    }
}
if (!function_exists('generateToken')) {

    function generateToken()
    {
        // This is set in the .env file
        $key = config('app.key');
        if (\Str::startsWith($key, 'base64:')) {
            $key = base64_decode(substr($key, 7));
        }
        return hash_hmac('sha256', \Str::random(40), $key);
    }
}
