<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::orderBy("id", "DESC")->get();
        return view("quiz.index", [
            "quizzes" => $quizzes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $levels = Level::all();

        return view("quiz.create", [
            "levels" => $levels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $banner = $request->file('banner');
        $extensionBanner = $banner->getClientOriginalExtension();
        $bannerName = time() . "." . $extensionBanner;

        $banner->move("quizzes", $bannerName);

        $quiz = Quiz::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "description" => $request->description,
            "for" => $request->for,
            "banner" => $bannerName
        ]);

        $questionData = [];
        foreach ($request->questions as $key => $question) {
            $answer = "";

            // Check if $request->answers is set and not null
            if (isset($request->answers[$key])) {
                $selectedAnswer = $request->answers[$key];

                // Check the selected answer option and assign the corresponding value
                switch ($selectedAnswer) {
                    case "a":
                        $answer = $request->a[$key];
                        break;
                    case "b":
                        $answer = $request->b[$key];
                        break;
                    case "c":
                        $answer = $request->c[$key];
                        break;
                    case "d":
                        $answer = $request->d[$key];
                        break;
                    default:
                        // Handle unexpected answer option
                        $answer = "Invalid answer option";
                        break;
                }
            } else {
                // Handle the case where $request->answers[$key] is not set
                $answer = "Answer not provided";
            }

            // Build question data array
            $questionData[] = [
                "question" => $question,
                "a" => $request->a[$key],
                "b" => $request->b[$key],
                "c" => $request->c[$key],
                "d" => $request->d[$key],
                "answer_option" => $request->answers[$key],
                "answer_text" => $answer,
                "quiz_id" => $quiz->id
            ];
        }

        Question::insert($questionData);

        return redirect()->to("/quiz");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

        $quiz = Quiz::whereSlug($slug)->with('question')->first();

        return view('quiz.show', [
            "quiz" => $quiz
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $quiz = Quiz::whereSlug($slug)->with('question')->first();
        $levels = Level::all();

        return view('quiz.edit', [
            "quiz" => $quiz,
            "levels" => $levels
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
