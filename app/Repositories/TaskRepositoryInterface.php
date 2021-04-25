<?php


namespace App\Repositories;


interface TaskRepositoryInterface extends RepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function restore($id);

    /**
     * @param $id
     * @return mixed
     */
    public function force_destroy($id);
}
