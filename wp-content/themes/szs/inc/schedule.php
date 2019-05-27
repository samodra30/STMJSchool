<?php

register_activation_hook( __FILE__, 'scheduleTable');
scheduleTable();

function scheduleTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_name = $wpdb->prefix . 'schedule';
  $sql = "CREATE TABLE `$table_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_name` varchar(220) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  PRIMARY KEY(ID)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta("DROP TABLE IF EXISTS `$table_name`;");
    dbDelta($sql);
  }
}

add_action('admin_menu', 'addAdminPageContent');

function addAdminPageContent() {
  add_menu_page('Schedule', 'Schedule', 'manage_options' ,__FILE__, 'crudAdminPage', 'dashicons-calendar-alt');
}
function crudAdminPage() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'schedule';
  if (isset($_POST['newsubmit'])) {
    $name = $_POST['newname'];
    $date = $_POST['newdate'];
    $wpdb->query("INSERT INTO $table_name(schedule_name,schedule_date) VALUES('$name','$date')");
    echo "<script>window.location('".$_SERVER['REQUEST_URI']."');</script>";
  }
  if (isset($_POST['uptsubmit'])) {
    $id = $_POST['uptid'];
    $name = $_POST['uptname'];
    $date = $_POST['uptdate'];
    $wpdb->query("UPDATE $table_name SET schedule_name='$name',schedule_date='$date' WHERE id='$id'");
    echo "<script>window.location('".$_SERVER['REQUEST_URI']."');</script>";
  }
  if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $wpdb->query("DELETE FROM $table_name WHERE id='$del_id'");
    echo "<script>window.location('".$_SERVER['REQUEST_URI']."');</script>";
  }
  ?>
  <div class="wrap">
    <h2>Schedule</h2>
    <table class="wp-list-table widefat striped">
      <thead>
        <tr>
          <th width="25%">ID</th>
          <th width="25%">Schedule Name</th>
          <th width="25%">Schedule Date</th>
          <th width="25%">Actions</th>
        </tr>
      </thead>
      <tbody>
        <form action="" method="post">
          <tr>
            <td><input type="text" value="AUTO_GENERATED" disabled></td>
            <td><input type="text" id="newname" name="newname"></td>
            <td><input type="date" id="newdate" name="newdate"></td>
            <td><button id="newsubmit" name="newsubmit" type="submit" class="button button-primary">INSERT</button></td>
          </tr>
        </form>
        <?php
          $result = $wpdb->get_results("SELECT *, date_format(schedule_date, '%d %M %Y') as schedule_date1 FROM $table_name ORDER BY schedule_date DESC");
          foreach ($result as $print) {
            ?>
              <tr>
                <td width='25%'><?php echo $print->ID ?></td>
                <td width='25%'><?php echo $print->schedule_name ?></td>
                <td width='25%'><?php echo $print->schedule_date1 ?></td>
                <td width='25%'>
                  <a href='<?php echo $_SERVER['REQUEST_URI'].'&upt='.$print->ID ?>' class="button button-primary">EDIT</a>
                  <a href='<?php echo $_SERVER['REQUEST_URI'].'&del='.$print->ID ?>' class="button">DELETE</a>
                </td>
              </tr>
            <?php
          }
        ?>
      </tbody>  
    </table>
    <br>
    <br>
    <?php
      if (isset($_GET['upt'])) {
        $upt_id = $_GET['upt'];
        $result = $wpdb->get_results("SELECT * FROM $table_name WHERE ID='$upt_id'");
        foreach($result as $print) {
          $name = $print->schedule_name;
          $date = $print->schedule_date;
        }
        ?>
        <table class='wp-list-table widefat striped'>
          <thead>
            <tr>
              <th width='25%'>ID</th>
              <th width='25%'>Schedule Name</th>
              <th width='25%'>Schedule Date</th>
              <th width='25%'>Actions</th>
            </tr>
          </thead>
          <tbody>
            <form action='' method='post'>
              <tr>
                <td width="25%"><?php echo $print->ID ?> <input type="hidden" id="uptid" name="uptid" value="<?php echo $print->ID ?>"></td>
                <td width="25%"><input type="text" id="uptname" name="uptname" value="<?php echo $print->schedule_name ?>"></td>
                <td width="25%"><input type="date" id="uptdate" name="uptdate" value="<?php echo $print->schedule_date ?>"></td>
                <td width="25%"><button id="uptsubmit" name="uptsubmit" type="submit" class="button button-primary">UPDATE</button> <a href="<?php echo $_SERVER['PHP_SELF'].'?page='.get_template_directory() . '/inc/schedule.php'; ?>" class="button">CANCEL</a></td>
              </tr>
            </form>
          </tbody>
        </table><?php
      }
    ?>
  </div>
  <?php
}