<?php
$request = curl_init("https://discord.com/api/v9/guilds/836682566811385856/messages/search?channel_id=836682566811385859");
$header = array();
$header[] = "authorization: ODQwNTc1MDU0NjUwODAyMjA2.YJaMrw.1q_7efKWBmbdCuCazKFCh8U-hEg";
$header[] = "cookie: __cfduid=d51087ef0bc6861bd4e1b63fecf7f67751620479094; __dcfduid=7467b79484e347b820d124c4ecb07ffb; locale=fr";
$header[] = "x-super-properties: eyJvcyI6IldpbmRvd3MiLCJicm93c2VyIjoiQ2hyb21lIiwiZGV2aWNlIjoiIiwic3lzdGVtX2xvY2FsZSI6ImZyLUZSIiwiYnJvd3Nlcl91c2VyX2FnZW50IjoiTW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzg4LjAuNDMyNC4xMDQgU2FmYXJpLzUzNy4zNiIsImJyb3dzZXJfdmVyc2lvbiI6Ijg4LjAuNDMyNC4xMDQiLCJvc192ZXJzaW9uIjoiMTAiLCJyZWZlcnJlciI6IiIsInJlZmVycmluZ19kb21haW4iOiIiLCJyZWZlcnJlcl9jdXJyZW50IjoiIiwicmVmZXJyaW5nX2RvbWFpbl9jdXJyZW50IjoiIiwicmVsZWFzZV9jaGFubmVsIjoic3RhYmxlIiwiY2xpZW50X2J1aWxkX251bWJlciI6ODMzNjQsImNsaWVudF9ldmVudF9zb3VyY2UiOm51bGx9";

curl_setopt($request, CURLOPT_HTTPHEADER, $header);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($request);

$count = json_decode($result);
$savecount =  $count->total_results;
echo json_encode(["message_count" => $savecount]);
?>