<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\RequestService;

class RequestController extends Controller
{
    protected $requestService;

    public function __construct(RequestService $requestService)
    {
        //
        $this->requestService = $requestService;
    }

    public function pusher()
    {
        $beamsClient = new \Pusher\PushNotifications\PushNotifications(array(
            "instanceId" => "17fc8ca2-b1fd-43d0-83c4-7ea57605d8d6",
            "secretKey" => "B4CB0171333EF30DA3BAF4480FBBE72B37A06496AD7A0C9648E09FEDEEE0D4F3",
        ));

        return $beamsClient->publishToInterests(
            array("debug-test"),
            array(
                "fcm" => array(
                    "notification" => array(
                        "title" => "Hi!",
                        "body" => "This is my first Push Notification!"
                    )
                ),
                "apns" => array("aps" => array(
                    "alert" => array(
                        "title" => "Hi!",
                        "body" => "This is my first Push Notification!"
                    )
                ))
            ));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateApp()
    {
        return $this->respondSuccess($this->requestService->updateApp($_POST));
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function infoApp()
    {
        return $this->respondSuccess($this->requestService->infoApp($_GET));
    }

    /**
     * @param $app_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function infoQuestion($app_id)
    {
        //
        return $this->respondSuccess($this->requestService->infoQuestion($app_id));
    }

    /**
     * @param $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function infoResult()
    {
        return $this->respondSuccess($this->requestService->infoResult($_POST));
    }

    /**
     * @param $app_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function infoScore($app_id)
    {
        return $this->respondSuccess($this->requestService->infoScore($app_id));
    }

    /**
     * @param $app_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function infoPhone()
    {
        $response = $this->requestService->infoPhone($_POST);
        return $response['status'] === true
            ? $this->respondSuccess([])
            : $this->respondError($response['message']);
    }


    # WEB
    public function userAll()
    {
        return $this->respondSuccess($this->requestService->getAllUser());
    }

    public function appAll()
    {
        return $this->respondSuccess($this->requestService->getAllApp());
    }

    public function scoreAll()
    {
        return $this->respondSuccess($this->requestService->getAllScore());
    }

    public function questionAll()
    {
        return $this->respondSuccess($this->requestService->getAllQuestion());
    }

    public function winAll()
    {
        return $this->respondSuccess($this->requestService->getAllWin());
    }

}
