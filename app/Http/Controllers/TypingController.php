<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypingController extends Controller
{
    public function index()
    {
    $exampleText = "belajar mengetik 10 jari.";
        return view('typing', ['exampleText' => $exampleText]);
    }

    public function submit(Request $request)
    {
        $input = $request->input('typing-input');
        $timeTaken = $request->input('time-taken');
        $exampleText = "belajar mengetik 10 jari.";
        $wordCount = str_word_count($input);
        $characterCount = strlen($input);

        $correctWords = 0;
        $inputWords = explode(' ', $input);
        $exampleWords = explode(' ', $exampleText);

        for ($i = 0; $i < min(count($inputWords), count($exampleWords)); $i++) {
            if ($inputWords[$i] === $exampleWords[$i]) {
                $correctWords++;
            }
        }

        $accuracy = ($correctWords / count($exampleWords)) * 100;

        if ($timeTaken > 0) {
            $wordsPerMinute = ($wordCount / ($timeTaken / 60));
            $results = "You typed $wordCount words and $characterCount characters in $timeTaken seconds. Your typing speed is " . round($wordsPerMinute, 2) . " words per minute. Your accuracy is " . round($accuracy, 2) . "%.";
        } else {
            $results = "Typing time is too short to calculate speed.";
        }

        return redirect('/typing')->with('results', $results);
    }
}