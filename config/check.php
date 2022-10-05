<?php
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$postRequest = "$host$uri";
$supot = urlencode($postRequest);
$cURLConnection = curl_init("https://transparencyreport.google.com/transparencyreport/api/v3/safebrowsing/status?site=$supot");
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'cookie: NID=511=cWisJaadyVzKajHfU5sdlgteoqfMKZwYCmG77OZVUWZbSTnugOBaedqFApkRwM00FzIEx9EgO_M4leMK_UCc11QAXQtufKSFeO20Q9lvH8Hky0cjy0okUT0QgAfmrmWphVXhmtJGLie-Mwxyp-ZUXRSfyE-Q5MdcpuGQNuNGhbI; 1P_JAR=2022-07-09-23; _ga=GA1.3.744597814.1657410901; _gid=GA1.3.1766194154.1657410901; AEC=AakniGMKsk-B9bnRMrHvqDXERrNaVJiDUNI08ANlU473dwcV42FUC1d5gQ',
    'referer: https://transparencyreport.google.com/safe-browsing/search?url=$supot&hl=en', //Your referrer address
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36',
    'X-MicrosoftAjax: Delta=true'
];

curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);

$apiResponse = curl_exec($cURLConnection);
$sukses_login="1,0,0,0";
if(preg_match("/$sukses_login/",$apiResponse)){
	echo "<a style='color:green'>SAFE!";
}
elseif(preg_match("/4,0,0,0/",$apiResponse)){
	echo "<a style='color:green'>SAFE!";
	}
else{ 
	echo "<a style='color:red'>RED FLAG! (DECEPTIVE)";
}
curl_close($cURLConnection);
?>