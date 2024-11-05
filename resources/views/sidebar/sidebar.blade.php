
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
       
</br> <ul>
                  
                <li class="menu-title">

                    <span>{{ __('messages.Main') }}</span>
                </li>
              
                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> {{ __('messages.t241') }}</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul> @if (Session::get('role_name') === 'Admin')
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">{{ __('messages.t242') }}</a></li> @endif 
                      </ul>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>{{ __('messages.t243') }}</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}}  ? 'active' : '' }}">{{ __('messages.t244') }}</a></li>
                        <li><a href="{{ route('activity/login/logout') }}" class="{{set_active(['activity/login/logout'])}}">{{ __('messages.t245') }}</a></li>
                        <li><a class="{{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">{{ __('messages.t246') }}</a></li>
                        <li><a class="{{ (request()->is('view/user/profile/*')) ? 'active' : '' }}">{{ __('messages.t247') }}</a></li>
                    </ul>
                </li>
                @endif
              
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['blog/list','blog/add/page'])}} {{ (request()->is('blog/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-newspaper"></i>
                        <span> {{ __('messages.t248') }}</span>
                        <span class="menu-arrow"></span>
                    </a> 
                    <ul>
                        <li><a href="{{ route('blog/list') }}"  class="{{set_active(['blog/list','blog/grid'])}}">{{ __('messages.t249') }}</a></li>
                        <li><a href="{{ route('blog/add/page') }}" class="{{set_active(['blog/add/page'])}}">{{ __('messages.t250') }}</a></li>
                    </ul>
                </li> @endif
              
              
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['partner/add/page','partner/edit/page'])}}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> {{ __('messages.t251') }}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('partner/list') }}" class="{{set_active(['partner/list','partner/grid/page'])}}">{{ __('messages.t252') }}</a></li>
                        <li><a href="{{ route('partner/add/page') }}" class="{{set_active(['partner/add/page'])}}">{{ __('messages.t253') }}</a></li>
                    </ul>
                </li> @endif

                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['form/staff/new'])}}">
                    <a href="#"><i class="fas fa-clipboard"></i>
                        <span> {{ __('messages.t254') }}</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('form/view/detail') }}" class="{{set_active(['form/view/detail'])}}">{{ __('messages.t255') }}</a></li>
                        <li><a href="{{ route('form/staff/new') }}" class="{{set_active(['form/staff/new'])}}">{{ __('messages.t256') }}</a></li>
                        <li><a class="{{ (request()->is('form/view/detail/*')) ? 'active' : '' }}">{{ __('messages.t2577') }}</a></li>
                    </ul>
                </li> @endif
            </ul>
        </div>
    </div>
</div>