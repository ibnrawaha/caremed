@extends('layouts.app')

@section('title', 'HomePage')


@section('body')

<div class="homePage">
	
	<div class="header">
    	<div class="container">
    		<div class="row ">
    			<div class="col-md-6 colLeft">
    				<h2>Perfection is our goal</h2>
    				<p>We create minimalistic and qualitative medical and dentical products for every a grown marketplace.<br>Our team is based in Egypt, where we design, partially assemble and package all timepieces by hand.</p>
    				<a class="btn btn-primary" href="#About">Learn More</a>
    			</div>
    			<div class="col-md-6 colRight">
    				<a class="btn btn-primary" href="#dental">Dental Products</a>
    				<a class="btn btn-primary" href="#medical">Medical Products</a>
    				<a class="btn btn-primary" href="#Services">Services</a>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="impEvents clearfix">
    	<h3>Important Events</h3>
        <div class="eventBoxs clearfix">
            <div class="eventBox">
                <a href="#event">
                    <img src="{{ asset('images/event1.png') }}">
                    <h5>CFC Event 2018</h5>
                    <p>This is event one established in Cairo in the 5th of June 2018</p>
                </a>
            </div>
            <div class="eventBox">
                <a href="#event">
                    <img src="{{ asset('images/event2.png') }}">
                    <h5>Berlin Event 2017</h5>
                    <p>This is event two established in Germany in the 19th of Jan 2017 with a great attendance and audience</p>
                </a>
            </div>
            <div class="eventBox">
                <a href="#event">
                    <img src="{{ asset('images/event3.png') }}">
                    <h5>NewYork Event 2015</h5>
                    <p>This is event three established in USA to sell a new certified medicine</p>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="featuredProducts">
    	<h3>Featured Products</h3>
        <div class="fProducts">
            <div class="fProduct">
                <a href="#product">
                    <img src="{{ asset('images/fproduct1.png') }}">
                    <h5>XFT-120C+ AED Trainer</h5>
                    <p>It contains a good quality raw matrials</p>
                </a>
            </div>
            <div class="fProduct">
                <a href="#product">
                    <img src="{{ asset('images/fproduct2.png') }}">
                    <h5>Xhale Breath Monitor</h5>
                    <p>It contains a good quality raw matrials</p>
                </a>
            </div>
            <div class="fProduct">
                <a href="#product">
                    <img src="{{ asset('images/fproduct3.png') }}">
                    <h5>Medical device prototype-Plank</h5>
                    <p>It contains a good quality raw matrials</p>
                </a>
            </div>
        </div>
    </div>

    <div class="ourClients">
    	<h3>Our Clients</h3>
        <div class="clients">
            <img src="{{ asset('images/clients.png') }}">
        </div>
    </div>

</div>
    

@endsection
