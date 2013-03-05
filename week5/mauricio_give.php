<?php
	header('Content-type: application/json');

	if(isset($_GET['request'])){

		if($_GET['request']=='info'){

			$info = array('General Info' => array('Mauricio Sanchez-Duque','3252 41th st. Apt 1A','Astoria,NY 11103', '3474764749','design@sanchezmauricio.com','http://www.sanchezmauricio.com'
												 ),
						  'Experience' => array( 'Company' =>'PARSONS THE NEW SCHOOL FOR DESIGN',
						  						'Teacher Assistant / Jan 2013 - Present' => array('Assist students and professor during the Interaction Core Design class',
						  																		  'Guide students through the design process, assessing concepts and debugging prototypes', 
						  																		  'Provide students with web and mobile technologies in their projects'
						  																		 ),
						  						
						  						'Companies' =>array('GLIDE-­INC','TIGERSPIKE','BUBBLEBEATS','QUADRANT2 INC','HABANA OUTPOST',
						  											'THE TWISTTOGETHER COMPANY','MARTEL DESIGN','PARSONS THE NEW SCHOOL FOR DESIGN'),
						  						'Freelance Designer / Jan 2009 - Present' => array('Interaction Design',
						  																		   'Product Development',
						  																		   'Branding',
						  																		   'Web Design',
						  																		   'UX/UI',
						  																		   'Design Consulting'
						  																		 ),
						  						'Company' => 'GLIDE-­INC',
						  						'Junior Industrial Designer / Jan 2008 - Feb 2009' => array('Product Design in furniture and lighting',
						  																					'Product Photography and Interior Design',
						  																					'Develop new products from conception to production'

						  															 						)
						  						),
						  	'Education' => array('Parsons The New School for Design - MfA Design and Technology - New York,US - 2012/2014(expected)',
						  						 'ICESI Univeristy - Industrial Design - Cali,Colombia - 2002/2008'),
						  	
						  	'Language' => 'Fluent in English and Spanish',
						  	
						  	'Acknowledgments and Publications' => array('Best Thesis Award - "Diseño y Punto" and ICESI University - Graduation Project REsearch - 2007',
						  												'Blime - Funded Kickstarter Campaign - 2012'
						  												),
						  	'Skills' => array( 'Sketching',
						  					   'Design',
						  					   'Research',
						  					   'Mobile',
						  					   'Development',
						  					   'UX/UI',
						  					   'Digital Fabrication',
						  					   'Design Management',
						  					   'Rhino 3D',
						  					   'Vray for Rhino',
						  					   'SolidWorks',
						  					   'Photoshop',
						  					   'Illustrator',
						  					   'HTML5',
						  					   'PHP',
						  					   'CSS',
						  					   'openFrameworks',
						  					   'Processing',
						  					   'Arduino',
						  					   'Quickbooks Pro'
						  					   )



						  
	);
			/*$char = '$\ / ; " ';*/
			
			echo json_encode($info);
		}
	}


?>
