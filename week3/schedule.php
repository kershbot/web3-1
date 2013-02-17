<?php 

		$week = array( 'Monday' => array(
										'Morning' => " I wake up at 7 am. I get ready for my Interaction Design core class 															which I TA, interestingly, it is in the same room I have Web 3. This 														goes from 9 to 12 pm",
										'Afternoon' => " Go to school and do some reading for major studio - usually due 															Wednesday. All this while having lunch previously cooked at home",
										'Night' => " Mobile Media starts at 7 pm, by the time class starts and since I don't 													have my body subjected to caffeine, I start to crash, but with the 															enthusiasm that characterizes me, I try to immerse myself in the concepts          												   	of UX/UI"
		
										),
										
					   'Tuesday' => array(
					   					 'Morning' => " I wake up definitely after 9 am. After having been out for the whole 														day on Monday, I start getting ready to the next assignments, which is 														finish the reading for Major Studio and get initiated with Web3",
					   					 'Afternoon' => " After having lunch around 1 or 2 pm. I head to school to complete my 														assignments, most of the time it requires to meet a group or work in a 														project",
					   					 'Night' => " Most of the time I head back home around 7 or 8 pm. Cook dinner and try 													to finish another assignment, but this does not usually happen, I probably 													watch TV"
					   					    					 
					   				    ),
					   'Wednesday' => array(
					   					 'Morning' => " At 8 am, I'm posting on the Major Studio 2 my reading reaction, make 														lunch and head to school",
					   					 'Afternoon' => " Major Studio starts at 2pm. The always lovely Melanie Crean starts 														discussing anything interesting that happened during the weekend, 															reading groups proceed to make a presentation and we finish the 															discussion",
					   					 'Night' => "I head back home after class and finish my paper for Interactive Design 													for museums, if I have a chance, I finish my Web 3 assignment" 
					   
					   
					   					),
					   				    
					  'Thursday' => array( 
					  					'Morning' => " Wake up at 7 am. Finish my paper for IDFM. Proceed to go to the next 														museum, get the respective tour have a discussion about any particular 														interaction installation in the museum and head back to school. After 														that I'm probably finishing my Web 3 assignment",
					  					'Afternoon' => "Finish any assignment possible, and getting mentally prepared for Web 														3",
					  					'Night'=> " Web 3 in on the line, we all get ready to be mind blown, Like this 																associative array"
					  					
					   						
					  					),
					  					
					  'Friday' => array(
					  					'Morning' => " This is an interesting day, we Usually have presentations for major 															studio, so I'll get everything wrap up for that and head to school",
					  					'Afternoon' => " Class finishes at 2:50 pm, so 1 hour break before Sensemakers, this 														is another class that blows my mind, the amount stuff that is involved 														when executing project is pretty high, so I get mentally prepared",
					  					'Night' => " Usually I would go have 2 or 3 beers and then head home early at night, 													but tonight is a different night. I'm doing php!!!"
					  					
					  					),		
		
					  'Saturday' => array( 
					  					 'Morning' => " I'm gonna wake up at 11 am. This semester is ridiculously busy. Cook a 														meal at 12, relax for a bit ",
					  					 'Afternoon' => " Clean the apartment, head to a museum or work on a paper related to 														IDFM",
					  					 'Night' => " Definitely go out, does not happen every night but at least for this 															week has to happen."
					  					 
					  					 ),
					  					 
					  'Sunday' => array(
					  					'Morning' => " Definitely get back on the line of work, waking up at 9 am, and go buy 													groceries",
					  					'Afternoon' => "Work on some assignment for next week. And start cooking dinner ",
					  					'Night' => " Eat dinner and go to bed early"
					  					
					  					)
		);
		
		/*$days = array('day1' => 'Monday',
					  'day2' => 'Tuesday',
					  'day3' => 'Wednesday',
					  'day4' => 'Thursday',
					  'day5' => 'Friday',
					  
					  );
		
		$moments = array('1' => 'Morning',
						 '2' => 'Afternoon',
						 '3' => 'Night'
						 );
		
		
		
		print_r($week);
		echo '<br> <br>';
		
		print_r($week['Monday']['Morning']);
		
		foreach ($week['Monday'] as $item){
			
			echo $item. "<br>";
		}*/
		
		


?>

<html>
	<head>
	<title> Schedule </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<style>
        a{
            color:#fff;
            text-decoration:none;
        }
        a:hover{
            text-decoration:none;
        }
    </style>
	
	</head>
	<body>
	 	<p> <?php /*print_r($week['Monday']['Morning']);
		
		foreach ($week['Monday']['Morning'] as $item){
			
			echo $item. "<br>";
		}*/ ?>
		</p>
		<div class="section black" id="section1">
				<h1> Monday </h1>
				
				<p><?php foreach($week['Monday'] as $key => $value){
				echo $key.'<br>';
				
			}
			/*echo $week['Monday']['Morning'];*/
			
				/*print_r($week ['Monday']);
				
				foreach ($week['Monday']['Night'] as $item){
					
					echo $item."<br>";
				}*/
				
				?>
				</p>
				
				<p class="right"> <?php foreach ($week['Monday'] as $key => $value){
					echo $value."<br>";
				}
				
				?>
				</p>
				<ul class="nav">
					<li> Monday</li>
					<li> <a href= "#section2" > Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> <a href= "#section4" > Thursday </a></li>
					<li> <a href= "#section5" > Friday </a></li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> <a href= "#section7" > Sunday </a></li>
				</ul>
					
		</div>
		
		<div class="section white" id="section2">
				<h1>Tuesday</h1>
				
				<p> <?php foreach($week['Tuesday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Tuesday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
				<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> <a href= "#section4" > Thursday </a></li>
					<li> <a href= "#section5" > Friday </a></li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> <a href= "#section7" > Sunday </a></li>
				</ul>
				
		</div>
		<div class="section black" id="section3">
				<h1>Wednesday</h1>
				
				<p> <?php foreach($week['Wednesday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Wednesday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
					<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> <a href= "#section2" >Tuesday </a></li>
					<li> Wednesday </li>
					<li> <a href= "#section4"> Thursday </a> </li>
					<li> <a href= "#section5" > Friday </a></li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> <a href= "#section7" > Sunday </a></li>
				</ul>
		</div>
		<div class="section white" id="section4">
				<h1>Thursday</h1>
				
				<p> <?php foreach($week['Thursday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Thursday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
				<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> <a href= "#section2" >Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> Thursday </li>
					<li> <a href= "#section5" > Friday </a></li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> <a href= "#section7" > Sunday </a></li>
				</ul>
				
		</div>
		<div class="section black" id="section5">
			<h1>Friday</h1>
				
				<p> <?php foreach($week['Friday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Friday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
					<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> <a href= "#section2" >Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> <a href= "section4" >Thursday</a></li>
					<li>  Friday </li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> <a href= "#section7" > Sunday </a></li>
					</ul>
		</div>
		<div class="section white" id="section6">
				<h1>Saturday</h1>
				
				<p> <?php foreach($week['Saturday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Saturday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
					<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> <a href= "#section2" >Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> <a href= "#section4" > Thursday</a></li>
					<li> <a href= "#section5" > Friday </a></li>
					<li>  Saturday </li>
					<li> <a href= "#section7" > Sunday </a></li>
					</ul>
		</div>
		<div class="section black" id="section7">
			<h1>Sunday</h1>
				
				<p> <?php foreach($week['Sunday'] as $key => $value){
					echo $key.'<br>';
					
				}
				?>
				</p>
				
				<p> <?php foreach($week['Sunday'] as $key => $value){
					echo $value.'<br>';
				}
				?>
				</p>
					<ul class="nav">
					<li> <a href= "#section1" > Monday </a></li>
					<li> <a href= "#section2" >Tuesday </a></li>
					<li> <a href= "#section3" > Wednesday </a></li>
					<li> <a href= "#section4" > Thursday</a></li>
					<li> <a href= "#section5" > Friday </a></li>
					<li> <a href= "#section6" > Saturday </a></li>
					<li> Sunday </li>
					</ul>
		</div>
		
		 <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>		
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    /*
                    if you want to use one of the easing effects:
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });
        </script>
		
		
	
	</body>	

</html>

