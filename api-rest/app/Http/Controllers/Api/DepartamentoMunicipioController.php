<?php

namespace App\Http\Controllers\Api;

use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\Controller;
use Orion\Concerns\DisableAuthorization;


class DepartamentoMunicipioController extends Controller
{
    use DisableAuthorization;

    protected $model = Departamento::class;

    protected $relation = 'municipios';

}
