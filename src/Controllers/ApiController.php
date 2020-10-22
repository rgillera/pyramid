<?php

namespace Vqpoint\Pyramid\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class ApiController extends Controller
{
    /**
     * Return generic json response with the given data.
     *
     * @param $data
     * @param int $statusCode
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respond($data, $statusCode = 200, $headers = [])
    {
        return response()->json($data, $statusCode, $headers);
    }

    /**
     * Respond with success.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondSuccess($message = 'Success')
    {
        $data = [
            'success' => true,
            'message' => $message
        ];

        return $this->respond($data, 200);
    }

    /**
     * Respond with success.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithData($dataValues)
    {
        $data = [
            'success' => true,
            'data' => $dataValues
        ];

        return $this->respond($data, 200);
    }

    /**
     * Respond with created.
     *
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondCreated($data)
    {
        return $this->respond($data, 201);
    }

    /**
     * Respond with no content.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondNoContent()
    {
        return $this->respond(null, 204);
    }

    /**
     * Respond with error.
     *
     * @param $message
     * @param $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondError($message, $statusCode = 200)
    {
        return $this->respond([
            'success' => false,
            'errors' => [
                'message' => $message,
                'status_code' => $statusCode
            ]
        ], $statusCode);
    }

    /**
     * Respond with unauthorized.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondUnauthorized($message = 'Unauthorized')
    {
        return $this->respondError($message, 401);
    }

    /**
     * Respond with forbidden.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondForbidden($message = 'Forbidden')
    {
        return $this->respondError($message, 403);
    }

    /**
     * Respond with not found.
     *
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondNotFound($message = 'Not Found')
    {
        return $this->respondError($message, 404);
    }

    /**
     * Respond with failed login.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondFailedLogin()
    {
        return $this->respond([
            'success' => false,
            'errors' => [
                Config::get('messages.incorrect_credentials')
            ]
        ], 200);
    }

    /**
     * Respond with error list
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondErrorList($arrError)
    {
        return $this->respond([
            'success' => false,
            'errors' => $arrError
        ], 200);
    }

    /**
     * Respond with internal error.
     *
     * @param \Throwable $error
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondInternalError($error, $message = 'Internal Error')
    {
        Log::error($error);
        return $this->respondError($message, 500);
    }

    /**
     * Prettyfy the collection
     *
     * @return void
     */
    public function prettyfy($collection){
        echo '<pre>';
        print_r($collection->toArray()); 
        echo '</pre>';
        die();
    }
}
