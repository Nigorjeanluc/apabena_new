@extends('layouts.main')

@section('title', 'Contact Us')

@section('content')
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Contact us <small>get in touch with us by filling form below</small></h2>
            <hr class="colorgraph">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>
                  <form action="opera/msg.php" method="post" role="form" class="contactForm">
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validation"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                          </div>
                          <div class="col-md-6 form-group">
                              <input type="tel" class="form-control" name="tel" id="tel" placeholder="Your Phone Number" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                          </div>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                          <div class="validation"></div>
                      </div>
                      
                      <div class="text-center"><button type="submit" name="yes" class="btn btn-theme btn-block btn-md">Send Message</button></div>
                  </form>
                  <hr class="colorgraph">
  
        </div>
        <div class="col-md-8 col-md-offset-2">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.8841286312635!2d30.067279929163753!3d-1.9378542595736874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6a0b7ad4aaf%3A0xf739721c41151fcb!2sAPABENA!5e0!3m2!1sen!2srw!4v1500896001571" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
      </div>
    </div>
  </section>
@endsection