<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$answers = $db->query('SELECT A.AnswerText, Q.QuestionID, A.AnswerID
FROM Answers A
JOIN QuizQuestions QQ ON A.QuestionID = QQ.QuestionID
JOIN Questions Q ON A.QuestionID = Q.QuestionID 
WHERE Q.QuestionID = :questionid',[
    'questionid' => 1
])->get();


view("components/answers.view.php", [
    'heading' => 'My Answer',
    'answers' => $answers
]);