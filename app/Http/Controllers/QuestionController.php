<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::where('parent_id', null)->get(); // Ambil pertanyaan utama (tanpa parent_id)
        return response()->json($questions);
    }

    public function show($id)
    {
        $question = Question::find($id);
        if ($question) {
            $children = Question::where('parent_id', $id)->get(); // Ambil jawaban anak dari pertanyaan yang dipilih
            return response()->json([
                'question' => $question,
                'children' => $children
            ]);
        }
        return response()->json(['error' => 'Question not found'], 404);
    }
}
