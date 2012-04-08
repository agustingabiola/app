<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HTML5 Tags and CSS3</title>
        <link rel="stylesheet" href="Css/default.css">
         <!--<link rel="stylesheet" href="Css/punto4.css"> -->
          <!--<link rel="stylesheet" href="Css/punto5.css"> -->
    </head>
    <body>
       <header>
           <nav id="menu">
                <ul>
                    <li><a href="#article1">Article 1</a></li>
                    <li><a href="#article2">Article 2</a></li>
                    <li><a href="#article3">Article 3</a></li>
                </ul>
           </nav>
            <!-- fin navegador-->
           <section id="articleSection">
            <article id="article1">
                <hgroup>
                    <h1>Article 1</h1>
                    <h2>Subtitle and info</h2>
                </hgroup>
                <div id="text">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla at turpis eget nibh ultricies dignissim. 
                        Duis luctus euismod turpis. Mauris augue. Aliquam facilisis semper elit. Pellentesque semper hendrerit 
                        arcu. Phasellus eleifend commodo justo. Aliquam orci urna, imperdiet sit amet, posuere in, lobortis et, 
                        risus.  <span class="lowOne">Nam</span> nec sapien ut ante congue <span class="hiOne">vulputate</span>
                        Integer interdum nonummy erat. Nullam tellus. Sed accumsan. Vestibulum orci ipsum, eleifend vitae, 
                        mollis vel, mollis sed, purus. Suspendisse mollis elit eu magna. Morbi egestas. Nunc leo ipsum, 
                        blandit ac, viverra quis, porttitor quis, dui. Vestibulum ante ipsum primis in faucibus orci luctus 
                        et ultrices posuere cubilia Curae; Vivamus scelerisque ipsum ut justo. Pellentesque et ligula eu massa 
                        sagittis rutrum. In urna nibh, eleifend vel, suscipit ut, sagittis id, nunc.</p>
                    <p> <span class="hiTwo">sollicitudin</span> Nam ut sapien sed pede pulvinar rutrum. Nunc eu elit sed augue aliquet tincidunt. Morbi rutrum. 
                        Vestibulum dui turpis, lobortis quis, euismod sed, consectetuer sit amet, nunc. Nam mi. 
                        Fusce at nisl eu tortor bibendum eleifend. Sed ac metus. Phasellus nec elit. Morbi tortor nulla, 
                        tristique a, adipiscing at, consectetuer et, nisi. Nunc vel sapien sed risus hendrerit egestas. 
                        Vivamus turpis arcu, placerat eu, congue vel, commodo ut, nisl.</p>
                </div>
            </article>
             <!-- fin articulo uno-->   
            <article id="article2">
                <hgroup>
                    <h1>Article <span class="hiOne">hiOne?</span> 2</h1>
                    <h2>Image</h2>
                </hgroup>
                <img id="imgAndroid" src="http://www.softzone.es/wp-content/uploads/2009/11/android.jpg" >
            </article>
              <!-- fin articulo 2-->   
            <article id="article3">
                <hgroup>
                    <h1>Article 3</h1>
                    <h2>Subtitle 3333</h2>
                </hgroup>
                <div id="text">
                    <p>Basta de texto latin generado...<span class="hiThree">hiThree</span> </p>                    
                    <video tabindex="0" id="clip" controls="controls" width="390">
                        <source src="HTML5%20Presentation_files/chrome_japan.webm">
                        <source src="HTML5%20Presentation_files/chrome_japan.mp4">
                        <source src="HTML5%20Presentation_files/chrome_japan.ogv">
                        Your browser does not support the video tag
                    </video>

                </div>
            </article>
            <!-- fin articulo 3-->     
        </section>
        <aside>
            <h2>About section</h2>
            <p>About HTML5</p>
            <time datetime="2012-04-02">2012</time>.
        </aside>
        <footer>The end</footer> 
        </header>
    </body>
</html>
