<?php

namespace App\Services;

use App\Models\Code;

class CodeService {
    function create($request) {
        $howManyCodes = $request['myCodes'];
        for ($i = 0; $i < $howManyCodes; $i++) {
            $randnum = rand(1000000000,9999999999);
            $code = Code::where('value', $randnum)->get();
                if (count($code) == null) {
                    Code::create([
                        'value' => $randnum,
                        'user_id' => $request['userId'],
                    ]); 
                }
                else {
                    $i--;
                }
        }
        return "Success! Codes added";
    }
    function delete($request) {
        $codes = preg_replace('/\s+/', '', $request['deleteCodes']);
        $arrayOfCodes = explode(',', $codes);
        $howMuchNotExists = 0;
        $arrayOfNotExistCodes = [];
        foreach ($arrayOfCodes as $code) {
            $result = Code::where('value', $code)->get();
                if (count($result) == null) {
                    ++$howMuchNotExists;
                    array_push($arrayOfNotExistCodes, $code);
                }
        }
        if ($howMuchNotExists > 0) {
            $codesNotExist = implode(', ', $arrayOfNotExistCodes);
            return "Error... this codes is not correct: ".$codesNotExist;
        }
        else {
            foreach ($arrayOfCodes as $code) {
                try {
                    Code::where('value', $code)->delete();   
                } catch (ModelNotFoundException $exception) {
                    return $exception->errorInfo;
                };
            }
            return count($arrayOfCodes)." codes deleted"; 
        }
    }
}