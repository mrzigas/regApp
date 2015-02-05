
		  
		  <h1>Register new participant</h1>
<br/>

			<?php 
		
				$options = array(
				'input' => array(
					'class' => 'form-control'
				));
		
				echo $this->Form->create('Person');
			
			?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Personal information</h3>
					</div>
					<div class="panel-body">
						
						<?php
							
							//Table Person
							echo $this->Form->input('Person.name', array(
							'type' => 'text',
							'name' => 'data[Person][name]'
							));
							echo $this->Form->input('Person.middle_name', array(
							'type' => 'text',
							'name' => 'data[Person][middle_name]'
							));
							echo $this->Form->input('Person.family_name', array(
							'type' => 'text',
							'name' => 'data[Person][family_name]'
							));
							echo $this->Form->input('Person.date_of_birth', array(
							'type' => 'date',
							'name' => 'data[Person][date_of_birth]'
							));
							
						?>
					
					</div>
				</div>
			
			
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Contact</h3>
					</div>
					<div class="panel-body">
						
						<?php
			
							echo $this->Form->input('Person.email_address', array(
							'type' => 'email',
							'name' => 'data[Person][email_address]'
							));
							echo $this->Form->input('Person.mobile_number', array(
							'type' => 'text',
							'name' => 'data[Person][mobile_number]'
							));
							echo $this->Form->input('Person.phone_number', array(
							'type' => 'text',
							'name' => 'data[Person][phone_number]'
							)); 
							
						?>
					
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Address</h3>
					</div>
					<div class="panel-body">
						
						<?php
			
							echo $this->Form->input('Address.street_address', array(
								'type' => 'text',
								'name' => 'data[Address][street_address]'
								));
								echo $this->Form->input('Address.city', array(
								'type' => 'text',
								'name' => 'data[Address][city]'
								));
								echo $this->Form->input('Address.postal_code', array(
								'type' => 'text',
								'name' => 'data[Address][postal_code]'
								));
								echo $this->Form->input('country.name', array(
								'type' => 'text',
								'name' => 'data[Country][name]'
								));
								
							echo $this->Form->end('Register');  
							
						?>
					
					</div>
				</div>
				
				
			
			
        
      
		
		<p>*New registered participant will recieve an e-mail with generated username and password for his account</p>
		