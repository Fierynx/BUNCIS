<?php

namespace App\Repositories;

use App\Models\Corporate;

class CorporateRepository
{
    protected $corporate;
    public function __construct(Corporate $corporate)
    {
        $this->corporate = $corporate;
    }

    public function getCorporate(){
        $data = $this->corporate->get();
        return $data;
    }

    public function getCorporateById($id){
        $data = $this->corporate->where('id', $id)->first();
        return $data;
    }

    public function storeCorporate($corporateData){
        return $this->corporate->create($corporateData);
    }

    public function updateCorporate($corporateData, $id){
        return $this->corporate->where('id', $id)->update($corporateData);
    }

    public function deleteCorporate($id){
        return $this->corporate->where('id', $id)->delete();
    }
}
