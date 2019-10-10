
<?php
require 'vendor/autoload.php';
	$sdk = new Aws\Sns\SnsClient([
		'region'  => 'ap-southeast-1',
		'version' => 'latest',
		'credentials' => ['key' => 'AKIA6FGFUGLZUHFCHHDR', 'secret' => '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']
	]);
	$result1 = $sdk->SetSMSAttributes([
        'attributes' => [
            'DefaultSMSType' => 'Transactional',
        ],
    ]);
$result = $sdk->publish([
    'Message' => 'Your Message',
    'PhoneNumber' => '+919824618237',
    'MessageAttributes' => ['AWS.SNS.SMS.SenderID' => [
         'DataType' => 'String',
         'StringValue' => 'WebNiraj'
      ]
  ]]);
	print_r( $result );
?>
