<!DOCTYPE html>
<html lang="en-US">
  <head>
    @include('navigation.CssRelation')

	
  </head>  
  
  <body class="size-1140">
  	
    <HEADER> 
   
    <!-- Top Navigation -->
    @include('navigation.NavBar')
    
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      @if(session()->has('message'))
         <center><h1 class="alert alert-success" style="background-color: #00FF00;">{{session()->get('message')}}</h1></center>
      @endif

      <section class="section" style="background-color: #b3b3ff">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            <div class="item">
              <div class="s-12 center">
                <img src="img/01-boxed_1.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <!--<p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">Prospera is the New Amazing HTML5 Template</p>
                      <p class="text-white text-size-16 margin-bottom-40">Duis autem vel eum iriure dolor in hendrerit in vulputate velit<br> esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>  
                    --></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/Boltnut.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <!--<p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">Prospera is the New Amazing HTML5 Template</p>
                      <p class="text-white text-size-16 margin-bottom-40">Duis autem vel eum iriure dolor in hendrerit in vulputate velit<br> esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>  
                    --></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/Machined_res_1.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <!--<p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">Prospera is the New Amazing HTML5 Template</p>
                      <p class="text-white text-size-16 margin-bottom-40">Duis autem vel eum iriure dolor in hendrerit in vulputate velit<br> esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>  
                    --></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/IMG_4796_1_resized.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <!--<p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">With Fully Responsive Components</p>
                      <p class="text-white text-size-16 margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>    
                    --></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="s-12 center">
                <img src="img/croped_1.jpg" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <!--<p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">With Fully Responsive Components</p>
                      <p class="text-white text-size-16 margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>    
                    --></div>                  
                  </div>
                </div>
              </div>
            </div>
            
            </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/IMG_4819.jpg" alt="" >
              <h2 class="text-thin">More Products</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="{{route('gallery')}}">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/IMG_4788.jpg" alt="">
              <h2 class="text-thin">About us</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="{{route('gallery')}}">Read more</a>                
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/IMG_4838.jpg" alt="">
              <h2 class="text-thin">Reach us at Any time.</h2>
              <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p> 
              <a class="text-more-info text-primary-hover" href="{{route('contact.index')}}">Read more</a>                
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      <section class="section_1 text-center" style="background-color: #b3b3ff">
        <div class="line">
          <div class="s-12 m-10 l-8 center" >
            <h3 class="headline text-thin text-s-size-30">We are Committed for the best Services.</h3>
            <blockquote class="margin-top-bottom-20">
              OUR MISSION IS TO BE THE BEST AT IDENTIFYING, QUALIFYING AND DELIVERING ENGINEERING WORKS AND SERVICES THAT ENHANCE OUR CLIENTS BOTTOM LINE
            </blockquote>
          </div>
        </div>  
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white" >
        <div class="full-width text-center">
          <img class="center margin-bottom-30" style="margin-top: -100px; width: 650px;" src="img/IMG_4886.jpg" alt="">
          <div class="line">
            <h2 class="headline text-thin text-s-size-30">Our <span class="text-primary">  Vision</span> </h2>
            <p class="text-size-20 text-s-size-16 text-thin">MITAL ENGINEERING WORKS was founded with the mission of continually improving the productivity of its Clients by integrating existing systems with Engineeering works and services, high quality services, and ongoing support. Building on the deep technical knowledge of our engineering staff, 
  we provide exceptional value for clients. By delivering excellent Engineering service and support with professional integrity, 
we develop successful business relationships through mutual trust and respect
</p>
            <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
            
          </div>  
        </div>  
      </section>
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Clients.</span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-05.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">Clients feedback</a></h3>
                        <p>they are highlly commited with their works.outstanding service.</p>
                        
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-03.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">Client's feedback</a></h3>
                        <p>Excelence service from the mitalEngineering works.</p>
                        
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item"> 
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">mr.mahesh parekh,reliance industry</a></h3>
                        <p>they are highly commited with the work and acuracy.they have done may task within stipulated time.</p>
                        
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-02.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">mrs.savitaji,IOCL</a></h3>
                        <p>service is tremendus.for them client is first. </p>
                        
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-01.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="/">engineering Company</a></h3>
                        <p>service Quality so high.professional staff.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="/"><img src="img/blog-06.jpg" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="/">ahilya engineering</a></h3>
                        <p>excilent works.like to work together.</p>
                        <a class="text-more-info text-primary-hover" href="/">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>    
      </section>
      
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
       @include('navigation.SocialTry')
      <!-- Main Footer -->
      @include('navigation.MainFooter')
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
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