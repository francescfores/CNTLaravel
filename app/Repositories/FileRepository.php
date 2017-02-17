<?php

namespace App\Repositories;
use Prettus\Repository\Eloquent\BaseRepository;


class FileRepository extends BaseRepository  implements Interfaces\FileInterface  {

    function model()
    {
        return "App\\File";
    }

    public function getImageUser(array $data)
    {
        $this->model();
    }
}