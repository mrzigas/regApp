<div class="container" style="width: 300px; text-align: center"><br><br><br><br>
        
        <h1>Registration</h1>
		
		<?php 
		
			$options = array(
			'input' => array(
				'class' => 'form-control'
			));
		
			echo $this->Form->create('User');
			
			
			echo $this->Form->input('User.username', array(
			'type' => 'text',
			'name' => 'data[User][username]'
			));
			echo $this->Form->input('User.password', array(
			'type' => 'password',
			'name' => 'data[User][password]'
			));
			
			echo $this->Form->input('User.password_confirmation', array(
			'type' => 'password',
			'name' => 'data[User][password_confirmation]'
			));
			
			
			
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
			echo $this->Form->input('Person.email_address', array(
			'type' => 'text',
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
			
			echo $this->Form->input('Country.name', array(
			'type' => 'text',
			'name' => 'data[Country][name]'
			));
			
			
			echo $this->Form->end('Register new user'); 
		
		
		?>
		
</div>