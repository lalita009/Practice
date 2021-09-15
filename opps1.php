<?php

 class Info{

public $firstname,$lastname,$address,$contact,$gender,$email,$mothername,$fathername;

    public function get_value($data){
      $this->firstname = $data['fname'];
      $this->lastname = $data['lname'];
      $this->address = $data['address'];
      $this->contact = $data['contact'];
      $this->gender = $data['gender'];
      $this->email = $data['email'];
      $this->mothername = $data['mothername'];
      $this->fathername = $data['fathername'];


     } 

    public function show_variable(){
        echo "Firstname = ".$this->firstname ."<br>";
        echo "Lastname = ".$this->lastname."<br>";
        echo "Address = ". $this->address."<br>";
        echo "Contact = " . $this->contact ."<br>";
        echo "Gender = ".$this->gender ."<br>";
        echo "Email = ".$this->email ."<br>";
        echo "Mothername = ".$this->mothername ."<br>";
        echo "Fathername = ".$this->fathername ."<br>";
      }
}



class StudentInfo extends Info{

private $slname,$class,$rollnm;

   public function student_info($data){
        $this->slname = $data['slname'];
        $this->class = $data['class'];
        $this->rollnm = $data['rollnm'];

       }

   public function student_return(){
        echo "School Name = ".$this->slname."<br>";
        echo "Class Of = ". $this->class."<br>";
        echo "Roll number = ".$this->rollnm."<br>";

        }


   public function student_details(){
        echo"<h3>Information of student::</h3>" ."<br>";

       }
}


Class Teacher extends Info{

private $classes,$sub;

   public function teacher_info($data){
        $this->classes=$data['classes'];
        $this->sub=$data['sub'];

      }


   public function teacher_return(){
        echo "Class = ".$this->classes."<br>";
        echo "Subject = ". $this->sub."<br>";
 
       }

    public function teacher_details(){
         echo"<h4>Information of teacher::</h4>";

       }

}




function studentRecord($data){
  

    $obj = new StudentInfo();
    $obj->student_details();
    $obj->get_value($data);
    $obj->show_variable();

    $obj->student_info($data);
    $obj->student_return();
}


function teacherRecord($data){

    $obj = new Teacher();
    $obj->teacher_details();
    $obj->get_value($data);
    $obj->show_variable();

$obj->teacher_info($data);
$obj->teacher_return();


}   







?>