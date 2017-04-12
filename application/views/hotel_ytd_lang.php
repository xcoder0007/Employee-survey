<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('header'); ?>
<style type="text/css">
	@media print{@page {size: landscape}}
</style>
</head>
<body>
  <div id="envelope">
  	<a class="back-link" href="/reports">Back</a>
    <a class="exit-link" href="/auth/logout">Exit</a>
  </div>
<div id="wrapper">
	<div id="page-wrapper">
	<div class="container">
		<div class="rest-selector col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<fieldset>
			<legend class="title-table">YTD language consolidation  ( <?php echo $meal[0]->name; ?> )</legend>
			<?php $this->load->view('hotel_ytd_form'); ?>
			</fieldset>
		</div>
		
		<?php if (!isset($posting)): ?>
			<div class="summarial col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="title-table"></div>
			<table class="report-view">
			<thead>
				<tr>
					<th></th>
					<th>Jan</th>
					<th>Feb</th>
					<th>Mar</th>
					<th>Apr</th>
					<th>May</th>
					<th>Jun</th>
					<th>Jul</th>
					<th>Aug</th>
					<th>Sep</th>
					<th>Oct</th>
					<th>Nov</th>
					<th>Dec</th>
					<th>YTD</th>

				</tr>
			</thead>
			<tbody>
			<?php foreach ($scores as $key => $score): ?>
				<tr>
					<td><?php echo $key ?></td>
					<?php foreach ($score as $month => $value): ?>
					<?php
						if ($value >= 80) {
							$score_class = "green";
						} elseif ($value >= 70) {
							$score_class = "yellow";
						} else {
							$score_class = "red";
						} ?>
						<td><span class="<?php echo $score_class ?>"><i></i><?php echo $value ?> %</span></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
			</div>
		<?php endif; ?>

		</div>
	</div>
	</div>
</div>
</body>
</html>