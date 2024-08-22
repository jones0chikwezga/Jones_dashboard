<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('CT') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      @if (auth()->user()->type == 'associate')
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ url('/associate/home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @elseif(auth()->user()->type == 'partner')

      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ url('/partner/home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      @elseif(auth()->user()->type == 'manager')
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ url('/manager/home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>


      @else
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @endif
      
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="fa fa-users"></i>
          <p>
            {{ __("Users") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("User Management") }} </p>
              </a>
            </li>
          </ul>
        </div>

        <li>
          <a data-toggle="collapse" href="#assessment">
              <i class="fa fa-users"></i>
            <p>
              {{ __("Assessment") }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="assessment">
            <ul class="nav">
              <li class="">
                <a href="{{ url('assessment/pre_assess') }}">
                  <i class="fa fa-history"></i>
                  <p> {{ __("Pre Assessment") }} </p>
                </a>
              </li>
              <li class="">
                <a href="{{ url('assessment/self_assess') }}">
                  <i class="fa fa-balance-scale"></i>
                  <p> {{ __("Self Assessment") }} </p>
                </a>
              </li>

              <li class="">
                <a href="{{ url('objectives') }}">
                  <i class="fa fa-balance-scale"></i>
                  <p> {{ __("My Objectives") }} </p>
                </a>
              </li>

            @if (auth()->user()->type == 'associate')
                
            @else
                 <li class="">
                <a href="{{ url('assessment/assess_others') }}">
                  <i class="fa fa-dolly"></i>
                  <p> {{ __("Assess_Others") }} </p>
                </a>
              </li>
            @endif
             
            </ul>
          </div>

      

        <li class="@if ($activePage == 'settings') active @endif">
          <a href="{{ route('settings.index') }}">
            <i class="now-ui-icons education_atom"></i>
            <p>{{ __('Settings') }}</p>
          </a>
        </li> 

      {{-- <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="{{ route('page.index','maps') }}">
          <i class="now-ui-icons location_map-big"></i>
          <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
        <a href="{{ route('page.index','notifications') }}">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li> --}}
     
    </ul>
  </div>
</div>
