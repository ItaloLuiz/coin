<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetalheMoedaController extends Controller
{
    public function show($code)
    {
        $moeda = DB::table('tbl_coins')
            ->where('code', '=', $code)
            ->get();

        $data[] = ['Data'];
        foreach ($moeda as $key => $value) {
            $data[++$key] = $value->created_at;
        }

        $alta[] = ['Alta'];
        foreach ($moeda as $key => $value) {
            $alta[++$key] = $value->bid;
        }

        $baixa[] = ['Baixa'];
        foreach ($moeda as $key => $value) {
            $baixa[++$key] = [(int)$value->low];
        }

        return view('detalhes', [
            'moedas' => $moeda,
            'code' => $code,
            'data' => json_encode($data),
            'alta' => json_encode($alta),
            'baixa' => $baixa
        ]);
    }
}
