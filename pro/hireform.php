<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		#div1{
 				
    				
    		 }
	</style>
</head>
<body>
	<div id="div1">
		<form action="hform.php" method="post" class="form-inline">
		<div class="form-group">	
			<label for="username">Username</label><br>
			<input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username">
	    </div><br><br>

    <div class="form-group" id="category">
        <label>Category</label>
       <select class="form-group">
          <option value="0">Select</option>
         <optgroup label="Design">
            <option value="1">animation</option>
          <option value="2">illustrator</option>
          <option value="3">Graphics</option>
        </optgroup>
        <optgroup label="Wrtings">
             <option value="4">Content writing</option>
           <option value="5">Creative writin</option>
           <option value="6">Web content</option>
        </optgroup>
        <optgroup label="Engineering & Arch.">
             <option value="4">Product design</option>
           <option value="5">Interior design</option>
           <option value="6">Structural design</option>
        </optgroup>
         <optgroup label="Engineering & Arch.">
             <option value="7">Product design</option>
           <option value="8">Interior design</option>
           <option value="9">Structural design</option>
        </optgroup>
      </select>
    </div><br><br>

		<div class="form-group">
			<label for="description">Description Of Job</label><br>
			<textarea rows="10" cols="80" name="description" id="description" placeholder="Describe your self"></textarea>
		</div><br><br>
		<div class="form-group" id="work_for">
			<label>Work For Amount</label>
			<select name="work" value="work">
     	    <option value="0">Select</option>
     	    <option value="Fixed">Fixed</option>
     	    <option value="hourly">hourly</option>
     	    <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter the amount">
            </select>
		</div><br><br>
		<div>
			<label>Time Period</label><br>
          <select name="period">
          <option value="0">Select</option>
          <option value="1">1 Month</option>
          <option value="2">1-3 Month</option>
          <option value="3">3-6 Month</option>
		</div>
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">

		</form>
 	</div>

</body>
</html>