<html> 
<head>
	<title>FORM STUDENT</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
	

<form action="opps5.php" method="POST">

<h3>Information of student::</h3>

  
  <div class="row">
  	<div class="col-md-6">
  		<label for="exampleInputname1">Fisrstname</label><br>
     	<input type="text" class="form-control"n name ="fname" placeholder="name">	
  	</div>
     
  </div>

 <div class="row">
  	<div class="col-md-6">
     <label for="exampleInputLastname1">Lastname</label><br>
    <input type="text" class="form-control" name="lname"  placeholder="Enter Lastname"><br>
    </div>
</div>


  <div class="row">
  	<div class="col-md-6">
     <label for="exampleInputAddress1">Address</label><br>
     <input type="text" class="form-control" name="address" placeholder="address"><br>
   </div>
</div>

<div class="row">
  	<div class="col-md-6">     <label for="exampleInpucontact1">Contact</label><br>
     <input type="text" class="form-control" name="contact" placeholder="contact"><br>
  </div>
</div> 


<div class="row">
  	<div class="col-md-6">
      <label for="exampleInputGender1">Gender</label><br>
      <input type="text" class="form-control" name="gender" placeholder="Gender"><br>
   </div>
</div>  

<div class="row">
  	<div class="col-md-6">    
  	<label for="exampleInputEmail1">Email</label><br>
    <input type="text" class="form-control" name="email" placeholder="Email"><br>
 </div>


<div class="row">
  	<div class="col-md-6">    
  	<label for="exampleInputMothername1">Mothier's Name</label><br>
    <input type="text" class="form-control" name="mothername"placeholder="mother Name"><br>
  </div>
</div>
<div class="row">
  	<div class="col-md-6">  
  	  <label for="exampleInputfathername1">Father's Name</label><br>
      <input type="text" class="form-control" name="fathername"placeholder="Father's Name"><br>
</div>


<div class="row">
  	<div class="col-md-6">
    <label for="exampleInputSlname">School Name</label><br>
    <input type="text" class="form-control" name="slname"  placeholder="School Name"><br>
  </div>
</div>

<div class="row">
  	<div class="col-md-6">
    <label for="exampleInputClass1">Class Of</label><br>
    <input type="text" class="form-control" name="class" placeholder="Class Of"><br>
  </div>
</div>



<div class="row">
  	<div class="col-md-6">
    <label for="exampleInputrollnm1">Roll Number</label><br>
    <input type="text" class="form-control" name="rollnm" placeholder="Roll Number"><br>
   </div>
</div>
<div>
  <input type="submit" class="btn btn-primary" value="Submit" name="studentsave">
</div>
</form>



</body>

</html>