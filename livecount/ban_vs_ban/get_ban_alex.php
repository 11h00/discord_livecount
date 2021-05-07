<?php
$request = curl_init("https://discord.com/api/v9/guilds/840253756883861514/bans");
$header = array();
$header[] = "authorization: ODI4NDA1NDIxOTA2NTkxNzQ1.YJUMKQ.0_Rc7Vh-vjzmMOvRmclOq7cWHk4";
$header[] = "cookie: _ga=GA1.2.407406582.1614533069; _fbp=fb.1.1614533070150.273449936; __dcfduid=534b027d9c06a921f6c0e296104274e6; __cfduid=dc3b723d4dd281a3389a6bb461d4fe1cf1619717552; __stripe_mid=5af35bbd-773f-40cb-bb3e-f1a92c36e57f21efd1; locale=es-ES";
$header[] = "x-super-properties: eyJvcyI6IldpbmRvd3MiLCJicm93c2VyIjoiQ2hyb21lIiwiZGV2aWNlIjoiIiwic3lzdGVtX2xvY2FsZSI6ImZyLUZSIiwiYnJvd3Nlcl91c2VyX2FnZW50IjoiTW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg4LjAuNDMyNC4xMDQgU2FmYXJpLzUzNy4zNiIsImJyb3dzZXJfdmVyc2lvbiI6Ijg4LjAuNDMyNC4xMDQiLCJvc192ZXJzaW9uIjoiMTAiLCJyZWZlcnJlciI6IiIsInJlZmVycmluZ19kb21haW4iOiIiLCJyZWZlcnJlcl9jdXJyZW50IjoiIiwicmVmZXJyaW5nX2RvbWFpbl9jdXJyZW50IjoiIiwicmVsZWFzZV9jaGFubmVsIjoic3RhYmxlIiwiY2xpZW50X2J1aWxkX251bWJlciI6ODMzNjQsImNsaWVudF9ldmVudF9zb3VyY2UiOm51bGx9";

curl_setopt($request, CURLOPT_HTTPHEADER, $header);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($request);
$count = json_decode($result);
$bans = count($count);
echo json_encode(["ban_count" => $bans]);
?>