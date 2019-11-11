<?
class kontek {
    public static function plugin_activation() {
        global $wpdb;
        $table_name = $wpdb->prefix . "kontekParts";
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            projectId mediumint(9) NOT NULL,
            PRIMARY KEY(projectId),
            tagNumber varchar(16) NOT NULL, 
            
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta( $sql );
    }
    
}