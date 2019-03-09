@extends('web.layouts.app')

@section('home')
<article id="home">
				<figure class="image-c"><a href="./"><img src="temp/featured-a.jpg" alt="Featured" width="1260" height="754"></a> <figcaption>Need a luxury room for your holiday <span>Paris Hilton hotel</span> <span>$450  /  night</span></figcaption></figure>
				<form action="./" method="post" class="form-c">
					<fieldset>
						<legend>Book now</legend>
						<h3><span>01.</span> What?</h3>
						<ul class="check-c">
							<li><label for="fcaa"><input type="radio" id="fcaa" name="fca"> Hotels</label></li>
							<li><label for="fcab"><input type="radio" id="fcab" name="fca"> Flights</label></li>
							<li><label for="fcac"><input type="radio" id="fcac" name="fca"> Cars</label></li>
							<li><label for="fcad"><input type="radio" id="fcad" name="fca"> Rent car</label></li>
							<li><label for="fcae"><input type="radio" id="fcae" name="fca"> Cruise</label></li>
							<li><label for="fcaf"><input type="radio" id="fcaf" name="fca"> All</label></li>
						</ul>
						<h3><span>02.</span> Where?</h3>
						<p class="select-c">
							<label for="fcb">Location</label>
							<select id="fcb" name="fcb">
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
								<option>Seraton Hotel - Hanoi, Vietnam</option>
							</select>
						</p>
						<h3><span>03.</span> When?</h3>
						<p class="date-a">
							<span>
								<label for="fcc">Check in</label>
								<input type="text" id="fcc" name="fcc" required>
							</span>
							<span>
								<label for="fcd">Check Out</label>
								<input type="text" id="fcd" name="fcd" required>
							</span>
						</p>
						<h3><span>04.</span> Who?</h3>
						<p class="select-a">
							<span>
								<label for="fce">Rooms</label>
								<select id="fce" name="fce">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
							<span>
								<label for="fcf">Adults</label>
								<select id="fcf" name="fcf">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
							<span>
								<label for="fcg">Child</label>
								<select id="fcg" name="fcg">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
						</p>
						<p class="submit"><button type="submit">Proceed</button></p>
					</fieldset>
				</form>
			</article>
			<section id="content">
				<h2 class="header-a"><span>Sizin İçin Tatil Fırsatları</span></h2>
				<div class="double-b">
					<figure class="image-a"><a href="./"><img src="temp/465x201.gif" alt="Placeholder" width="465" height="201"> <span class="icon-a">-%25</span></a> <figcaption style="margin-top: -32px;">Paris Eurostar Breaks <span>Curabitur fringilla mauris interdum nec magna</span> <span>From $350</span></figcaption></figure>
					<figure class="image-d"><a href="./"><img src="temp/465x201(1).gif" alt="Placeholder" width="465" height="201"> <span class="icon-b">Gift</span></a> <figcaption style="margin-top: -50px;"><span>Travel to hongkong<div class="fit-a"></div><div class="fit-b"></div></span> urabitur fringilla mauris interdum nec magna tur fringilla mauris interdum nec magna tur fringilla mauris interdum log nec magna</figcaption></figure>
				</div>
				<div class="news-d">

						@foreach($hotels as $row)
							@php
								$image = str_replace('https://tatilsepeti.cubecdn.net/', '', $row->image);
							@endphp

							<article>
								<header>
									<figure><img src="{{'image-file/'.$image}}" alt="Placeholder" width="300" height="160"><div class="fit-a"></div></figure>
									<h3><a href="#">{{$row->hotel_name}}</a></h3>
									<p><span class="rating-a f">5/5</span> ( 20 Ratting )</p>
									<p class="scheme-i">{{$row->price}}<span>₺</span></p>
								</header>
								<footer>
									<p>{{$row->address}}</p>
								</footer>
							</article>
						@endforeach
				</div>
			</section>
@endsection
