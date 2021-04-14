<?php

namespace App\Http\Controllers;

use App\Models\DTO;
use App\Services\Business\SercurityService;
use Illuminate\Http\Request;

class UsersRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DTO
     */
    public function index()
    {
        $service = new SercurityService();
        $dto = new DTO(200, "data Returned Successfully", $service->getAllUsers());
        json_encode($dto);
        return $dto;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = new SercurityService();
        $dto = new DTO(200, "Request processed", $service->getUserById($id));
        json_encode($dto);
        return $dto;
    }


}
