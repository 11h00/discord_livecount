<?php
$request = curl_init("https://discord.com/api/v9/guilds/836682566811385856/messages/search?channel_id=836682566811385859");
$header = array();
$header[] = "authorization: ODI4NDA1NDIxOTA2NTkxNzQ1.YHYcDA.nejVy4pjAQnS_VEEOSXLpi20y5M";
$header[] = "cookie: _ga=GA1.2.407406582.1614533069; _fbp=fb.1.1614533070150.273449936; __dcfduid=534b027d9c06a921f6c0e296104274e6; __cfduid=dc3b723d4dd281a3389a6bb461d4fe1cf1619717552; locale=es-ES";
$header[] = "referer: https://discord.com/channels/836682566811385856/836682566811385859";
$header[] = "x-super-properties: eyJvcyI6IldpbmRvd3MiLCJicm93c2VyIjoiQ2hyb21lIiwiZGV2aWNlIjoiIiwic3lzdGVtX2xvY2FsZSI6ImZyLUZSIiwiYnJvd3Nlcl91c2VyX2FnZW50IjoiTW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg4LjAuNDMyNC4xMDQgU2FmYXJpLzUzNy4zNiIsImJyb3dzZXJfdmVyc2lvbiI6Ijg4LjAuNDMyNC4xMDQiLCJvc192ZXJzaW9uIjoiMTAiLCJyZWZlcnJlciI6IiIsInJlZmVycmluZ19kb21haW4iOiIiLCJyZWZlcnJlcl9jdXJyZW50IjoiIiwicmVmZXJyaW5nX2RvbWFpbl9jdXJyZW50IjoiIiwicmVsZWFzZV9jaGFubmVsIjoic3RhYmxlIiwiY2xpZW50X2J1aWxkX251bWJlciI6ODMzNjQsImNsaWVudF9ldmVudF9zb3VyY2UiOm51bGx9";

curl_setopt($request, CURLOPT_HTTPHEADER, $header);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($request);
$count = json_decode($result);
$savecount =  $count->total_results;
echo json_encode(["message" => $savecount]);
?>