<?php

//Task #1 
DB::table('students')->get();

//Task #2
DB::table('students')->where('grade', $grade)->get();

//Task #3
DB::table('students')->whereBetween('age', [$min, $max])->get();

//Task #4
DB::table('students')->where('city', $city)->get(); 

//Task #5
DB::table('students')->orderBy('age', 'desc')->get();

//Task #6
DB::table('students')
->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
->select('students.*', 'teachers.name AS teacher_name')
->get();

//Task #7
DB::table('teachers')
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
->groupBy('teachers.id')
->get();       

// Task #8
DB::table('students')
->join('subjects', 'students.subject_id', '=', 'subjects.id')
->select('students.*', 'subjects.name AS subject_name')
->get();

//Task #9
DB::table('students')
->leftJoin('scores', 'students.id', '=', 'scores.student_id')
->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
->groupBy('students.id')
->get();

//Task #10
DB::table('teachers')
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
->groupBy('teachers.id')
->orderBy('student_count', 'desc')
->limit(5)
->get();

?>