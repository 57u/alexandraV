<?php
$area = 'experience';
include('inc/header.php');
?>





<div id="secondaryNavigation">
	<ul>
		<li><a href="#spa" data-bg-image="08">SPA</a></li>
		<li class="inabit"><a href="#fine-dining" data-bg-image="09">FINE DINING</a></li>
		<li><a href="#destinations" data-bg-image="10">DESTINATIONS</a></li>
	</ul>
</div>






<div id="pages">

	<div class="page" id="spa">
		<h1>SPA</h1>
		<p>
			We offer a full range of spa and wellbeing treatments.
			All our products have been formulated especially for us and are chemical free.<br/>
			Relax in the jacuzzi on the sun deck, work out in our deck gym before a swim in the seapool
			or try yoga at sunrise.
		</p>
		<a href="#" class="backToNav">BACK</a>
	</div>

	<div class="page" id="fine-dining">
		<h1>Fine Dining</h1>
		<p>
			Our Michelin trained chef can present menu options to suit your taste, however extravagant or simple,
			lavish or low calorie. Just ask. Special diets can be catered for and spa menus can be prepared.
		</p>
		<a href="#" class="backToNav">BACK</a>
	</div>

	<div class="page" id="destinations">
		<h1>Destinations</h1>
		<p>
			Our experienced Captain knows all the best spots from bustling ports to secret beaches.
			We will prepare detailed itineraries with must see’s and favourite haunts.
		</p>
		<a href="#" class="backToNav">BACK</a>
	</div>

</div>






<script>
$(function()
{

	// Hide all pages by default
	$('#pages .page').hide();
	$('#backToNav').hide();

	// Main links on this page
	$('#secondaryNavigation a').on('click', function(e)
	{
		e.preventDefault();
		var h = $(this).attr('href');
		var bgi = '/img/bg/' + $(this).data('bg-image') + '.jpg' ;
		$('#bg').css({'background':'url(' + bgi + ') no-repeat center center', 'background-size':'cover'}).fadeIn(1000);

		$('#secondaryNavigation').fadeOut(500);
		$('#pages .page').fadeOut(500);

		$('#pages .page' + h).delay(501).fadeIn(500);
		$('.backToNav').fadeIn(500);
		return false;
	});

	// Arrow, back to navigation...
	$('.backToNav').on('click', function(e)
	{
		e.preventDefault();
		$('#bg').fadeOut(1000);
		$('.backToNav').fadeOut(500);
		$('#pages .page').fadeOut(500);

		$('#secondaryNavigation').delay(500).fadeIn(750);
	});

});
</script>

<?php
include('inc/footer.php');
?>
