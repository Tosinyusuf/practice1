{{-- @extends('frontend.welcome')
@section('content') --}}
<header>
    <div class="header_wrapper sub_wrapper">
      <div>
        <h1>{{$frontimgs->title}}</h1>
        <p>{{$frontimgs->subtitle}}</p>
      </div>
      <a class="link_arrow link_thin_underline" href="#">{{$frontimgs->linktitle}} &#8250;</a>
      <div class="flex_between">
        <a class="nav_link" href="">1. Innovation Partner</a>
        <a class="nav_link" href="">2. Top Class Team</a>
        <a class="nav_link" href="">3. Corporate Solutions</a>
      </div>
    </div>
  </header>
  <section class="wrapper center sub_wrapper">
    <h2>{{$sections->title}}</h2>
    <p>{{$sections->subtitle}}</p>
    <button type="button"><a href="">{{$sections->link}}</a></button>
    <div class="tab">
      <button type="button">Active Tab</button>
      <button type="button">Hovered Tab</button>
      <button type="button">Inactive Tab</button>
    </div>
  </section>
  <section>
    <div class="wrapper flex_between">
    @foreach ($section3 as $section)
        <article class="w-30">
        <img src="{{ asset('public/assets/images/1644124923-.jpg') }}" alt="no img">
        <h3>{{$section->imagetitle}}</h3>
        <p>{{$section->imagetext}}</p>
        <a class="link_arrow" href="#">{{$section->imagelink}} &#8250;</a>
      </article>
    @endforeach
    </div>
  </section>
  <section class="primary_bg">
    <div class="wrapper flex_between my-40">
      <div class="w-50">
        <img src="{{ asset('assets/images') }}/{{$articles->image }}" alt="two line display image4">
      </div>
      <div class="w-50">
        <h2>{{$articles->title}}</h2>
        <p>{{$articles->subtitle }} </p>
        <a class="link_arrow text_white" href="#">{{$articles->link}} &#8250;</a>
      </div>
    </div>
  </section>
  <section class="wrapper sub_wrapper">
    <div class="center">
      <h2>A message followed by a way to get in touch</h2>
    <address>
      <h3>+ 44 (0) 1234 567 890</h3>
    </address>
    </div>
    <form>
      <label for="fname">Email Address</label>
      <input type="text" id="emailAddress" name="emailAddress" placeholder="Email Address"> <br>
      <label for="fname">Your Name</label>
      <input type="text" id="yourName" name="yourName" placeholder="Your Name"> <br>
      <label for="fname">Choose a topic</label>
      <select name="topic" id="topic">
        <option style="color: red;" value="Please select">Please select</option>
        <option value="topic1">Topic1</option>
        <option value="topic2">Topic2</option>
        <option value="topic3">Topic3</option>
        <option value="topic4">Topic4</option>
      </select> <br>
      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter a message...">
      </textarea>
      <div class="center">
        <button type="button"><a href="">Button Text</a></button>
      </div>
      
    </form>
  </section>
{{-- @endsection --}}