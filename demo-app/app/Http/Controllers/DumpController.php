<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpController extends Controller
{
    public function loopdemo(){
        dd("Hello, I m Anson");
    }

    public function arraydemo(){
    $students = [
        [
            "sid" => 1,
            "name" => "John Doe",
            "grade" => "A",
            "course" => "Mathematics"
        ],
        [
            "sid" => 2,
            "name" => "Jane Smith",
            "grade" => "B",
            "course" => "Physics"
        ],
        [
            "sid" => 3,
            "name" => "Emily Johnson",
            "grade" => "A-",
            "course" => "Chemistry"
        ],
        [
            "sid" => 4,
            "name" => "Michael Brown",
            "grade" => "C+",
            "course" => "Biology"
        ],
        [
            "sid" => 5,
            "name" => "Sophia Davis",
            "grade" => "B+",
            "course" => "English"
        ]
    ];
    // $studentcollection = collect($students);
    // dd($studentcollection);

    // Accessing the first student's name
    // echo $students[0]['name'];
    
    //You can loop through the array using foreach to process each student record:
    // foreach ($students as $student) {
    //     echo $student['name'] . ' is enrolled in ' . $student['course'] . '<br>';
    // }

    // $names = array_column($students, 'name');
    // print_r($names); // Outputs an array of student names

    
    // $collection = collect($students);
    // // Accessing a specific student's data
    // $firstStudent = $collection->first();
    // echo $firstStudent['name']; // Outputs: John Doe
    // echo "<br>";
    // // Filtering students with grade 'A'
    // $aGradeStudents = $collection->where('grade', 'A');
    // foreach ($aGradeStudents as $student) {
    //     echo $student['name'] . '<br>'; // Outputs students with grade 'A'

    
  
    
    }
}
