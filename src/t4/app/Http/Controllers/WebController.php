<?php

namespace App\Http\Controllers;

use App\Services\IndexService;

/**
 * Class WebController - Responsável pela página HTML
 * @package App\Http\Controllers
 */
class WebController extends Controller
{
    protected $service;

    /**
     * WebController constructor.
     * @param IndexService $service
     */
    public function __construct(IndexService $service)
    {
        $this->service = $service;
    }

    public function index(){
        $data = $this->service->all();

        return view('index', [
            'data' => $data
        ]);
    }
}
