<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\PicRepository;

class PicService{
    protected $PicRepository;

    public function __construct(PicRepository $PicRepository){
        $this->PicRepository = $PicRepository;
    }

    public function getPic(){
        return $this->PicRepository->getPic();
    }

    public function getPicById($id){
        return $this->PicRepository->getPicById($id);
    }

    public function storePic($request){
        $PicData = [
            'name' => $request->name,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'position' => $request->position,
            'CorporateId' => $request->CorporateId,
        ];
        return $this->PicRepository->storePic($PicData);
    }

    public function updatePic($request, $id){
        $PicData = [
            'name' => $request->name,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'position' => $request->position,
            'CorporateId' => $request->CorporateId,
        ];
        return $this->PicRepository->updatePic($PicData, $id);
    }

    public function deletePic($id){
        return $this->PicRepository->deletePic($id);
    }

}
