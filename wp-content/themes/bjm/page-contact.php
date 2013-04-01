<?php 
/* 
	Template Name: Contact
*/
get_header(); ?>

<div class="map">
	<div class="container">
		<div class="row">
			<div class="span12">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/bing-map.jpg " alt="map">
			</div>
		</div>
		<div class="row">
			<div class="span9">
				<h3>933 College View Dr, Redding, CA 96003</h3>
			</div>
			<div class="span3">
				<h2>530.246.6000</h2>
			</div>
		</div>
	</div>
</div>

<div class="send-a-message boxy">
	<div class="container">
		<div class="row">
			<div class="span6">
				<h4>Send A Message</h4>
				<form class="form-horizontal">
				  <div class="control-group">
				    <label class="control-label" for="inputName">Name</label>
				    <div class="controls">
				      <input type="text" placeholder="">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputEmail">Email</label>
				    <div class="controls">
				      <input type="email">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputSubject">Subject</label>
				    <div class="controls">
				      <select>
							  <option>Prayer Request</option>
							  <option>Bill's Travel</option>
							  <option>Schedule</option>
							  <option>Website Feedback</option>
							  <option>Media Sales</option>
							  <option>General info or Comments</option>
							</select>
				    </div>
				  </div>
			</div>
			<div class="span6">
				<div class="control-group">
					<label class="control-label" for="inputMessage">Message</label>
					<div class="controls">
						<textarea name="" id="" cols="30" rows="5"></textarea>
					</div>
				</div>
				<button type="submit" class="btn pull-right">
					Submit
				</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div class="note">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h6>Please Note</h6>
				<p>We are not in a position to respond to requests for prophetic words, advice, counsel etc.</p>
				<p>Thank you for understanding our heart in this matter.</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
