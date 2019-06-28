<!DOCTYPE html>
<html lang="en-US">
  <head>
    @include('navigation.CssRelation')

    <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
  </head>   
  
  <body class="size-1140">
  	
    <!-- HEADER -->
    
      <!-- Top Bar 
      @include('navigation.Topbar')-->

      <!-- Top Navigation -->
    @include('navigation.NavBar')
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section text-center" style="background-color: #1E90FF">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Contact US</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              
              <!-- Company Information -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">Company Information</h2>
                <div class="float-left">
                  <i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0">Company Address</h4>
                  <p>Plot No.992/1/20, GIDC Industrial Estate,<br>
					Makarpura, Vadodara-390010,<br>
                     
                     Gujarat,India.
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0" >E-mail</h4>
                  <p>mital.engineering@gmail.com<br>
                     &nbsp
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80">
                  <h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
                  <p>+91 99980 42119<br>
                     
                  </p>             
                </div>
              </div>
              
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">Contact Us</h2>
                <form class="customform" action="{{route('contact.store')}}" method="post">
                  @csrf
                  <div class="s-12"> 
                    <input name="name" class="subject border-radius" placeholder="Name" title="Subject" type="text" style=" font-size: 15px;"/ required>
                  </div>
                  <div class="s-12">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" style=" font-size: 15px;"/ required>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="contact" class="name border-radius"  onkeypress="return isNumberKey(event)"placeholder="Contact Number" title="Your name" onpaste="return false" type="text" style=" font-size: 15px;"/ required>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="CompanyName" class="subject border-radius" placeholder="Company name" title="company" type="text" style=" font-size: 15px;"/ required>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3" style=" font-size: 15px;"></textarea>
                  </div>
                  <div class="s-12 m-12 l-4"><button class="submit-form button background-primary border-radius text-white" type="submit">Submit</button></div> 
                </form>
              </div>  
            </div>  
          </div> 
        </div> 
      </article>
      <!-- Social -->
       @include('navigation.SocialTry')
      <!-- MAP -->
      <div class="s-12 center">  	  
     
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.4561332890275!2d73.19328031442849!3d22.26070494995762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc42b00000001%3A0x3f26403e828d3a43!2sMital+engineering+Works!5e0!3m2!1sen!2sin!4v1540199160547" width="100%" height="450" frameborder="0" style="border:0" ></iframe>
      </div>
    </main>
    
    <!--FOOTER -->
    
     <!-- Bottom Footer -->
      <section class="padding background-dark">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2018, Mittal Engineering works</p>
           <!-- <p class="text-size-12">Pramarth softech.Pvt.Ltd.</p>-->
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Pramarth Softech Pvt.Ltd.</a>
          </div>
        </div>
      </section>
    </footer> 
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>