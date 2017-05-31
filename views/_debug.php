<!-- @TODO - Add fallback support for IE9 and less
<!--[if lte IE 9]>

<![endif]-->



<!-- Page header for flexbox example -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Flexbox Thumbnail Cards
      </h1>
		</div>
	</div>
	<!-- /.row -->
</div>
<br>

<div class="container">
	<div class="flex-row row">
		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">1</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>
		
		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">2</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>


		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">3</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>		

		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">4</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>

		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">5</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>
		
		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<div class="text-right"> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
					<div class="table-number text-center">6/7</div>					
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>


	</div>
	<!-- /.flex-row  -->
</div>
<!-- /.container  -->



<footer style="padding: 20px; border-top: 1px solid #eee; margin-top: 25px;">
	<div class="container">
	<div class="text-muted text-center">
		Copyright © 2017 i9
	</div>
		</div>
</footer>



<!-- DEMO STYLES and NOTES BELOW -->
<style type="text/css">
body {
		background-color: rgba(0, 0, 0, 0.03);
		padding-top: 15px;
	  font-family: 'Lato', sans-serif;
	}

/* make gutter sizes consistent */
.flex-row  {
    padding-left: 15px;
    padding-right: 15px;
}

/* 
  Extra Small Devices, Phones { .col-xs-$ } 
    ~ 480px to 767px ~

  Extra Small Devices, Phones { .col-sm-$ } 
    ~ 768px to 991px ~

  Extra Small Devices, Phones { .col-md-$ } 
    ~ 992 to 1200px ~

  Extra Small Devices, Phones { .col-lg-$ } 
    ~ 1201px up ~
 */
	
/* Extra Media Query Below for Retina Iphones and Smaller */
@media only screen and (max-width : 480px){
	.flex-row > [class*='col-'] {
			width: 100%;
	}
	.flex-row  {
    padding-left: 0px;
    padding-right: 0px;
  }
}
</style>