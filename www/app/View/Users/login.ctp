<div class="container" style="width: 300px; text-align: center"><br><br><br><br>
	
	<h1>Please sign in</h1>
	
	<?php 
	
		echo $this->Form->create('User');
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		echo $this->Form->end('Login'); 
		
			echo $this->Session->flash();
	?>
		
		
    
</div>