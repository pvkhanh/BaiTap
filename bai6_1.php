<?php
class Student{
    public int $id;
    public string $name;
    public int $age;
    public float $score;
    function __construct($id,$name,$age,$score){
        $this->id=$id;
        $this->name=$name;
        $this->age=$age;
        $this->score=$score;
    }
    
}
 $students=[
        new Student(1,"Nguyen Van A",20,8.5),
        new Student(2,"Tran Thi B",22,7.0),
        new Student(3,"Le Van C",19,9.0),
        new Student(4,"Pham Thi D",21,6.5),
        new Student(5,"Hoang Van E",23,8.0)
    ];
function compareByAge($a, $b) {
    if($a->age < $b->age) {
        return -1;
    } elseif($a->age > $b->age) {
        return 1;
    } else {
        return 0;
    }
}
usort($students, 'compareByAge');
echo "THE STUDENT WITH THE HIGHEST SCORE IS\n";
$maxScoreStudent = $students[0];
foreach ($students as $student) {
    if ($student->score > $maxScoreStudent->score) {
        $maxScoreStudent = $student;
    }
}
echo "Id: ".$maxScoreStudent->id."\n";
echo "Name: ".$maxScoreStudent->name."\n";
echo "Age: ".$maxScoreStudent->age."\n";
echo "Score: ".$maxScoreStudent->score."\n";
echo "-------------------\n";
echo "ARRANGE STUDENTS BY ASCROSSING AGE\n";
foreach($students as $student){
    echo "Id: ".$student->id."\n";
    echo "Name: ".$student->name."\n";
    echo "Age: ".$student->age."\n";
    echo "Score: ".$student->score."\n";
    echo "-------------------\n";
}

?>