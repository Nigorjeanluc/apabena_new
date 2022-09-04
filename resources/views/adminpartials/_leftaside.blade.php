<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/admin/dist/img/userAvatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="#">
                <i class="fa fa-list-alt"></i>
                <span>Post new testimonial</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Post new messages</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-th-large"></i>
                <span>Post new advertisement</span>
              </a>
            </li>
            <li>
              <a href="messages.php">
                <i class="fa fa-list-alt"></i>
                <span>Received Messages</span>
              <span class="label label-success pull-right">
              <?php
                // include("../connect.php");
                // $sqli='SELECT SUM(counter) FROM msg';
                // $result=mysqli_query($dbcon,$sqli);
                // while ($row=mysqli_fetch_assoc($result)) {
                //   echo $row['SUM(counter)']." new";
                // }
              ?>
              </span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    