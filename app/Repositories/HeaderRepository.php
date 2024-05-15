<?php
namespace App\Repositories;
use App\Models\Api\Header;

class HeaderRepository{
    public function index()
    {
        return Header::all();
    }
    public function create(array $headernalData)
    {
        return Header::create($headernalData);
    }
    public function update(Header $header, array $headernalData)
    {
        $header->update($headernalData);
        return $header;
    }
    public function delete(Header $header)
    {
        $header->delete();
    }
    public function findById($id)
    {
        return Header::findOrFail($id);
    }
}