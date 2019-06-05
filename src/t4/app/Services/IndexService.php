<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Class IndexService - Responsável por acessar a API e retornar seus dados para o Controller
 * @package App\Services
 */
class IndexService
{
    public function all()
    {
        $url = env('API_URL');
        $data = $this->getApi($url, 'get', null);

        return $data;
    }

    public function getApi($url, $method, $data)
    {
        if ($method == 'post')
            $request = Request::create($url, $method, $data);
        else
            $request = Request::create($url, $method);

        $response = Route::dispatch($request);
        return json_decode($response->getContent());
    }
}
