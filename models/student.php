
<?php
class Student
{
    public $name;
    public $point_1;
    public $point_2;
    public $point_3;
    public $average;

    function __construct($name, $point_1, $point_2,$point_3,$average)
    {
        $this->name = $name;
        $this->point_1 = $point_1;
        $this->point_2 = $point_2;
        $this->point_3 = $point_3;
        $this->average = $average;
    }
    static function all()
    {
        $list = [];
        $db = DB::connect();
        $req = $db->query('SELECT * FROM student_copy ');
        foreach ($req as $value)
        {
            array_push($list,$value);
        }
        return $list;
    }
    public function add_student($name, $point_1, $point_2,$point_3)
    {
        $average = ($point_1 + $point_2 + $point_3)/3;;
        $db = DB::connect();
        $sql = "INSERT INTO student_copy(name, point_1, point_2,point_3)
VALUES ('$name', $point_1,$point_2,$point_3)";
        if ($db->query($sql) === TRUE) {
            return true;
        }
        else
        {
            return false;
        }
    }
}