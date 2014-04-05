<?php
//Check if user is "logged in"
if (!defined('FREEPBX_IS_AUTH')) { 
	die('No direct script access allowed'); 
}
?>
 <head>
 	<script type="text/javascript" src="modules/tlstools/tls.js"></script>
	<script src="modules/tlstools/jquery.elfinder.min.js"></script>
 </head>


<br><h2>TLS Certificates</h2>
<hr>

                <h4>Server Section</h4>

		<table >
			<tr>
				<td width="45%">
					<label data-rel="popover" data-content="Set the DNS of the PBX or the IP ADDRESS" for="DNS">DNS or IP:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the DNS, Host or IP ADDRESS.")?><br>
                                       	</span>
                                        </a>

				</td>
				<td>
					<input size="30" class="text ui-widget-content ui-corner-all" type="text" placeholder="my.host.name or 10.0.0.0" name="astdns" id="astdns" />

				</td>
			</tr>
			<tr>
				<td width="45%">
					<label data-rel="popover" data-content="Set the name of the company" for="comp">Company Name:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the Company Name string or whatever string to define the organizational name..")?><br>
                                       	</span>
                                        </a>

				</td>
				<td>
					<input size="30"  class="text ui-widget-content ui-corner-all" type="text" placeholder="My Super PBX" name="astco" id="astco" class="text ui-widget-content ui-corner-all" />
				</td>
			</tr>
			<tr>
				<td width="45%">
					<label data-rel="popover" data-content="Set the password  to generate asterisk CA Certs" for="peerpwd">Password:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the password used to generate the client keys.")?><br>
                                       	</span>
                                        </a>

				</td>
				<td>
					<input size="30" class="text ui-widget-content ui-corner-all" type="password" name="astpwd" id="astpwd" />
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
			<button  class="btn-primary" id="asubtls">Submit</button>
		<p>Please save your password in your notebook. <br>The password will be used when you generate client keys.</p>
<hr>
		<h4>Client Section</h4>
			<table widht="80%">
				<tr>
					<td width="45%">
						<label data-rel="popover" data-content="Set the DNS of the PBX or the IP ADDRESS" for="DNS">DNS or IP:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the DNS, Host or IP ADDRESS.")?><br>
                                       	</span>
                                        </a>

					</td>
					<td>
						<input size="30" class="text ui-widget-content ui-corner-all" type="text" placeholder="my.host.name or 10.0.0.0" name="peerdns" id="peerdns" />
					</td>
				</tr>
				<tr>
					<td width="45%">
						<label data-rel="popover" data-content="Set the name of the company" for="comp">Company Name:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the Company Name string or whatever string to define the organizational name..")?><br>
                                       	</span>
                                        </a>

					</td>
					<td>
						<input size="30" class="text ui-widget-content ui-corner-all" type="text" placeholder="My Super PBX" name="peerco" id="peerco" />
					</td>
				</tr>
				<tr>
					<td width="45%">
						<label data-rel="popover" data-content="Set the name of the peer key" for="peername">Peer Name:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Define the Name of the peer's keys.")?><br>
                                       	</span>
                                        </a>

					</td>
					<td>
						<input size="30" class="text ui-widget-content ui-corner-all" type="text" placeholder="MyPhone" name="peername" id="peername" />
					</td>
				</tr>
				<tr>
					<td width="45%">
						<label data-rel="popover" data-content="Set the same password used to generate asterisk CA Certs" for="peerpwd">Password:</label>
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Use the same password defined on Server section in order to generate the keys.")?><br>
                                       	</span>
                                        </a>

					</td>
					<td>
						<input size="30" class="text ui-widget-content ui-corner-all" type="password" name="peerpwd" id="peerpwd" />
					</td>
				</tr>
			</table>

				<button  class="btn-primary" id="psubtls">Submit</button>
			<p> In order to generate the Client Keys, firts go to  create the Keys for your server.</p>

<hr>
	<h2><i class="icon-qrcode"></i>Certificates
					<a href="#" class="info">
                                       	<span>
                                               	<?php echo _("Download and Manage your files.")?><br>
                                       	</span>
                                        </a></h2>

	<div class="cert-manager"></div>


<styles>
	<link href='modules/tlstools/css/elfinder.min.css' rel='stylesheet'>
        <link href='modules/tlstools/css/elfinder.theme.css' rel='stylesheet'>
</styles>



