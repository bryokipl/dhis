 <link rel="stylesheet" href="materialize/css/materialize.min.css" type="text/css" />

        <script src="materialize/js/materialize.js"></script>
<?php 
error_reporting(E_ALL);
extract($_REQUEST);

// echo  $name;
// echo "<br/>" . $created;
// echo "<br/>" . $lastUpdated;
// echo "<br/>" . $href;

$ch = curl_init();
$username = "bootcamp2016";
        $password = "Bootcamp2016";               //curl options
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_URL, "http://test.hiskenya.org/api/users/{$id}");
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

/* echo "<pre>";
var_dump((array)json_decode($result));
 echo "</pre>";*/

extract((array)json_decode($result));

/*echo $name;
echo "<br/>" .$jobTitle;
echo "<br/>" .$education;
echo "<br/>" .$employer;
echo "<br/>" .$languages;
echo "<br/>" .$email;
echo "<br/>" .$phoneNumber;
echo "<br/>" .$nationality;
echo "<br/>" .$interests;
echo "<br/>" .$created;*/?>
<div class="container">
<div class="col s6">
	<h3 style="color:orange">More Details </h3>
	<table class="striped">
                    <thead>
                        <th>Property</th>
                        <th>Value</th>
                    </thead>
                    <tbody>
                    	<tr>
                    		<th>Name</th>
                    		<td><?php echo isset($name)?$name:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Education</th>
                    		<td><?php echo isset($education)?$education:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Employer</th>
                    		<td><?php echo isset($employer)?$employer:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Languages</th>
                    		<td><?php echo isset($languages)?$languages:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Email</th>
                    		<td><?php echo isset($email)?$email:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Phone Number</th>
                    		<td><?php echo isset($phoneNumber)?$phoneNumber:"";?></td>
                    	</tr>
                    	<tr>
                    		<th>Nationality</th>
                    		<td><?php echo isset($nationality)?$nationality:""?></td>
                    	</tr>
                    	<tr>
                    		<th>Interests</th>
                    		<td><?php echo isset($interests)?$interests:"";?></td>
                    	</tr>
                        <tr>
                    		<th>Created At</th>
                    		<td><?php echo isset($created)?$created:""?></td>
                    	</tr>
                        
                    </tbody>
                    
                </table>
</div>
</div>				
 