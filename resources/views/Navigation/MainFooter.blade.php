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
<section class="section" style="background-color:#e6e6ff">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
             <!-- <h4 class="text-uppercase text-strong">Our Philosophy</h4>
              <p class="text-size-20"><em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt."</em><p>-->
                            
              <div class="line">
                <h4 class="text-uppercase text-strong margin-top-30">About Our Company</h4>
                <div class="margin">
                  <div class="s-12 m-12 l-4 margin-m-bottom">
                    <a class="image-hover-zoom" href="/"><img src="img/logo-free.png" alt=""></a>
                  </div>
                  <div class="s-12 m-12 l-8 margin-m-bottom">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                    <a class="text-more-info text-primary-hover" href="/">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Collumn 2	 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-2x">
              <h4 class="text-uppercase text-strong">Contact Us</h4>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-placepin text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Adress :</b> Plot No.992/1/20, GIDC Industrial Estate,</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				  &nbsp&nbsp&nbsp&nbspMakarpura, Vadodara-10,</br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				  &nbsp&nbsp&nbsp&nbspGujarata, India. </p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-mail text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>E-mail :</b> mital.engineering@gmail.com</a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-smartphone text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><b>Phone :</b>+91 99980 42119</p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-twitter text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11 margin-bottom-10">
                  <p><a href="/" class="text-primary-hover"><b>Twitter</b></a></p>
                </div>
              </div>
              <div class="line">
                <div class="s-1 m-1 l-1 text-center">
                  <i class="icon-facebook text-primary text-size-12"></i>
                </div>
                <div class="s-11 m-11 l-11">
                  <p><a href="/" class="text-primary-hover"><b>Facebook</b></a></p>
                </div>
              </div>
            </div>
            
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h4 class="text-uppercase text-strong">Leave a Message</h4>
              @if($errors->all())
              <div class="alert alert-danger">
                @foreach($errors->all as $error)
                  <li>you have some error</li>
                @endforeach
              </div>
              @endif
              
              <form class="customform " method="post"  action="{{route('msg.store')}}">
                @csrf
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-12">
                      <input name="name" class=" required name border-radius" placeholder="Your Name" title="Your Name" type="text" style=" font-size: 15px;" / required>
                    </div>
					<div class="s-12 m-12 l-6">
                      <input name="email" class="required email border-radius" placeholder="e-mail" title="Your e-mail" type="email" style=" font-size: 15px;"/ required>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="contact" class="required border-radius" onkeypress="return isNumberKey(event)" 
                      onpaste="return false" placeholder="Contact Number" title="Your Contacts" type="digit"  style=" font-size: 15px;"/ >
                    </div>
					         <div class="s-12 m-12 l-12">
                      <input name="CompanyName" class=" required name border-radius" placeholder="Company Name" title="Your Name" type="text" style=" font-size: 15px;" / required>
                    </div>
                  </div>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message border-radius" placeholder="message" rows="3" style=" font-size: 15px;" required></textarea>
                </div>
                <div class="s-12"><button class="submit-form button  border-radius text-white" style="background-color: #b3b3ff" type="submit"> Submit </button></div> 
              </form>
            </div>
          </div>
        </div>
      </section>