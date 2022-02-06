@extends('frontend.welcome')
@section('content')
<header>
    <div class="header_wrapper sub_wrapper">
      <div>
        <h1>Here we have a two line display intro.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
      <a class="link_arrow link_thin_underline" href="#">Link & Arrow &#8250;</a>
      <div class="flex_between">
        <a class="nav_link" href="">1. Innovation Partner</a>
        <a class="nav_link" href="">2. Top Class Team</a>
        <a class="nav_link" href="">3. Corporate Solutions</a>
      </div>
    </div>
  </header>
  <section class="wrapper center sub_wrapper">
    <h2>Here we have a two line display headline</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <button type="button"><a href="">Button Text</a></button>
    <div class="tab">
      <button type="button">Active Tab</button>
      <button type="button">Hovered Tab</button>
      <button type="button">Inactive Tab</button>
    </div>
  </section>
  <section>
    <div class="wrapper flex_between">
      <article class="w-30">
        <img src="./asset/images/image1.jpg" alt="wide container image1">
        <h3>This is a wide container title stretching two lines.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        <a class="link_arrow" href="#">Link & Arrow &#8250;</a>
      </article>
      <article class="w-30">
        <img src="./asset/images/image2.jpg" alt="wide container image2">
        <h3>This is a wide container title stretching two lines.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        <a class="link_arrow" href="#">Link & Arrow &#8250;</a>
      </article>
      <article class="w-30">
        <img src="./asset/images/image3.jpg" alt="wide container image3">
        <h3>This is a wide container title stretching two lines.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
        <a class="link_arrow" href="#">Link & Arrow &#8250;</a>
      </article>
    </div>
  </section>
  <section class="primary_bg">
    <div class="wrapper flex_between my-40">
      <div class="w-50">
        <img src="./asset/images/image4.jpg" alt="two line display image4">
      </div>
      <div class="w-50">
        <h2>Here we have a two line display.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <a class="link_arrow text_white" href="#">Link & Arrow &#8250;</a>
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
@endsection