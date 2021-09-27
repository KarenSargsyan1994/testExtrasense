<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasencesController extends Controller
{
    public function getAnswers(Request $request)
    {
        $number = $request->get('number');
        if (!$request->session()->get('extrasences')) {
            $extraAnswers = array();
        } else {
            $extraAnswers = json_decode($request->session()->get('extrasences'), true);
        }
        $extraData = $this->generateExtrasenseData($extraAnswers, $number);
        $request->session()->put('extrasences', json_encode($extraData['extraAnswer']));
        return json_encode($extraData['results']);
    }

    public function getExtrasencesData(Request $request)
    {
        $value = $request->session()->get('extrasences');
        return $value;
    }

    private function generateExtrasenseData($extraAnswer, $number)
    {
        $extraAnswer['rounds'][] = $number;
        $random = 7 - rand(1, 6);
        $wrongs = 0;
        $results = array();
        for ($i = 0; $i < 7; $i++) {
            if ($wrongs == $random) {
                $results[] = $number;
            } else {
                $flag = rand(0, 1);
                if ($flag) {
                    $results[] = $number;
                } else {
                    $results[] = rand(1, 999);
                    $wrongs++;
                }
            }
            if ($number == $results[$i]) {
                $extraAnswer['check'][$i][] = 1;
            } else {
                $extraAnswer['check'][$i][] = 0;
            }
            $extraAnswer['answer'][$i][] = $results[$i];

        }
        return array('extraAnswer'=>$extraAnswer,'results'=>$results);
    }
}
