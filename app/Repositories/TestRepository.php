<?php
namespace App\Repositories;
use App\Models\School;


class TestRepository implements TestInterface
{
    public function all()
    {
        return School::get();
    }

    public function get($id)
    {
        return School::find($id);
    }

    public function store(array $data)
    {
        return School::create($data);
    }

    public function update($id, array $data)
    {
        return School::find($id)->update($data);
    }

    public function delete($id)
    {
        return School::destroy($id);
    }
}