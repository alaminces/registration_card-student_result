<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $numSubjects = count($marks);

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        } elseif ($mark < 33) {
            echo "Failed. Student has scored below 33 in one or more subjects.";
            return;
        }
        $totalMarks += $mark;
    }

  
    $averageMarks = $totalMarks / $numSubjects;

    
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks <= 79):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks <= 69):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks <= 59):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks <= 49):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks <= 39):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

   
    echo "Total Marks: $totalMarks <br>";
    echo "Average Marks: $averageMarks <br>";
    echo "Grade: $grade";
}


$marks = [50, 45, 60, 44, 33];


calculateResult($marks);


