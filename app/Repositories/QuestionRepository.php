<?php
namespace App\Repositories;

use App\Models\Api\Header;
use App\Models\Api\Question;

class QuestionRepository{
    public function index()
    {
        return Question::with('header')->paginate(15);
    }
    public function create(Header $header,array $questionData)
    {
        $question = $header->question()->create($questionData);
        return $question;
    }
    public function update(Question $question, Header $header,array $questionData)
    {
        $question->update($questionData);
        $question->header()->associate($header);
        $question->save();
        return $question;
    }
    public function delete(Question $question)
    {
        $question->delete();
    }
    public function findById($id)
    {
        return Question::with('header')->findOrFail($id);
    }

    public function getQuestion($week)
    {
        return Question::where('week',$week)->with('header')->get();
    }
}