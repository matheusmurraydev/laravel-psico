<?php

namespace App\UseCases\ConsultarBemEstar\EntitiesApplication;

use Illuminate\Support\Facades\DB;

class ConsultorBemEstar
{
    public array $dados;

    public function __construct()
    {
        $this->dados = DB::select(
            "SELECT * FROM bem_estar"
        );
    }
}
