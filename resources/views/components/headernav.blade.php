    <section id="header">
           <div class="menu">
            <div class="logo">
                <img src="{{asset('images/logo3.png')}}">
            </div>
            <div class="menulist" id="menulist">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{route('product')}}">Product</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <button class="icon" id="icon">
                <i class="fa-solid fa-bars"></i>
            </button>
           </div>
    </section>