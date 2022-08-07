        <div class="sidebar" data-image="{{asset('Dashboard/assets/img/sidebar-5.jpg')}}">
            <div class="sidebar-wrapper">
                <div class="logo" style="font-weight: bold">
                    <a href="#" class="simple-text">
                        <img src="{{asset('img/logo3.png')}}" alt="" width="100px"><br/> <span style="display:block;margin-top: 5px"> Deal Control Panel</span>
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ Request::segment(2) == 'index' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.index')}}">
                            <i class="nc-icon nc-align-center"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
 
                    <li class="{{ Request::segment(2) == 'users' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.users.index')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Users</p>
                        </a>
                    </li>
 
                    {{-- <li class="{{ Request::segment(2) == 'News' ? 'active' : null }} dropparent">
                        <a class="nav-link" >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>News</p>
                        </a>
                        <ul class="mydropdown"
                        style="{{ Request::segment(2) == 'news' ? 'display: block' : null }}{{ Request::segment(2) == 'newscategory' ? 'display: block' : null }}">
                            <li style="{{ Request::segment(2) == 'news' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.news.index')}}">All News</a> </li>
                            <li style="{{ Request::segment(2) == 'newscategory' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.newscategory.index')}}">News Category</a> </li>
                        </ul>
                    </li>
                    <li class="{{-- Request::segment(2) == 'News' ? 'active' : null -  dropparent">
                        <a class="nav-link" >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>Opportunites</p>
                        </a>
                        <ul class="mydropdown"                        
                        style="{{Request::segment(2) == 'oppocats' ? 'display: block' : null }}{{ Request::segment(2) == 'opportunities' ? 'display: block' : null }}">
                            <li style="{{ Request::segment(2) == 'opportunities' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.opportunities.index')}}">All Opportunities</a> </li>
                            <li style="{{ Request::segment(2) == 'oppocats' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.oppocats.index')}}">Opportunities Category</a> </li>
                        </ul>
                    </li>
 --}}



























                    {{-- <li class="{{ Request::segment(2) == 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.about.index')}}"  >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>About</p>
                        </a>
                    </li>















                    <li class="{{ Request::segment(2) == 'roles' ? 'active' : null }}">
                        <a class="nav-link " href="{{Route('admin.roles.index')}}">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Role & Permission</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'admins' ? 'active' : null }}">
                        <a class="nav-link " href="{{Route('admin.admins.index')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Dash Admin</p>
                        </a>
                    </li> --}}

                    {{-- <li class="{{ Request::segment(2) == 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('about.index')}}">
                            <i class="nc-icon nc-badge"></i>
                            <p>About</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'slider' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('slider.index')}}">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'category' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('category.index')}}">
                            <i class="nc-icon nc-align-center"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'product' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('product.index')}}">
                            <i class="nc-icon nc-layers-3"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'messages' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('messages')}}">
                            <i class="nc-icon nc-chat-round"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'order' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('order')}}">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'testmonials' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('testmonials.index')}}">
                            <i class="nc-icon nc-notification-70"></i>
                            <p>Testmonials</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'news' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('news.index')}}">
                            <i class="nc-icon nc-tv-2"></i>
                            <p>News</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'settings' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('settings')}}">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Settings</p>
                        </a>
                    </li>
 --}}
                </ul>
              
            </div>
        </div>
