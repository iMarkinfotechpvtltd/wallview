<?php
include('../../../../wp-config.php');
?>
<?php

$wall_11  = $_GET['wall_11'];
$wall_12  = $_GET['wall_12'];
$wall_21  = $_GET['wall_21'];
$wall_22  = $_GET['wall_22'];
$wall_31  = $_GET['wall_31'];
$wall_32  = $_GET['wall_32'];
$wall_41  = $_GET['wall_41'];
$wall_42  = $_GET['wall_42'];
$area     = $_GET['area'];
$details  = $_GET['details'];
$other_ifo = $_GET['other_ifo'];
$wall_type = $_GET['wall_type'];
$email    = $_GET['email_3'];
$name     = $_GET['name_3'];
$phone     = $_GET['phone_3'];
$suburb    = $_GET['suburb'];
$admn_mail = $_GET['mail1'];

//echo $admn_mail;

$headers = 'From: Wallview <info@wallview.com.au>' . "\r\n";
$headers .= 'Reply-To:'.$email.' ';
	$to = $admn_mail;
	$subject = 'Wallview';
	$body = '<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							New customer order detail
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello,   Admin</h3></td>
						</tr>
						<tr>
						<td><h3>Customer Order Details<h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
									
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Wall 1(Height):</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$wall_11.'</td>
									</tr>
									<tr>
										<td align="right" height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-top:1px solid #efefef;  border-bottom:1px solid #efefef; border-right:1px solid #efefef; border-left:1px solid #efefef;padding-top:8px;  padding-bottom:8px;  padding-left:8px;   padding-right:8px;"><strong>Wall 1(Width):</strong></td>
										<td  height="20" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; padding:8px;">'.$wall_12.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 2(Height)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_21.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 2(Width)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_22.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 3(Height)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_31.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 3(Width)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_32.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 4(Height)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_41.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall 4(Width)</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_42.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Total area</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$area.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Details</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$details.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Other info:</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$other_ifo.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Wall  type:</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$wall_type.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Email :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;">'.$email.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong> Name :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'.$name.'</td>
									</tr>
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Phone Number :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $phone.'</td>
									</tr>
									
									<tr>
										<td  align="right" style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border:1px solid #efefef; border-top:0px; padding:8px;"><strong>Suburb :</strong></td>
										<td  style="width:20%; font-family:PT Sans,sans-serif; font-size:13px; border-right:1px solid #efefef; border-bottom:1px solid #efefef; padding:8px;">'. $suburb.'</td>
									</tr>
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b>Wallview</b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $body, $headers );

	$headers = 'From: Wallview <info@wallview.com.au>' . "\r\n";
	$to = $email;
	$subject = 'Wallview';
	$body = '<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid">
			<tr>
				<td>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:0px solid #ccc; margin-top:0px;">
						<!-- -->
						<tr align="center" >
							<td style="font-family:arial;  "><strong>
							Thanks for your enquiry
							</strong></td>
						</tr><!-- -->
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="10" width="90%" style="border:0px solid">
						<tr>
						<td><h3>Hello, '.$name.'</h3></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" border="0" cellpadding="0" width="100%">
								
									
									
									
									<div> Thank you for your enquiry. We will be in touch with you soon.</div> 
													<div></div>
													<div>Regards,</div> 
													<div>Tere,</div> 
													<div>Wallview</div> 
													<div>wallview.com.au</div>
										
								</table>
							</td>
							<td width="30"></td> 
						</tr>
					</table>
					<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
						<tr>
							<td align="center" style="font-family:PT Sans,sans-serif; font-size:13px; padding:15px 0; border-top:1px solid;"> 
							<b>Wallview</b></strong></td> 
						</tr>
					</table>
				</td>   
			</tr>
		</table>
<style>
    td{width:100%;}

</style>';
	wp_mail( $to, $subject, $body, $headers );
?>
