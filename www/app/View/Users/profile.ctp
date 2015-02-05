		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
		  <h1 class="page-header">Registrants</h1>

          
              
			<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Family name</th>
								<th>Birth date</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($persons as $person){ ?>
							<tr>
								<td> <?php echo $this->HTML->link($person['person']['name'], array('controller' => 'persons', 'action' => 'person_information', $person['person']['id'])); ?> </td>
								<td> <?php echo $person['person']['family_name'] ?></td>
								<td> <?php echo $person['person']['date_of_birth'] ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				<p><a class="btn btn-lg btn-success" href="create_new" role="button">Add new registrant</a> <a class="btn btn-lg btn-default" href="check_summary" role="button">Check summary</a></p>
			</div>
        </div>