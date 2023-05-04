<div class="vertical-menu">

    <div data-simplebar class="h-100">

      

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                    
                        <span>Dashboard</span>
                    </a>
                </li>

                
    
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home slide setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide')}}">Home slide</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About page setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page')}}">about</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Portfolio page setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.portfolio')}}">all portfolio</a></li>
                        <li><a href="{{ route('add.pprtfolio')}}">add portfolio</a></li>
                       
                    </ul>
                </li>

          
                

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Blog Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('allblog.category')}}">All categories</a></li>
                        <li><a href="{{route('addblog.category')}}">add category</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blogs.all')}}">All blogs</a></li>
                        <li><a href="{{route('blogs.add')}}">addblogs</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="{{route('contact.messages')}}" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Contact messages</span>
                    </a>
                    
                </li>

              
              
                
                </li>


               

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>