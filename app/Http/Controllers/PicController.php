<?php

namespace App\Http\Controllers;

use App\Services\PicService;
use Illuminate\Http\Request;
use App\Http\Requests\PicRequest;
use App\Http\Responses\DataResponse;
use App\Http\Responses\ResponseCode;
use App\Http\Responses\ResponseMessage;

class PicController extends Controller
{
    protected $PicService;
    public function __construct(PicService $PicService)
    {
        $this->PicService = $PicService;
    }

    public function getPic()
    {
        $data = $this->PicService->getPic();
        return new DataResponse($data);
    }

    public function getPicById($id)
    {
        $data = $this->PicService->getPicById($id);
        if($data){  
            $data->load('corporate');
            return new DataResponse($data);
        }
        else{
            return new DataResponse('', ResponseCode::NOT_FOUND_CODE, ResponseMessage::NOT_FOUND_MESSAGE);
        }
    }

    public function storePic(PicRequest $request)
    {
        $data = $this->PicService->storePic($request);
        return new DataResponse($data);
    }

    public function updatePic(PicRequest $request, $id)
    {
        $data = $this->PicService->updatePic($request, $id);
        if(!$data){
            return new DataResponse('', ResponseCode::NOT_FOUND_CODE, ResponseMessage::NOT_FOUND_MESSAGE);
        }
        else{
            return new DataResponse();
        }
    }

    public function deletePic($id)
    {
        $this->PicService->deletePic($id);
        return new DataResponse();
    }
}
