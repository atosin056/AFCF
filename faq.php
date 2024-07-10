<html>

<head>

	<title>AFCF - Empowering farmers with finance while bridging the gap for agricultural success.</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

<?php

include 'loader.php';

include 'navbar.php';

?>

<div class="header">
	
	<div style="width: 100% !important;">
		
		<div style="display: flex;justify-content: center;">
		
			<div style="width: 100%;">

				<div style="background-color: transparent;width: 100%;">

					<h4 style="text-align: center;">Frequently Asked Questions</h4>

				</div>

				<div style="display: flex;justify-content: center;">

				<div style="width: 70% !important;display: flex;justify-content: flex-start; background: transparent;">
						
					<div style="width: 100%;">

						<!-- Farmers -->

						<div>

							<h5>For Farmers</h5>

						</div>	

						<br>

						<div class="couse-catalogs" onclick="toggleFAQ(this)">
	                        
	                       How do I Register?
	                        
	                        <div class="faq-answer" style="display: none;">
	                            
	                            Click the register button and fill in your details.
	                        
	                        </div>
	                
		                </div>
		                
		                <br>
		                
		                <div class="couse-catalogs" onclick="toggleFAQ(this)">
		                    
		                    Do I need to submit my documents before signing up?
		                    
		                    <div class="faq-answer" style="display: none;">
		                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
		                    
		                    </div>
		            
		                </div>
		            
		                <br>
		                
		                <div class="couse-catalogs" onclick="toggleFAQ(this)">
		                    
		                   Do I need to pay any fee to get started?
		                    
		                    <div class="faq-answer" style="display: none;">
		                        
		                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
		                    
		                    </div>
		                
		                </div>
		                
		                <br>
		                
		                <div class="couse-catalogs" onclick="toggleFAQ(this)">
		                
		                    Is there a learning curve?
		                
		                    <div class="faq-answer" style="display: none;">
		                    
		                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
		                    
		                    </div>
		                    
		                </div>
		            
		                <br>
		                
		                <div class="couse-catalogs" onclick="toggleFAQ(this)">
		                    
		                    Can I assign a department admin?
		                    
		                    <div class="faq-answer" style="display: none;">
		                        
		                        Yes, you can assign department admins in McLearnms.
		                    
		                    </div>
				
						</div>

						<script type="text/javascript">
							
							function toggleFAQ(element) {

				                var answer = element.querySelector('.faq-answer');

				                if (answer.style.display === "none") {

				                    answer.style.display = "block";

				                }

				                else {

				                    answer.style.display = "none";

				                }

				            }

						</script>

						<!-- For StakeHolders -->

						<div style="margin-top: 100px;">

							<div>

								<h5>For Stakeholders</h5>

							</div>	

							<br>

							<div class="couse-catalogs" onclick="toggleFAQ(this)">
		                        
		                       How do I Register?
		                        
		                        <div class="faq-answer" style="display: none;">
		                            
		                            Click the register button and fill in your details.
		                        
		                        </div>
		                
			                </div>
			                
			                <br>
			                
			                <div class="couse-catalogs" onclick="toggleFAQ(this)">
			                    
			                    Do I need to submit my documents before signing up?
			                    
			                    <div class="faq-answer" style="display: none;">
			                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			                    
			                    </div>
			            
			                </div>
			            
			                <br>
			                
			                <div class="couse-catalogs" onclick="toggleFAQ(this)">
			                    
			                   Do I need to pay any fee to get started?
			                    
			                    <div class="faq-answer" style="display: none;">
			                        
			                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			                    
			                    </div>
			                
			                </div>
			                
			                <br>
			                
			                <div class="couse-catalogs" onclick="toggleFAQ(this)">
			                
			                    Is there a learning curve?
			                
			                    <div class="faq-answer" style="display: none;">
			                    
			                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			                    
			                    </div>
			                    
			                </div>
			            
			                <br>
			                
			                <div class="couse-catalogs" onclick="toggleFAQ(this)">
			                    
			                    Can I assign a department admin?
			                    
			                    <div class="faq-answer" style="display: none;">
			                        
			                        Yes, you can assign department admins in McLearnms.
			                    
			                    </div>
					
							</div>

						</div>
			
					</div>

				</div>

			</div>

		</div>

	</div>

</div>

</div>

<?php

include 'footer.php';

?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>

</html>