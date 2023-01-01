<?php

namespace Client\Repositories\Client;


interface ClientInterface
{
    public function store($request);

    public function update($request,$id);

    public function getById($id);

    public function trashedDestroy($id);

    public function trashedRecover($id);

}
