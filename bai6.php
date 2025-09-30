<?php

class Student
{
    public $id;
    public $name;
    public $age;
    public $score;

    function __construct($id, $name, $age, $score)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }

}
$students = [
    new Student(1, "Nguyen Van A", 20, 8.5),
    new Student(2, "Tran Thi B", 22, 7.0),
    new Student(3, "Le Van C", 19, 9.0),
    new Student(4, "Pham Thi D", 21, 6.5),
    new Student(5, "Hoang Van E", 23, 8.0)
];

$maxScoreStudent = $students[0];
foreach ($students as $student) {
    if ($student->score > $maxScoreStudent->score) {
        $maxScoreStudent = $student;
    }
}
echo "Sinh viên có điểm cao nhất là: \n";
echo "ID: " . $maxScoreStudent->id . "\n";
echo "Tên: " . $maxScoreStudent->name . "\n";
echo "Tuổi: " . $maxScoreStudent->age . "\n";
echo "Điểm: " . $maxScoreStudent->score . "\n";

//cách khác:
// for ($i = 0; $i < count($students); $i++) {
//     if ($students[$i]->score == $maxScoreStudent->score) {
//         echo "Sinh viên có điểm cao nhất là: \n";
//         echo "ID: " . $students[$i]->id . "\n"; 
//         echo "Tên: " . $students[$i]->name . "\n";
//         echo "Tuổi: " . $students[$i]->age . "\n";
//         echo "Điểm: " . $students[$i]->score . "\n";
//     }
// }

echo " SẮP XẾP SINH VIÊN THEO TUỔI TĂNG DẦN\n";


foreach ($students as $i => $student1) {
    foreach ($students as $j => $student2) {
        if ($student1->age < $student2->age) {
            $temp = $students[$i];
            $students[$i] = $students[$j];
            $students[$j] = $temp;
        }
    }
}
echo "Danh sách sinh viên sau khi sắp xếp:\n";
foreach ($students as $student) {
    echo "ID: " . $student->id . ", Tên: " . $student->name . ", Tuổi: " . $student->age . ", Điểm: " . $student->score . "\n";
}
?>