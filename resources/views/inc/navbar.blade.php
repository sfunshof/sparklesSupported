<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('img/logo.png')}}" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                                             
                        <!-- Home -->
                         <li class="nav-item">
                            <a href="/" class="nav-link   {{ (request()->is('/')) ? 'active' : '' }}   ">
                              <strong> Home </strong>
                            </a>
                        </li>
                                              
                        
                        <!-- About Us -->
                        <li class="nav-item">
                            <a href="{{ url('about/about_all')}}" class="nav-link  {{ (request()->is('about/*')) ? 'active' : '' }} ">
                                <strong> About Us </strong>
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                               
                                <li class="nav-item">
                                    <a href="{{ url('about/whychooseus')}}" class="nav-link {{ (request()->is('about/whychooseus')) ? 'active' : '' }}">
                                        <strong> Why choose us  </strong>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('about/faq')}}" class="nav-link {{ (request()->is('about/faq')) ? 'active' : '' }}">
                                        <strong>  FAQ </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about/ourmission')}}" class="nav-link {{ (request()->is('about/ourmission')) ? 'active' : '' }}">
                                        <strong> Our Mission </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about/ourvalues')}}" class="nav-link {{ (request()->is('about/ourvalues')) ? 'active' : '' }}">
                                        <strong> Our Values </strong>
                                    </a>
                                </li>
                                 
                                <li class="nav-item">
                                    <a href="{{ url('about/areaswecover')}}" class="nav-link {{ (request()->is('about/areaswecover')) ? 'active' : '' }}">
                                        <strong>  Areas we cover </strong>
                                    </a>
                                </li>
                            
                            </ul>
                        </li>

                        <!-- Services -->
                        <li class="nav-item">
                            <a href="{{url('services/services_all') }}" class="nav-link  {{ (request()->is('services/*')) ? 'active' : '' }} ">
                                <strong>  Home Care Services </strong>
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="{{ url('services/personal')}}" class="nav-link {{ (request()->is('services/personal')) ? 'active' : '' }}">
                                        <strong>  Personal Care </strong>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ url('services/specialist')}}" class="nav-link {{ (request()->is('services/specialist')) ? 'active' : '' }}">
                                        <strong> Specialist Care  </strong>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('services/palliative')}}" class="nav-link {{ (request()->is('services/palliative')) ? 'active' : '' }}">
                                        <strong>  Palliative Care  </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('services/dementia')}}" class="nav-link {{ (request()->is('services/dementia')) ? 'active' : '' }}">
                                        <strong> Dementia  </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('services/support')}}" class="nav-link {{ (request()->is('services/support')) ? 'active' : '' }}">
                                        <strong> Support &amp; Companionship </strong>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ url('services/elderly')}}" class="nav-link {{ (request()->is('services/elderly')) ? 'active' : '' }}">
                                        <strong> Elderly Care </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('services/respite')}}" class="nav-link {{ (request()->is('services/respite')) ? 'active' : '' }}">
                                        <strong> Respite Care  </strong>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ url('services/hospital')}}" class="nav-link {{ (request()->is('services/hospital')) ? 'active' : '' }}">
                                        <strong>  Hospital to Home  </strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('services/livein')}}" class="nav-link {{ (request()->is('services/livein')) ? 'active' : '' }}">
                                        <strong>   Live-in Care  </strong>
                                    </a>
                                </li>

                            </ul>
                        </li>



                         <!-- Recruitment -->
                         <li class="nav-item">
                            <a href="{{ url('recruit') }} " class="nav-link  {{ (request()->is('recruit')) ? 'active' : '' }} ">
                                <strong> Work for us </strong>
                            </a>
                        </li>

                        <!-- Contact Us -->
                        <li class="nav-item">
                            <a href="{{ url('contact') }}" class="nav-link  {{ (request()->is('contact')) ? 'active' : '' }}   ">
                                <strong>Contact Us </strong>
                            </a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
        </div>
    </div>

    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-item">
                            <div class="option-item">
                                <i class='search-btn bx bx-search'></i>
                                <i class='close-btn bx bx-x'></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit">
                                                <i class="bx bx-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="add-cart-btn">
                                    <a href="#" class="cart-btn-icon">
                                        <i class='bx bx-shopping-bag'></i>
                                        <span>0</span>
                                    </a>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>