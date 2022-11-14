<!DOCTYPE html>
<html>
   <head>
      <meta charset=UTF-8" />
      <title>PHP Quiz</title>
      <link rel="stylesheet" type="text/css" href="quiz.css" />
   </head>
   <body>
      <div id="page-wrap">
         <h1>Results</h1>
         <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect = $totalCorrect + 20; }
            if ($answer2 == "B") { $totalCorrect = $totalCorrect + 20; }
            if ($answer3 == "D") { $totalCorrect = $totalCorrect + 20; }
            if ($answer4 == "A") { $totalCorrect = $totalCorrect + 20; }
            if ($answer5 == "D") { $totalCorrect = $totalCorrect + 20; }
            
            echo "<div id='results'>Grade: $totalCorrect%</div>";
            echo "
            <div id='question-1'>
            Question 1: What is the capital of the United States</br>
            Your Answer: $answer1</br>
            Correct Answer: Washington D.C.</br>
            </div>
            <div id='question-2'>
            </br>Question 2: What is the first element on the periodic table?</br>
            Your Answer: $answer2</br>
            Correct Answer: Hydrogen</br>
            </div>
            <div id='question-3'>
            </br>Question 3: What does not grow on a tree?</br>
            Your Answer: $answer3</br>
            Correct Answer: Pineapple</br>	
            </div>
            <div id='question-4'>
            </br>Question 4: Where was Pizza Hut created?</br>
            Your Answer: $answer4</br>
            Correct Answer: Kansas</br>
            </div>
            <div id='question-5'>
            </br>Question 5: How many rings does Lebron James have?</br>
            Your Answer: $answer5</br>
            Correct Answer: 4</br>
            </div>
            "            
            ?>
      </div>
   </body>
</html>