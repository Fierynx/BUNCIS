<?php

namespace App\Repositories;

use App\Models\Pic;

class PicRepository
{
    protected $Pic;
    public function __construct(Pic $Pic)
    {
        $this->Pic = $Pic;
    }

    public function getPic(){
        $data = $this->Pic->get();
        return $data;
    }

    public function getPicById($id){
        $data = $this->Pic->where('id', $id)->first();
        return $data;
    }

    public function storePic($PicData){
        return $this->Pic->create($PicData);
    }

    public function updatePic($PicData, $id){
        return $this->Pic->where('id', $id)->update($PicData);
    }

    public function deletePic($id){
        return $this->Pic->where('id', $id)->delete();
    }
}
