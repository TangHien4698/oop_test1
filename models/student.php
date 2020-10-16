
<?php
class Student
{
    public $name;
    public $point_1;
    public $point_2;
    public $point_3;
    public $average;
    function __construct($name, $point_1, $point_2,$point_3)
    {
        $this->name = $name;
        $this->point_1 = $point_1;
        $this->point_2 = $point_2;
        $this->point_3 = $point_3;
        $this->average();
    }
    static function all()
    {
        $list = [];
        $db = DB::connect();
        $req = $db->query('SELECT * FROM student_copy ');
        foreach ($req as $value)
        {
            $student = new Student($value["name"], $value["point_1"], $value["point_2"],$value["point_3"]);
            array_push($list,$student);
        }
        return $list;
    }
    public function add_student($name, $point_1, $point_2,$point_3)
    {
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
    public function average()
    {
        $this->average =  round(($this->point_1 + $this->point_2 + $this->point_3)/3,2);
    }
}