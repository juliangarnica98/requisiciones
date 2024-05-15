<?php
namespace App\Repositories;
use App\Models\Api\Regional;

class RegionalRepository{
    public function index()
    {
        return Regional::paginate(10);
    }
    public function index2()
    {
        return Regional::where('status',1)->paginate(10);
    }
    public function create(array $regionalData)
    {
        return Regional::create($regionalData);
    }
    public function update(Regional $regional, array $regionalData)
    {
        $regional->update($regionalData);
        return $regional;
    }
    public function delete(Regional $regional)
    {
        $regional->delete();
    }
    public function findById($id)
    {
        return Regional::findOrFail($id);
    }
    public function findByDescription($des)
    {
        return Regional::where('description',$des)->first();
    }
}