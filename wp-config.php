<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'blog' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U](FXc|9GG$*P1bn;Y*a<r%8{zOHCPx_>+:zxwT9e`Y.*4*S*,19uZ/}|Z>v;BY1' );
define( 'SECURE_AUTH_KEY',  'tTFA>pu|et46#=/-Vf}Xd@q:@NA1nbKn!Ug>X21ue|.#DS>3Q}P?~YzEo=xJN rN' );
define( 'LOGGED_IN_KEY',    'h~,n[.qwA63dGkkYUKqSR6NN_;Ee@]:eEQ ^#TO3nP5* ]p~-G6LLC`8A%bU+^d6' );
define( 'NONCE_KEY',        'dfv[.r<Z@4d64x)8_1?4Zj#XHZ1cGRP9LlKXc sY).z.s1G6%l`r<B{eHHqP*7r>' );
define( 'AUTH_SALT',        'DQqzI8WgFl6w6`qwgRo}34NEZ|nKYOMh9=/|x}Tf*?XiXcca};@!-AngA!KP;=$|' );
define( 'SECURE_AUTH_SALT', 'v3BP&*!9:[Sj0Hmo.%S_]2bs5{=lS{8)dGPbobN{2 !Q{_GZo$au,`N^*Rwm!<5%' );
define( 'LOGGED_IN_SALT',   'IYiDCe-vf~Y8?E(n,BU?{gz{{+u<B1]@SEyjxdg+CyWH/2pKA|~wM8.Z}l>cH<Et' );
define( 'NONCE_SALT',       'Mm9R=-6ea;)G;HXL]i@-~i^sT.x@a~RWxW:,qPB@J#8aRl&OhMo^frx#Mfz9Z}0f' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

