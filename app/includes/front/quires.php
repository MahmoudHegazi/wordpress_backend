<?php 
function ju_custom_query() {
global $wpdb;
//$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts" );
//echo "<p>User count is {$user_count}</p>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = $_POST["user_id"];
  $sum = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) from $wpdb->posts where post_status = 'publish' and post_author= %d", $user_id) );
  printf('This user has %d posts', $sum);
}
}
?>