
          <h1 class="page-header">Dashboard</h1>

          
              <h4>Personal information</h4>
				<div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th  colspan="2">
											PERSONAL INFORMATION
                                            </th>
                                        </tr>    
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Full name</th>
                                            <td><?php echo $person['person']['name'] . ' ' . $person['person']['middle_name'] . ' ' . $person['person']['family_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <td><?php echo $person['person']['gender'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Date of birth</th>
                                            <td> <?php echo $person['person']['date_of_birth'] ?> </td>
                                        </tr>
                                        <tr>
                                            <th>Phone number</th>
                                            <td> <?php echo $person['person']['phone_number'] ?> </td>
                                        </tr>
										<tr>
                                            <th>Mobile number</th>
                                            <td> <?php echo $person['person']['mobile_number'] ?> </td>
                                        </tr>
										<tr>
                                            <th>E-mail</th>
                                            <td> <?php echo $person['person']['email_address'] ?> </td>
                                        </tr>
                                    </tbody>
									<tfoot>
										<tr >
											<td colspan="2"><span class="text-muted">Edit information</span></td>
										</tr>
									</tfoot>
                                </table>
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Expenses</h4>
              <span class="text-muted">Edit expenses</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Events participation</h4>
              <span class="text-muted">Edit person's event's</span>
            </div>
			


