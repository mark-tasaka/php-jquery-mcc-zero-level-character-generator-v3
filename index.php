<!DOCTYPE html>
<html>
<head>
<title>Launch Page: MCC Zero Level Character Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2018">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/mcc_additions.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Zero Level Character Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The MCC Zero Level Character Generator (Version 3) has been designed primarily with PHP and jQuery. Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of writing a program with high cohesion and low coupling.  In this way, this program simulates Object-Oriented design.  JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.</p>    

        <br/>
        <br/>
            

        <form action="" id ="myForm3"  target="_blank">
        
		<div class="content10">
            <br/>
            
 
			  <select id="abilityScores3" class="dropdownmenu6">
				<option value="1" selected>3d6</option>
				<option value="2">4d6&#42;</option>
			  </select>
			
			  <select id="hitPoints3" class="dropdownmenu6">
				<option value="1"  selected id="d4">d4 hp</option>
				<option value="2" id="max">max hp</option>
			  </select>
            			  
            <select id="names3" class="dropdownmenu6">
				<option value="1"  selected>Character names</option>
				<option value="2">No names</option>
			  </select>

			<div class="generatorb">
			<span class="generatorbuttons">

				<input type="submit" value="" id="generate_level0_characters1a"/>
			</span>
				
			<span class="generatorbuttons">
				<input type="reset"  value="" id="reset__level0_characters1a"/>
		
				</span>
                
				</div>
		<p><span class="footnote">&#42;Rolling 4d6, and dropping the lowest die.</span></p>
            
			</div>
				</form>
                <br/>
                
            
            
                
                
        
                <br/>
                <br/>
                
                
            
    </section>
	
	<script>
          
        $("#generate_level0_characters1a").click(function(){
         
            $("#myForm3").attr('action', "zero_lv2/mcc_level0_" + $("#abilityScores3").val() + $("#hitPoints3").val() + $("#names3").val() +  ".php");
            // $("#myForm3").attr('action', "zero_lv2/mcc_level0_111.php");
        });
             
        
            
        
    </script>
            
	


</body>
</html>