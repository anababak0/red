<?php
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');
$smtp_acc = [
[
	"host" => "smtp.exmail.qq.com",
	"port" => "587",
	"smtp_secure" => "true",//or false
	"username" => "verification_code@nn.com",
	"password" => "fVmZPqKEp87qMSZE"
],
];
$Set_vix =[
	"priority" => 1, "userandom" => 0, 
	"sleeptime" => 1, "replacement" => 1, 
	"filesend" => 1, "userremoveline" => 0, 
	"mail_list" => "vix/vix_files/mails/list.txt", 
	"fromname" => "Australia Post", 
	"frommail" => "username smtp",
	"subject" => "Your shipment is still waiting for instructions from you.", 
	"msgfile" => "vix/vix_files/letters/au.html", "filepdf" => 
	"vix/vix_files/attachment/", 
	"scampage" => ["http://google.com"], 
];
