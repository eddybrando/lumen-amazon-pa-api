<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LookupController extends Controller
{
    public function item(Request $request)
    {
        $associateTag = $request->input("associate-tag");
        $awsAccessKeyId = $request->input("aws-access-key-id");
        $itemId = $request->input("item-id");

        // TODO: Handle item lookup
        return response()->json(["requested lookup" => $itemId]);
    }
}
