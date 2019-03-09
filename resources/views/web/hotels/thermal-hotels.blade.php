@extends('web.layouts.app')

@section('home')
<article id="content" class="cols-c">
    <div>

      <form action="./" method="post" class="module-b">
        <fieldset>
          <nav class="pagination-a">
            {{$hotels->links()}}
          </nav>

        </fieldset>
      </form>
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
    </div>
    <aside>
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
              <option>Taj Hotel - Mumbai, India</option>
              <option>Seraton Hotel - Hanoi, Vietnam</option>
              <option>Taj Hotel - Mumbai, India</option>
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
            </span>							</p>
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
            </span>							</p>
          <p class="submit"><button type="submit">Proceed</button></p>
        </fieldset>
      </form>

    </aside>
  </article>

@endsection
