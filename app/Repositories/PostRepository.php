<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 14/02/17
 * Time: 1:49
 */

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;


class PostRepository extends BaseRepository {

    function model()
    {
        return "App\\Post";
    }
}