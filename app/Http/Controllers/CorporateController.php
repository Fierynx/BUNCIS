<?php

namespace App\Http\Controllers;

use App\Http\Responses\ResponseMessage;
use Illuminate\Http\Request;
use App\Services\CorporateService;
use App\Http\Responses\DataResponse;
use App\Http\Responses\ResponseCode;
use App\Http\Requests\CorporateRequest;

class CorporateController extends Controller
{
    protected $corporateService;
    public function __construct(CorporateService $corporateService)
    {
        $this->corporateService = $corporateService;
    }

    public function getCorporate()
    {
        $data = $this->corporateService->getCorporate();
        return new DataResponse($data);
    }

    public function getCorporateById($id)
    {
        $data = $this->corporateService->getCorporateById($id);
        if($data){  
            $data->load('pic');
            return new DataResponse($data);
        }
        else{
            return new DataResponse('', ResponseCode::NOT_FOUND_CODE, ResponseMessage::NOT_FOUND_MESSAGE);
        }
    }

    public function storeCorporate(CorporateRequest $request)
    {
        $data = $this->corporateService->storeCorporate($request);
        return new DataResponse($data);
    }

    public function updateCorporate(CorporateRequest $request, $id)
    {
        $data = $this->corporateService->updateCorporate($request, $id);
        if(!$data){
            return new DataResponse('', ResponseCode::NOT_FOUND_CODE, ResponseMessage::NOT_FOUND_MESSAGE);
        }
        else{
            return new DataResponse();
        }
    }

    public function deleteCorporate($id)
    {
        $this->corporateService->deleteCorporate($id);
        return new DataResponse();
    }
}
