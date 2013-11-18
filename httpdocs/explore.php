<?php
$area = 'explore';
include('inc/header.php');
?>



<div id="exploreSlides">

	<a class="arrow arrow-left" href="#"></a>
	<a class="arrow arrow-right" href="#"></a>

	<div class="swiper-container">
		<div class="swiper-wrapper">


			<div class="swiper-slide" style="background:url('/img/bg/03.jpg') no-repeat center bottom;background-size:cover;">
				<div class="content-slide page">
					<h1>The Yacht</h1>
					<p>"Alexandra V from Princess Yachts is under new ownership. Quite simply, the concept is to
						make her the best yacht available for charter in the under 100’ category. The best style,
						quality, service and experience."<br/>
						Charter enquiries are now invited for the Western Mediterranean season 2014 and the Caribbean season 2014</p>
				</div>
			</div>



			<div class="swiper-slide" style="background:url('/img/bg/04.jpg') no-repeat center bottom;background-size:cover;">
				<div class="content-slide page">
					<h1>Spec:</h1>
					<ul>
						<li>LOA: 96' (29.4m)</li>
						<li>Built: Princess Yachts 2009/2014</li>
						<li>New interior: Christian's &amp; Hennie</li>
						<li>Cruising speed: 22 knots</li>
						<li>Guests: 8</li>
						<li>Crew: 6</li>
						<li>Accommodation:</li>
						<li>4 luxuriously appointed cabins Master suite</li>
						<li>2 VIP doubles</li>
						<li>1 Twin with pullman</li>
					</ul>
				</div>
			</div>



			<div class="swiper-slide" style="background:url('/img/bg/05.jpg') no-repeat center bottom;background-size:cover;">
				<div class="content-slide page">
					<h1>Special Features</h1>
					<ul>
						<li>Jacuzzi & spa</li>
						<li>Beach club</li>
						<li>Deck gym</li>
						<li>Beach BBQ marquee</li>
						<li>Tepannyaki</li>
						<li>Michelin trained chef</li>
						<li>Special diets & spa nutrition</li>
						<li>First class handpicked crew</li>
						<li>Cinema</li>
						<li>Games, music & books</li>
						<li>Family friendly</li>
						<li>Guest goody bag</li>
					</ul>
				</div>
			</div>



			<div class="swiper-slide" style="background:url('/img/bg/06.jpg') no-repeat center bottom;background-size:cover;">
				<div class="content-slide page">
					<h1>Tenders &amp; Toys</h1>
					<ul>
						<li>Fjord limousine tender 36’ (11m)</li>
						<li>Williams sports tender</li>
						<li>Yamaha waverunner 1800 VXR</li>
						<li>Seapool</li>
						<li>Seabobs</li>
						<li>Paddleboards & wakeboards</li>
						<li>Kayaks</li>
						<li>Sailing catamaran</li>
						<li>Fishing gear</li>
						<li>Snorkelling gear</li>
						<li>Inflatables</li>
						<li>Mountain bikes</li>
						<li>Robstep</li>
					</ul>
				</div>
			</div>



			<div class="swiper-slide" style="background:url('/img/bg/07.jpg') no-repeat center bottom;background-size:cover;">
				<div class="content-slide page">
					<h1>Special Services</h1>
					<ul>
						<li>Private jet transfers</li>
						<li>Childcare</li>
						<li>Rendezvous diving</li>
						<li>Events & private parties</li>
						<li>Corporate events management</li>
						<li>On board concierge</li>
						<li>Guest photobook service</li>
					</ul>
				</div>
			</div>





		</div>
	</div>

	<div class="pagination"></div>

</div>









<style>
	#exploreSlides
	{
		position:absolute;
		top:0;
		left:0;
		width: 100%;
		height: 100%;
		background: #111;
	}
	.swiper-wrapper,
	.swiper-container,
	.swiper-slide
	{
		width:100%;
		height:100% !important;

	}

	.arrow
	{
		position: absolute;
		bottom:50px;
		padding:15px;
		z-index:10000;
		height: 70px;
		width: 35px;
	}
	.arrow:focus
	{
		outline:none;
	}
	.arrow-left
	{
		left:30px;
		background:url(/img/back.png) no-repeat center top;
		background-size:contain;
	}
	.arrow-right
	{
		right:30px;
		background:url(/img/forward.png) no-repeat center bottom;
		background-size:contain;
	}

	.pagination
	{
		position: absolute;
		left: 0;
		bottom:70px;
		width: 100%;
		text-align: center;
		z-index:20000;
		margin:0;
	}
	.swiper-pagination-switch
	{
		display: inline-block;
		width: 15px;
		height: 15px;
		border-radius: 10px;
		margin: 0 12px;
		cursor: pointer;

		background:#1a1919;
	}
	.swiper-active-switch
	{
		background:#6a6969;
	}

	.content-slide
	{
		margin:200px 0 0 50px;
	}

</style>









<script>
$(function()
{

	var mySwiper = new Swiper('.swiper-container', {
		pagination: '.pagination',
		loop:true,
		grabCursor: true,
		paginationClickable: true,
		calculateHeight: false
	});

	$('.arrow-left').on('click', function(e){
		e.preventDefault()
		mySwiper.swipePrev()
	});

	$('.arrow-right').on('click', function(e){
		e.preventDefault()
		mySwiper.swipeNext()
	});

	// Hack to change active nav color if slide has dark bg.
	// ^- because we eye up the image, and set an index here...
	mySwiper.wrapperTransitionEnd(function()
	{
		if ( mySwiper.activeLoopIndex == 1 )
		{
			$('#primaryNavigation').addClass('lighten');
		}
		else
		{
			$('#primaryNavigation').removeClass('lighten');
		}
	},true);


});
</script>





<?php
include('inc/footer.php');
?>
