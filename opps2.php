<?php


class Info{

private $firstname,$lastname,$address,$contact,$gender,$email,$mothername,$fathername;

public function get_value($fname,$lname,$address,$contact,$gender,$email,$mothername,$fathername){
$this->firstname = $fname;
$this->lastname = $lname;
$this->address = $address;
$this->contact = $contact;
$this->gender = $gender;
$this->email = $email;
$this->mothername = $mothername;
$this->fathername = $fathername;

} 

public function show_variable(){
echo $this->firstname ."<br>";
echo $this->lastname."<br>";
echo $this->address."<br>";
echo $this->contact ."<br>";
echo $this->gender ."<br>";
echo $this->email ."<br>";
echo $this->mothername ."<br>";
echo $this->fathername ."<br>";
}
}

$obj = new Info();
$obj->get_value('Anshu', 'sharma', 'jaipur', '1243454576','female','lalita@gmailcom','ms.aasha','mr.arun');
$obj->show_variable();



?>