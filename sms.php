
<?php
require 'vendor/autoload.php';
	$sdk = new Aws\Sns\SnsClient([
		'region'  => 'ap-southeast-1',
		'version' => 'latest',
		'credentials' => ['key' => 'Key', 'secret' => 'Password']
	]);
	$result1 = $sdk->SetSMSAttributes([
        'attributes' => [
            'DefaultSMSType' => 'Transactional',
        ],
    ]);
$result = $sdk->publish([
    'Message' => 'Your Message',
    'PhoneNumber' => 'Phone number',
    'MessageAttributes' => ['AWS.SNS.SMS.SenderID' => [
         'DataType' => 'String',
         'StringValue' => 'WebNiraj'
      ]
  ]]);
	print_r( $result );
?>
