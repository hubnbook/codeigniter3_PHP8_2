<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>Welcome to CodeIgniter! for PHP 8.2</h1>

		<div id="body">
			<p>Current Your PHP version</p>
			<code><?php echo phpversion(); ?></code>

			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>

			<code>declare CodeIgniter Core class by New instance like such as $a = new \core\CI_Model()</code>

			<p>You can load view on View PHP file</p>
			<?php
			// print_r($this);
			$this->load->view("welcome_panel", array("name" => "Nattakarn"));
			?>
		</div>

		<h1>Data from Controller</h1>
		<div id="body">
			<p>Student list</p>
			<code>
				<?php
				if (isset($student)) {
					foreach ($student as $v) {
				?>
						<li><?php echo $v->first_name . " " . $v->last_name; ?></li>
				<?php
					}
				}
				?>
			</code>
		</div>

		<h1>Data from Controller</h1>
		<div id="body">
			<p>Test Sub page & Load page inner main page</p>
			<code>
				<a href="<?php echo base_url(); ?>index.php/main/index/user" target="_blank">Link</a>
			</code>
		</div>

		<h1>How to prepared Old code for PHP 8.2</h1>
		<div id="body">
			<p>In case If you  were load the model and declear model name in controller</p>
			<code>
				<pre>
class MainController extends CI_Controller{

	public $user;

	function login(){
		$this->load->model("UserModel", "user");

		$s = $this->user->listDB(new UserModel);
	}
}
				</pre>
				User must delear attribute of class same as the model name on load
			</code>
		</div>

		<h1>Test Upload</h1>
		<div id="body">
			<?php
			// print_r($this);
			$this->load->view("welcome_upload", array('error' => ' '));
			?>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>

</html>