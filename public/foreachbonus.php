<?php

	$states = [
			    'AL' => 'Alabama',
			    'AK' => 'Alaska',
			    'AZ' => 'Arizona',
			    'AR' => 'Arkansas',
			    'CA' => 'California',
			    'CO' => 'Colorado',
			    'CT' => 'Connecticut',
			    'DE' => 'Delaware',
			    'DC' => 'District of Columbia',
			    'FL' => 'Florida',
			    'GA' => 'Georgia',
			    'HI' => 'Hawaii',
			    'ID' => 'Idaho',
			    'IL' => 'Illinois',
			    'IN' => 'Indiana',
			    'IA' => 'Iowa',
			    'KS' => 'Kansas',
			    'KY' => 'Kentucky',
			    'LA' => 'Louisiana',
			    'ME' => 'Maine',
			    'MD' => 'Maryland',
			    'MA' => 'Massachusetts',
			    'MI' => 'Michigan',
			    'MN' => 'Minnesota',
			    'MS' => 'Mississippi',
			    'MO' => 'Missouri',
			    'MT' => 'Montana',
			    'NE' => 'Nebraska',
			    'NV' => 'Nevada',
			    'NH' => 'New Hampshire',
			    'NJ' => 'New Jersey',
			    'NM' => 'New Mexico',
			    'NY' => 'New York',
			    'NC' => 'North Carolina',
			    'ND' => 'North Dakota',
			    'OH' => 'Ohio',
			    'OK' => 'Oklahoma',
			    'OR' => 'Oregon',
			    'PA' => 'Pennsylvania',
			    'PR' => 'Puerto Rico',
			    'RI' => 'Rhode Island',
			    'SC' => 'South Carolina',
			    'SD' => 'South Dakota',
			    'TN' => 'Tennessee',
			    'TX' => 'Texas',
			    'VI' => 'US Virgin Islands',
			    'UT' => 'Utah',
			    'VT' => 'Vermont',
			    'VA' => 'Virginia',
			    'WA' => 'Washington',
			    'WV' => 'West Virginia',
			    'WI' => 'Wisconsin',
			    'WY' => 'Wyoming'
			  ];

$findx = 'x';
$finda = 'a';
$findvowel = 'a,e,i,o,u';

$pos = strpos($states, $findx);
$posit = strpos($states,$finda);
$position = strpos($states, $findvowel);

foreach ($states as $abbreviation => $place) {
	
	if ($pos === false) {
		echo $place;
	}

	if ($posit === true) {
		echo $place;
	}

	if ($position === true) {
		echo $place;
	}

};





?>