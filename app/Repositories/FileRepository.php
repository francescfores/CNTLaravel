<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;


class FileRepository extends BaseRepository {

    function model()
    {
        return "App\\File";
    }
}