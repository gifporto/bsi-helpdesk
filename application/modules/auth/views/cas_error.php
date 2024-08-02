<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
	
	$user = $this->cas->user();
	
?>
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="ace-icon fa fa-lock"></i>
												CAS
											</span>
											Error Authentication
										</h1>

										<hr />
										<h3 class="lighter smaller"><?php echo $message;?></h3>

										<div>
											<div class="space"></div>
											<h5 class="smaller">Berikut adalah aplikasi yang dapat diakses oleh user anda "<?php echo $user->userlogin;?>" :</h5>

											<ul class="list-unstyled spaced inline bigger-110 margin-15">
											<?php
												$attributes = $user->attributes;
												$attrArray = json_decode($attributes['attribute']);
												foreach( $attrArray as $id => $val ){
													echo '<li><i class="ace-icon fa fa-hand-o-right blue"></i>';
													echo '<a href="'. $val->url .'" target="_blank"> ' . $val->application . '</a>';
													echo '</li>';
												}
											?>
											</ul>
										</div>

										<hr />
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('auth/logout');?>" class="btn btn-danger">
												<i class="ace-icon fa fa-sign-out "></i>
												Logout
											</a>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
