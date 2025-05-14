<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<link rel="stylesheet" href="{{asset('css/base.css')}}">
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
<link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}">
<meta name="msvalidate.01" content="216530FF62BED4DA884D3477AC553925">
<link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
<meta name="alexaVerifyID" content="yN6VZu5l8_HlPtxL665_j1Oqi4E">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="2 days">
<title>Gallery | ArasuvelRoofings</title>
<meta name="description" content="Arasuvel Roofings is tensile roofings in Chennai. We Customized, roofings, Awnings, Retractable Awnings, Vertical Awnings, Aluminium Awnings in Chennai, PEB Structure in Chennai, Roofing Contractors in Chennai.">
<meta name="keywords" content="tensile roofings in Chennai, aluminium awnings, residential terrace roofing Chennai, polycarbonate skylight roofings in Chennai, sandwich puffed roofing sheets in Chennai, tensile structures, roofing sheets, tensile membrane structure, parking sheds, roofing structure fabric manufacturer, Roofing contractors in chennai, Roofing Contractors nearby, Roofing contractors near me, Roofing company in chennai, Roofing companies in chennai, Roofing companies nearby, Roofing companies near me.">
<meta name="news_keywords" content="tensile roofings in Chennai, aluminium awnings, residential terrace roofing Chennai, polycarbonate skylight roofings in Chennai, sandwich puffed roofing sheets in Chennai, tensile structures, roofing sheets, tensile membrane structure, parking sheds, roofing structure fabric manufacturer">
<meta property="og:title" content="Tensile Roofings in Chennai | Aluminium Awnings in Chennai">
<meta property="og:description" content="Arasuvel Roofings is tensile roofings in Chennai. We Customized, roofings, Awnings, Retractable Awnings, Vertical Awnings, Aluminium Awnings in Chennai.">
<link rel="canonical" href="http://www.arasuvelroofings.com/">
<meta property="og:image" content="http://www.arasuvelroofings.com/images/logo3.png">
<meta name="key-phrases" content="tensile roofings in Chennai, aluminium awnings, residential terrace roofing Chennai, polycarbonate skylight roofings in Chennai, sandwich puffed roofing sheets in Chennai, tensile structures, roofing sheets, tensile membrane structure, parking sheds, roofing structure fabric manufacturer">
<meta name="classification" content="Tensile Roofings in Chennai | Aluminium Awnings">
<meta name="topic" content="Tensile Roofings in Chennai | Aluminium Awnings">
<meta name="subject" content="Tensile Roofings in Chennai | Aluminium Awnings">
<meta name="distribution" content="Global">
<meta name="publisher" content="www.arasuvelroofings.com">
<meta name="author" content="www.arasuvelroofings.com">
<meta name="language" content="en-us">
<meta name="copyright" content="www.arasuvelroofings.com">
<meta name="rating" content="General">
<meta name="audience" content="All">
<meta name="resource-type" content="Web Page">
<meta name="doc-type" content="Web Page">
<meta name="doc-class" content="Published">
<meta name="doc-rights" content="Public Domain">
<meta name="Email" content="arasuvelroofings@gmail.com">
<meta name="geo.region" content="IN-TN">
<meta name="geo.placename" content="Chennai">
<meta name="geo.position" content="13.033027;80.16202">
<meta name="ICBM" content="13.033027, 80.16202">
<link rel="alternate" href="http://www.arasuvelroofings.com/" hreflang="en-us">

<link rel="shortcut icon" href="https://www.arasuvelroofings.com/assets/images/favicon.icon" type="text/css">
<link rel="publisher" href="https://plus.google.com/u/1/117533117699138581864/posts?hl=en"> 
<meta name="google-site-verification" content="8OVUBk_ElhiO5nRiRCd_xDz_RZJFCf0rM0LeBUaCHJY">
</head>
<body>
    <!--Header component--->
    <x-headernav>
    </x-headernav>
    <!--End-Header component--->
  <section id="about">
    <div class="p-3">
        <div class="container abt-cont">
        <div class="container bread">
            <h1 class="text-center">Gallery</h1>
            <!-- <h6><a href="#">Home</a>&nbsp;/&nbsp;<a href="#">About us</a></h6> -->
        </div>
            <br>
           <div class="row g-2">
           @foreach($gg as $g)
            <div class="col-lg-4 items">
              <a href="{{asset('storage/'. $g->path)}}" class="glightbox">
                <img src="{{asset('storage/'. $g->path)}}" class="img-fluid rounded rounded-lg shadow-lg">
              </a>
            </div>
            @endforeach
           </div>
        </div>
    </div>
  </section>
 

     <!--Footer component--->
   <x-footer></x-footer>
    <!--End-Footer component--->
    <script src="{{asset('js/glightbox.min.js')}}"></script>
</body>
</html>