<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchCharacterController extends Controller
{
    public function index()
    {
        return view('admin.character-match');
    }

    public function checkMatch(Request $request)
    {
        $request->validate([
            'input1' => 'required|string',
            'input2' => 'required|string',
        ]);

        $input1 = strtoupper(str_replace(' ', '', $request->input('input1')));
        $input2 = strtoupper(str_replace(' ', '', $request->input('input2')));

        $uniqueChars = array_unique(str_split($input1));
        $uniqueTwo = array_unique(str_split($input2));
        $matchCount = 0;

        foreach ($uniqueChars as $char) {
            if (strpos($input2, $char) !== false) {
                $matchCount++;
            }
        }

        $totalChars = count($uniqueChars);
        $percentage = ($totalChars > 0) ? ($matchCount / $totalChars) * 100 : 0;

        return view('admin.character-match', compact('input1', 'input2', 'percentage', 'matchCount', 'totalChars'));
    }
}
