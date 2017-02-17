<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 8/02/17
 * Time: 11:32
 */

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\User";
    }

}