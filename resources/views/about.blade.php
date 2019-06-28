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
  	<!-- Top Bar 
      @include('navigation.Topbar');-->
      
      <!-- Top Navigation -->
    @include('navigation.NavBar')
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section text-center" style="background-color: #1E90FF">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">About us</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <br>
            <h2 class="text-size-30">About Mital engineering Works</h2>
            <p>
            Mital Engineering Works was established in 1999 . Since inception company has grown manifold from Produces machined parts by programming, setting up, and operating a computer numerical control (CNC) machine;milling job work maintaining quality and safety standards keeping records maintaining equipment and supplies. 
            We are acknowledged for providing trustworthy Job Work .These services are provided with help of our advanced machines that include Milling machine, CNC machine, and DRO milling machine .

            </p>           
            <hr>
            <h2 class="text-size-30">Mission and Vision</h2>
              <h4>Propelling Technology, Prospering Life.</h4>
              <ul>
                <li>Our purpose leads to the advancement of technology in machine tool arena and thus contributing the comfort and enhancement to the existence of human life.</li>
                <br>
                <li>Seeks always to be considered as the major contributor to the society economically and culturally.</li>
                <br>
                <li>Dedicated to the development of technology through scientific excellence and innovations.</li>
                <br>
                <li>Makes life merry to all those who are connected with us.</li><br>
                <li>To provide perfect working environment and seeks to be the most preferred organization to work with.</li><br>
                <li>To patronize the technological education and awareness among the interested.</li>

              </ul>
            
            <hr>
            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-6 margin-m-bottom-30">
                  <h2>Message from CEO</h2>
                  <p>
                  My Dear Friends,
                  Being a part of Indian manufacturing fraternity we are committed to extend the best of our efforts for the development of Nation economically as well technologically.
                  I would like to share my insights on an emerging scenario of our economy and  industry. Honestly, I feel our machine tool industry is poised at an inflection point from where we foresee a sharp recovery curve, happy days are re-knocking our doors.

                  </p>
                </div>
                <div class="s-12 m-12 l-6">
                  <h2>History</h2>
                  <p>
                  Mr. B. P. Ahir being the Founder of Mital Engineering Works were involved in the machine tools business since 1999. This business including manufacturing of machined parts by programming, setting up, and operating a computer numerical control (CNC) machine.Driven by a vision to build the company into a giving solutions of technology through team work, the organization has grown manifold from manufacturing all kind of parts for machines to developing precision. Continuous process improvement and fast adoption of State-of-the-art technology has led MEW (Mital Engineering Works) in becoming a strong contender in innovating manufacturing techniques.
                  </p><br>
                </div>
                
              </div>  
            </div>
          </div>
        </div> 
      </article>
    </main>
    
    <!--FOOTER -->
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
            <p class="text-size-12">Copyright 2018, Mital Engineering Works</p>
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> Pramarth SoiftTech</a>
          </div>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
     
   </body>
   
</html>