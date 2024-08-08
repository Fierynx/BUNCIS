<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\CorporateRepository;

class CorporateService{
    protected $corporateRepository;

    public function __construct(CorporateRepository $corporateRepository){
        $this->corporateRepository = $corporateRepository;
    }

    public function getCorporate(){
        return $this->corporateRepository->getCorporate();
    }

    public function getCorporateById($id){
        return $this->corporateRepository->getCorporateById($id);
    }

    public function storeCorporate($request){
        $corporateData = [
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
        ];
        return $this->corporateRepository->storeCorporate($corporateData);
    }

    public function updateCorporate($request, $id){
        $corporateData = [
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
        ];
        return $this->corporateRepository->updateCorporate($corporateData, $id);
    }

    public function deleteCorporate($id){
        return $this->corporateRepository->deleteCorporate($id);
    }

}
