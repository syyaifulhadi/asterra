<?php 

function curl($url){
	$agents = array(
	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
	'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
	'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
	'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1'
 
	);
	$ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_USERAGENT,$agents[array_rand($agents)]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_VERBOSE, true);
          curl_setopt($ch, CURLOPT_HTTPHEADER, 
          	array('Upgrade-Insecure-Requests: 1','
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9')
          );
          curl_setopt($ch,CURLOPT_TIMEOUT,10);
          $result = curl_exec($ch);
          curl_close($ch);
          print_r($result);
}
$ads = array(
	'http://mineralscreamrobes.com/z8g78es0?pxej=32&refer=http%3A%2F%2Fgraduate.western.ac.th%2F&kw=%5B%22%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%AA%E0%B9%80%E0%B8%97%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99%22%2C%22%E2%80%93%22%2C%22western%22%2C%22university%22%5D&key=cfc12cd496054e5851cb2d9111c24e37&scrWidth=1366&scrHeight=768&tz=7&v=21.4.v.4&res=12.29&dev=r&adb=y&adb=y',
	'http://radarconsultation.com/k1eqg5k7vz?xxkn=27&refer=https%3A%2F%2Fkhmercommunityshop.netsoftex.dev%2F&kw=%5B%22shop%22%5D&key=2b808f6d6149bbc7bee6145e2bf0417c&scrWidth=1366&scrHeight=768&tz=7&v=21.4.v.4&res=12.31&dev=r&adb=y&adb=y',
	'http://hunchmotherhooddefine.com/z8g78es0?shu=f3b6ab45002bee33cde98f373d5dd936ceedb4f3f58f4e240a4f0d29fd4a63a2f75fdf6a3e4b21f36a8417481c88834d8590d7276ec2ddf8e8308be700f5c556d5b9b8fa56bb625f7785e81f7a8a19810fc1a283a92a48a17c45ba94249aee&pst=1620039507&rmtc=t&uuid=&pii=&in=false&key=cfc12cd496054e5851cb2d9111c24e37&refer=https%3A%2F%2Fwww.neelamenterprises.co.in%2F&tz=7&mbir=12&scrWidth=1366&scrHeight=768&dev=r&adb=y&kw=%5B%22pawned%22%2C%22by%22%2C%22mr%22%2C%22squarepants%22%2C%22%E2%80%93%22%2C%22hi%22%2C%22admin%22%2C%22sorry%22%5D&v=21.4.v.4&res=12.31',
	'http://cupidrecession.com/z8g78es0?lrks=90&refer=http%3A%2F%2Fgraduate.western.ac.th%2F&kw=%5B%22%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%A7%E0%B8%AA%E0%B9%80%E0%B8%97%E0%B8%B4%E0%B8%A3%E0%B9%8C%E0%B8%99%22%2C%22%E2%80%93%22%2C%22western%22%2C%22university%22%5D&key=cfc12cd496054e5851cb2d9111c24e37&scrWidth=1366&scrHeight=768&tz=7&v=21.4.v.4&res=12.29&dev=r&adb=y&adb=y',
	'http://jigsawthirsty.com/z8g78es0?rean=10&refer=https%3A%2F%2Fwww.neelamenterprises.co.in%2F&kw=%5B%22pawned%22%2C%22by%22%2C%22mr%22%2C%22squarepants%22%2C%22%E2%80%93%22%2C%22hi%22%2C%22admin%22%2C%22sorry%22%5D&key=cfc12cd496054e5851cb2d9111c24e37&scrWidth=1366&scrHeight=768&tz=7&v=21.4.v.4&res=12.31&dev=r&adb=y&adb=y',
	'http://hunchmotherhooddefine.com/k1eqg5k7vz?nzjhgec=16&refer=https%3A%2F%2Fkhmercommunityshop.netsoftex.dev%2F&kw=%5B%22shop%22%5D&key=2b808f6d6149bbc7bee6145e2bf0417c&scrWidth=1366&scrHeight=768&tz=7&v=21.4.v.4&res=12.31&dev=r&adb=y&adb=y'
 
	);
$i = 1;
while ($i = 30) {
	curl($ads[array_rand($ads)]);
	sleep(rand(1,5));
	$i++;
}
system('clear');
 ?>
