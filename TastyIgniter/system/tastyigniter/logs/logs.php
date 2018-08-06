<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-16 05:25:41 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\wwwroot\TastyIgniter\system\database\drivers\mysqli\mysqli_driver.php 296
ERROR - 2018-07-16 05:26:24 --> Query error: Duplicate column name 'flag' - Invalid query: ALTER TABLE `4bnc6g9xt_countries`
	ADD flag VARCHAR(255) NOT NULL
ERROR - 2018-07-16 05:26:24 --> Query error: Can't DROP 'start_date'; check that column/key exists - Invalid query: ALTER TABLE `4bnc6g9xt_coupons` DROP COLUMN `start_date`
ERROR - 2018-07-16 05:26:24 --> Query error: Can't DROP 'end_date'; check that column/key exists - Invalid query: ALTER TABLE `4bnc6g9xt_coupons` DROP COLUMN `end_date`
ERROR - 2018-07-16 05:26:54 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\wwwroot\TastyIgniter\system\database\drivers\mysqli\mysqli_driver.php 296
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'status' - Invalid query: ALTER TABLE `4bnc6g9xt_extensions`
	ADD status TINYINT(1) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'title' - Invalid query: ALTER TABLE `4bnc6g9xt_extensions`
	ADD title VARCHAR(255) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'status' - Invalid query: ALTER TABLE `4bnc6g9xt_working_hours`
	ADD status TINYINT(1) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'parent_id' - Invalid query: ALTER TABLE `4bnc6g9xt_categories`
	ADD parent_id INT(11) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'priority' - Invalid query: ALTER TABLE `4bnc6g9xt_categories`
	ADD priority INT(11) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'image' - Invalid query: ALTER TABLE `4bnc6g9xt_categories`
	ADD image VARCHAR(255) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate entry '10971' for key 'PRIMARY' - Invalid query: INSERT INTO 4bnc6g9xt_settings (`setting_id`, `sort`, `item`, `value`, `serialized`) VALUES (10971, 'prefs', 'default_themes', 'a:2:{s:5:"admin";s:18:"tastyigniter-blue/";s:4:"main";s:20:"tastyigniter-orange/";}', 1);
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate key name 'uniqueSlug' - Invalid query: ALTER TABLE 4bnc6g9xt_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2018-07-16 05:27:29 --> Query error: Unknown column 'order_id' in '4bnc6g9xt_reviews' - Invalid query: ALTER TABLE 4bnc6g9xt_reviews CHANGE `order_id` `sale_id` INT(11)  NOT NULL;
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'sale_type' - Invalid query: ALTER TABLE 4bnc6g9xt_reviews ADD `sale_type` VARCHAR(32)  NULL  DEFAULT NULL  AFTER `sale_id`;
ERROR - 2018-07-16 05:27:29 --> Query error: Can't DROP 'covered_area'; check that column/key exists - Invalid query: ALTER TABLE `4bnc6g9xt_locations` DROP COLUMN `covered_area`
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'status_color' - Invalid query: ALTER TABLE `4bnc6g9xt_statuses`
	ADD status_color VARCHAR(32) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'assignee_id' - Invalid query: ALTER TABLE `4bnc6g9xt_orders`
	ADD assignee_id INT(11) NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Table 'tasty.4bnc6g9xt_customers_activity' doesn't exist - Invalid query: ALTER TABLE 4bnc6g9xt_customers_activity RENAME 4bnc6g9xt_customers_online;
ERROR - 2018-07-16 05:27:29 --> Query error: Duplicate column name 'user_agent' - Invalid query: ALTER TABLE `4bnc6g9xt_customers_online`
	ADD user_agent TEXT NOT NULL
ERROR - 2018-07-16 05:27:29 --> Query error: Table '4bnc6g9xt_notifications' already exists - Invalid query: CREATE TABLE `4bnc6g9xt_notifications` (
	notification_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	action VARCHAR(255) NOT NULL,
	object VARCHAR(255) NOT NULL,
	suffix VARCHAR(255) NOT NULL,
	object_id INT(11) NOT NULL,
	actor_id INT(11) NOT NULL,
	subject_id INT(11) NOT NULL,
	status TINYINT(4) NOT NULL,
	date_added DATETIME NOT NULL
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2018-07-16 05:27:59 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\wwwroot\TastyIgniter\system\database\drivers\mysqli\mysqli_driver.php 296
ERROR - 2018-07-16 14:30:20 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-16 13:03:08 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:03:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:03:13 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:03:18 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:03:22 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:04:01 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:04:03 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:04:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:04:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:04:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:35:50 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:35:57 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:36:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:36:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-16 13:37:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\wwwroot\TastyIgniter\system\tastyigniter\libraries\Location.php 878
ERROR - 2018-07-17 11:08:07 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-17 11:08:39 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-17 11:08:39 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Tue, 17 Jul 2018 11:08:38 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b4e06760e272@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b4e06760e280&quot;
</pre>
ERROR - 2018-07-17 11:09:18 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-17 11:09:18 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Tue, 17 Jul 2018 11:09:17 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b4e069d03772@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b4e069d0377c&quot;
</pre>
ERROR - 2018-07-22 18:29:10 --> Could not find the language line "menu_username"
ERROR - 2018-07-22 18:30:47 --> Could not find the language line "column_name"
ERROR - 2018-07-22 18:30:56 --> Could not find the language line "column_name"
ERROR - 2018-07-22 18:30:57 --> Could not find the language line "column_name"
ERROR - 2018-07-22 18:31:26 --> Could not find the language line "label_name"
ERROR - 2018-07-22 18:31:52 --> Could not find the language line "address"
ERROR - 2018-07-22 18:36:17 --> Could not find the language line "email"
ERROR - 2018-07-22 18:42:29 --> Could not find the language line "text_title"
ERROR - 2018-07-22 18:43:29 --> Could not find the language line "button_back"
ERROR - 2018-07-22 18:45:04 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:45:06 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:46:24 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:46:51 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:52:29 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:52:48 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:54:31 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:54:40 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:55:11 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:55:29 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:56:08 --> Could not find the language line "label_first_name"
ERROR - 2018-07-22 18:56:22 --> Could not find the language line "label_first_name"
ERROR - 2018-07-23 15:20:45 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 15:20:45 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 15:20:44 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b562a8cbadde@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b562a8cbadfc&quot;
</pre>
ERROR - 2018-07-23 15:29:17 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 15:29:17 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 15:29:16 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b562c8c28989@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b562c8c28995&quot;
</pre>
ERROR - 2018-07-23 15:38:35 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 15:38:35 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 15:38:34 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b562eba79395@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b562eba7939c&quot;
</pre>
ERROR - 2018-07-23 15:39:10 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 15:39:10 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 15:39:09 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b562eddba61e@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b562eddba629&quot;
</pre>
ERROR - 2018-07-23 16:35:47 --> 404 Page Not Found: Mail_templates/%7Bsite_logo%7D
ERROR - 2018-07-23 16:37:34 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 16:37:34 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 16:37:33 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b563c8d62daa@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b563c8d62dbb&quot;
</pre>
ERROR - 2018-07-23 16:38:20 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 16:38:20 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 16:38:19 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b563cbbd341b@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b563cbbd3437&quot;
</pre>
ERROR - 2018-07-23 16:38:22 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 16:38:22 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 16:38:21 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b563cbdbef7d@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b563cbdbef88&quot;
</pre>
ERROR - 2018-07-23 16:38:24 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 16:38:24 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 16:38:23 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b563cbfa47bf@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b563cbfa47ca&quot;
</pre>
ERROR - 2018-07-23 17:05:59 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-23 17:05:59 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Mon, 23 Jul 2018 17:05:58 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b56433668dde@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b56433668dea&quot;
</pre>
ERROR - 2018-07-24 13:47:21 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-24 14:09:46 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-24 14:09:46 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Tue, 24 Jul 2018 14:09:45 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b576b695bdcd@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b576b695bded&quot;
</pre>
ERROR - 2018-07-24 14:10:13 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-24 14:10:13 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Tue, 24 Jul 2018 14:10:12 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b576b84adffa@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b576b84ae005&quot;
</pre>
ERROR - 2018-07-25 14:29:53 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-25 14:29:53 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Wed, 25 Jul 2018 14:29:52 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b58c1a0453f9@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b58c1a045400&quot;
</pre>
ERROR - 2018-07-25 14:32:47 --> 404 Page Not Found: Mail_templates/%7Bsite_logo%7D
ERROR - 2018-07-25 14:33:01 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-25 14:33:17 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-25 14:33:46 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-26 11:52:27 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-26 11:52:27 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Thu, 26 Jul 2018 11:52:26 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b59ee3a7e4e5@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b59ee3a7e4f5&quot;
</pre>
ERROR - 2018-07-26 11:54:27 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-26 11:54:27 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Thu, 26 Jul 2018 11:54:26 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b59eeb2da91c@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b59eeb2da926&quot;
</pre>
ERROR - 2018-07-26 13:15:52 --> Severity: Parsing Error --> syntax error, unexpected '"Eat in"' (T_CONSTANT_ENCAPSED_STRING) D:\wwwroot\TastyIgniter\main\views\themes\tastyigniter-orange\checkout.php 316
ERROR - 2018-07-26 13:16:00 --> Severity: Parsing Error --> syntax error, unexpected '"Eat in"' (T_CONSTANT_ENCAPSED_STRING) D:\wwwroot\TastyIgniter\main\views\themes\tastyigniter-orange\checkout.php 316
ERROR - 2018-07-26 13:18:06 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() D:\wwwroot\TastyIgniter\system\libraries\Email.php 1837
ERROR - 2018-07-26 13:18:06 --> Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.<br /><pre>User-Agent: TastyIgniter
Date: Thu, 26 Jul 2018 13:18:05 -0400
From: &quot;test&quot; &lt;baisestar@gmail.com&gt;
Return-Path: &lt;baisestar@gmail.com&gt;
Reply-To: &lt;baisestar@gmail.com&gt;
X-Sender: baisestar@gmail.com
X-Mailer: TastyIgniter
X-Priority: 3 (Normal)
Message-ID: &lt;5b5a024d7df96@gmail.com&gt;
Mime-Version: 1.0
Content-Type: multipart/alternative; boundary=&quot;B_ALT_5b5a024d7dfa4&quot;
</pre>
ERROR - 2018-07-27 15:56:44 --> 404 Page Not Found: 
ERROR - 2018-07-27 15:56:45 --> 404 Page Not Found: 
ERROR - 2018-07-30 11:47:39 --> Query error: Table 'tasty.hhhway_staffs' doesn't exist - Invalid query: select * from hhhway_staffs where staff_id=0
ERROR - 2018-07-30 11:47:39 --> Severity: Error --> Call to a member function row_array() on boolean D:\wwwroot\TastyIgniter\system\tastyigniter\models\Orders_model.php 700
ERROR - 2018-07-30 11:47:54 --> Query error: Table 'tasty.hhhway_staffs' doesn't exist - Invalid query: select * from hhhway_staffs where staff_id=0
ERROR - 2018-07-30 11:47:54 --> Severity: Error --> Call to a member function row_array() on boolean D:\wwwroot\TastyIgniter\system\tastyigniter\models\Orders_model.php 700
ERROR - 2018-07-30 11:53:46 --> Query error: Table 'tasty.hhhway_staffs' doesn't exist - Invalid query: select * from hhhway_staffs where staff_id=0
ERROR - 2018-07-30 11:53:46 --> Severity: Error --> Call to a member function row_array() on boolean D:\wwwroot\TastyIgniter\system\tastyigniter\models\Orders_model.php 700
ERROR - 2018-07-31 15:18:46 --> Could not find the language line "text_exp_month"
ERROR - 2018-07-31 15:22:52 --> Could not find the language line "text_exp_month"
ERROR - 2018-07-31 15:22:52 --> Could not find the language line "text_exp_year"
ERROR - 2018-07-31 15:23:21 --> Could not find the language line "text_exp_month"
ERROR - 2018-07-31 15:23:21 --> Could not find the language line "text_exp_year"
