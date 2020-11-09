  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <p class="text-aqua" style="font-size: 2rem;margin:0 10px 0 0;">{{ Auth::user()->name }}</p>
        </div>
        <div class="pull-left">
          <a href="#" style="line-height: 30px;margin-left: 15px;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>




        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-question text-aqua"></i>
            <span>Questions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('questions') }}"><i class="fa fa-question text-aqua"></i>All Questions</a></li>
              <li><a class="nav-link" href="{{ route('questionCreate') }}"><i class="fa fa-circle-o text-red"></i>Question Create</a></li>
          </ul>
        </li>





        <li class="treeview">
              <li><a class="nav-link" href="{{ route('vUsers') }}"><i class="fa fa-circle-o text-aqua"></i>All Voice Users</a></li>
        </li>





        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-microphone text-red"></i>
            <span>Voices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('allVoices') }}"><i class="fa fa-microphone text-aqua"></i>All Voices</a></li>
              <li><a class="nav-link" href="{{ route('lockdownVoices') }}"><i class="fa fa-microphone text-red"></i>Lockdown Voices</a></li>
              <li><a class="nav-link" href="{{ route('pandemicVoices') }}"><i class="fa fa-microphone text-red"></i>Pandemic Voices</a></li>
          </ul>
        </li>




      <li class="treeview">
        <li><a class="nav-link" href="{{ route('questionsAnswers') }}"><i class="fa fa-question text-aqua"></i><i class="fa fa-microphone text-red"></i>Question Wise Voices</a>
      </li>       




      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>