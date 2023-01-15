<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        
          <a href="/" class="nav-link active">
            <i class="nav-icon fas fa-table"></i>
            <p>
              <?php echo e(__('message.btn_taskManag')); ?>

              
            </p>
          </a>
        </ul>
    </nav>
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          

            <a href="<?php echo e(route("assigner.index")); ?>" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                <?php echo e(__('message.btn_assign')); ?>

                
              </p>
            </a>

          </ul>

      </nav>
          <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

              

                <a href="<?php echo e(route("dashboard")); ?>" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    <?php echo e(__('message.dashboard')); ?>

                    
                  </p>
                </a>

              </ul>

          </nav>




    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<?php /**PATH C:\wamp64\www\GITHUB\gestion-breifs-projets\back-end\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>