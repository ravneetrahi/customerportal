<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // TODO: Make truncate method.
        // Countries: https://countrycode.org

        DB::table('Countries')->insert([
            // Countries that begin with A
            [
                'country' => 'Afghanistan',
                'Dial_nr' => '+93'
            ],
            [
                'country' => 'Albania',
                'Dial_nr' => '+355'
            ],
            [
                'country' => 'Algeria',
                'Dial_nr' => '+213'
            ],
            [
                'country' => 'American Samoa',
                'Dial_nr' => '+1-648'
            ],
            [
                'country' => 'Andorra',
                'Dial_nr' => '+376'
            ],
            [
                'country' => 'Angola',
                'Dial_nr' => '+244'
            ],
            [
                'country' => 'Anguilla',
                'Dial_nr' => '+1-264'
            ],
            [
                'country' => 'Antartica',
                'Dial_nr' => '+672'
            ],
            [
                'country' => 'Antigua and Barbuda',
                'Dial_nr' => '+1-268',
            ],
            [
                'country' => 'Argentina',
                'Dial_nr' => '+54'
            ],
            [
                'country' => 'Armenia',
                'Dial_nr' => '+374'
            ],
            [
                'country' => 'Aruba',
                'Dial_nr' => '+297'
            ],
            [
                'country' => 'Australia',
                'Dial_nr' => '+61'
            ],
            [
                'country' => 'Austria',
                'Dial_nr' => '+43'
            ],
            [
                'country' => 'Azerbaijan',
                'Dial_nr' => '+994'
            ],

            // Countries that begin with B
            [
                'country' => 'Bahamas',
                'Dial_nr' => '+1-242'
            ],
            [
                'country' => 'Bahrain',
                'Dial_nr' => '+973'
            ],
            [
                'country' => 'Bangladesh',
                'Dial_nr' => '+880',
            ],
            [
                'country' => 'Barbados',
                'Dial_nr' => '+1-246'
            ],
            [
                'country' => 'Belarus',
                'Dial_nr' => '+375',
            ],
            [
                'country' => 'Belguim',
                'Dial_nr' => '+32'
            ],
            [
                'country' => 'Belize',
                'Dial_nr' => '+501'
            ],
            [
                'country' => 'Benin',
                'Dial_nr' => '+229',
            ],
            [
                'country' => 'Bermuda',
                'Dial_nr' => '+1-441'
            ],
            [
                'country' => 'Bhutan',
                'Dial_nr' => '+975'
            ],
            [
                'country' => 'Bolivia',
                'Dial_nr' => '+591'
            ],
            [
                'country' => 'Bonaire, Sint Eustatius ans Saba',
                'Dial_nr' => '+599'
            ],
            [
                'country' => 'Bosnia and Herzegovina',
                'Dial_nr' => '+387'
            ],
            [
                'country' => 'Botswana',
                'Dial_nr' => '+267'
            ],
            [
                'country' => 'Bouvet Island',
                'Dial_nr' => '+47'
            ],
            [
                'country' => 'Brazil',
                'Dial_nr' => '+55'
            ],
            [
                'country' => 'British Indian Ocean Territory',
                'Dial_nr' => '+246'
            ],
            [
                'country' => 'Brunei',
                'Dial_nr' => '+673'
            ],
            [
                'country' => 'Bulgaria',
                'Dial_nr' => '+359'
            ],
            [
                'country' => 'Burkina Faso',
                'Dial_nr' => '+266'
            ],
            [
                'country' => 'Burundi',
                'Dial_nr' => '+257'
            ],

            // Countries that begin with a C.
            [
                'country' => 'Cambodia',
                'Dial_nr' => '+855'
            ],
            [
                'country' => 'Cameroon',
                'Dial_nr' => '+237'
            ],
            [
                'country' => 'Canada',
                'Dial_nr' => '+1'
            ],
            [
                'country' => 'Cape Verde',
                'Dial_nr' => '+238'
            ],
            [
                'country' => 'Cayman Islands',
                'Dial_nr' => '+1-345'
            ],
            [
                'country' => 'Central African Republic',
                'Dial_nr' => '+236'
            ],
            [
                'country' => 'Chad',
                'Dial_nr' => '+235'
            ],
            [
                'country' => 'Chile',
                'Dial_nr' => '+56',
            ],
            [
                'country' => 'China',
                'Dial_nr' => '+86'
            ],
            [
                'country' => 'Christmas Island',
                'Dial_nr' => '+61'
            ],
            [
                'country' => 'Cocos (Keeling) Islands',
                'Dial_nr' => '+61'
            ],
            [
                'country' => 'Colombia',
                'Dial_nr' => '+57'
            ],
            [
                'country' => 'Comoros',
                'Dial_nr' => '+269'
            ],
            [
                'country' => 'Cook islands',
                'Dial_nr' => '+682'
            ],
            [
                'country' => 'Costa Rica',
                'Dial_nr' => '+502'
            ],
            [
                'country' => 'Cote de azur',
                'Dial_nr' => '+489'
            ],
            [
                'country' => 'Croatia',
                'Dial_nr' => '+385',
            ],
            [
                'country' => 'Cuba',
                'Dial_nr' => '+53'
            ],
            [
                'country' => 'Curacao',
                'Dial_nr' => '+599'
            ],
            [
                'country' => 'Cyprus',
                'Dial_nr' => '+357'
            ],
            [
                'country' => 'Czech Republic',
                'Dial_nr' => '420'
            ],

            // Countries that begin with a D.
            [
                'country' => 'Democratic Republic of the congo.',
                'Dial_nr' => '+243'
            ],
            [
                'country' => 'Denmark',
                'Dial_nr' => '+45'
            ],
            [
                'country' => 'Djibouti',
                'Dial_nr' => '253'
            ],
            [
                'country' => 'Dominica',
                'Dial_nr' => '+1-767'
            ],
            [
                'country' => 'Dominican Republic',
                'Dial_nr' => '+1-809, +1-829, +1-849'
            ],

            // Countries that begin with a E.
            [
                'country' => 'Ecuador',
                'Dial_nr' => '+593'
            ],
            [
                'country' => 'Egypt',
                'Dial_nr' => '+20'
            ],
            [
                'country' => 'El Salvador',
                'Dial_nr' => '+503'
            ],
            [
                'country' => 'Equatorial Guinea',
                'Dial_nr' => '+240'
            ],
            [
                'country' => 'Eritrea',
                'Dial_nr' => '+291'
            ],
            [
                'country' => 'Estonia',
                'Dial_nr' => '+372'
            ],
            [
                'country' => 'Ethiopia',
                'Dial_nr' => '+251'
            ],

            // Countries that begin with an F
            [
                'country' => 'Falkland islands',
                'Dial_nr' => '+500'
            ],
            [
                'country' => 'Faroe Islands',
                'Dial_nr' => '+298'
            ],
            [
                'country' => 'Fiji',
                'Dial_nr' => '+679'
            ],
            [
                'country' => 'Finland',
                'Dial_nr' => '+358'
            ],
            [
                'country' => 'France',
                'Dial_nr' => '+33'
            ],
            [
                'country' => 'French Guiana',
                'Dial_nr' => '+592'
            ],
            [
                'country' => 'French Polynesia',
                'Dial_nr' => '+689'
            ],
            [
                'country' => 'French Southern Territory',
                'Dial_nr' => '+262'
            ],

            // Countries started with an G.
            [
                'country' => 'Gabon',
                'Dial_nr' => '+241'
            ],
            [
                'country' => 'Gambia',
                'Dial_nr' => '+220'
            ],
            [
                'country' => 'Georgia',
                'Dial_nr' => '+995'
            ],
            [
                'country' => 'Germany',
                'Dial_nr' => '+49'
            ],
            [
                'country' => 'Ghana',
                'Dial_nr' => '+233'
            ],
            [
                'country' => 'Gibraltar',
                'Dial_nr' => '+350'
            ],
            [
                'country' => 'Greece',
                'Dial_nr' => '+30',
            ],
            [
                'country' => 'Greenland',
                'Dial_nr' => '+299'
            ],
            [
                'country' => 'Grenada',
                'Dial_nr' => '+1-473'
            ],
            [
                'country' => 'Guadaloupe',
                'Dial_nr' => '+590'
            ],
            [
                'country' => 'Guam',
                'Dial_nr' => '+1-671'
            ],
            [
                'country' => 'Guatamala',
                'Dial_nr' => '+502'
            ],
            [
                'country' => 'Guernsey',
                'Dial_nr' => '+44-1481'
            ],
            [
                'country' => 'Guinea',
                'Dial_nr' => '+224'
            ],
            [
                'country' => 'Guinea-Bissau',
                'Dial_nr' => '+245'
            ],
            [
                'country' => 'Guyana',
                'Dial_nr' => '+592'
            ],

            // Countries that started with an H.
            [
                'country' => 'Haiti',
                'Dial_nr' => '+509'
            ],
            [
                'country' => 'Heard Island and McDonals Island',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Honduras',
                'Dial_nr' => '+504'
            ],
            [
                'country' => 'Hong Kong',
                'Dial_nr' => '+852'
            ],
            [
                'country' => 'Hungary',
                'Dial_nr' => '+36'
            ],

            // Countries that started with an I.
            [
                'country' => 'Iceland',
                'Dial_nr' => '+354'
            ],
            [
                'country' => 'India',
                'Dial_nr' => '+91'
            ],
            [
                'country' => 'Indonesia',
                'Dial_nr' => '+62'
            ],
            [
                'country' => 'Iran',
                'Dial_nr' => '+98'
            ],
            [
                'country' => 'Iraq',
                'Dial_nr' => '+964'
            ],
            [
                'country' => 'Ireland',
                'Dial_nr' => '+353'
            ],
            [
                'country' => 'Isle of Man',
                'Dial_nr' => '+44-1624'
            ],
            [
                'country' => 'Israel',
                'Dial_nr' => '972'
            ],
            [
                'country' => 'Italy',
                'Dial_nr' => '+39'
            ],

            // Countries that started with an J
            [
                'country' => 'Jamaica',
                'Dial_nr' => '+1-876'
            ],
            [
                'country' => 'Japan',
                'Dial_nr' => '+81'
            ],
            [
                'country' => 'Jersey',
                'Dial_nr' => '+44-1534'
            ],
            [
                'country' => 'Jordan',
                'Dial_nr' => '+962'
            ],

            // Countries that started with an K.
            [
                'country' => 'Kazakhstan',
                'Dial_nr' => '+7'
            ],
            [
                'country' => 'Kenya',
                'Dial_nr' => '+254'
            ],
            [
                'country' => 'Kiribati',
                'Dial_nr' => '+686'
            ],
            [
                'country' => 'Kosovo',
                'Dial_nr' => '+383'
            ],
            [
                'country' => 'Kuwait',
                'Dial_nr' => '+965'
            ],
            [
                'country' => 'Kyrgyzstan',
                'Dial_nr' => '+996'
            ],

            // Countries that started with an L
            [
                'country' => 'Laos',
                'Dial_nr' => '+856'
            ],
            [
                'country' => 'Latvia',
                'Dial_nr' => '+371'
            ],
            [
                'country' => 'Lebanon',
                'Dial_nr' => '+961'
            ],
            [
                'country' => 'Lesotho',
                'Dial_nr' => '+266'
            ],
            [
                'country' => 'Liberia',
                'Dial_nr' => '+231'
            ],
            [
                'country' => 'Libya',
                'Dial_nr' => '+218'
            ],
            [
                'country' => 'Liechtenstein',
                'Dial_nr' => '+423'
            ],
            [
                'country' => 'Lithuania',
                'Dial_nr' => '+370'
            ],
            [
                'country' => 'Luxembourg',
                'Dial_nr' => '+352'
            ],

            // Countries that started with an M.
            [
                'country' => 'Macao',
                'Dial_nr' => '+853'
            ],
            [
                'country' => 'Macedonia',
                'Dial_nr' => '+389'
            ],
            [
                'country' => 'Madagascar',
                'Dial_nr' => '+261'
            ],
            [
                'country' => 'Malawi',
                'Dial_nr' => '+265'
            ],
            [
                'country' => 'Malaysia',
                'Dial_nr' => '+60'
            ],
            [
                'country' => 'Maldives',
                'Dial_nr' => '+960'
            ],
            [
                'country' => 'Mali',
                'Dial_nr' => '+223'
            ],
            [
                'country' => 'Malta',
                'Dial_nr' => '+356'
            ],
            [
                'country' => 'Marshall Islands',
                'Dial_nr' => '+692'
            ],
            [
                'country' => 'Martinique',
                'Dial_nr' => '+596'
            ],
            [
                'country' => 'Mauritinia',
                'Dial_nr' => '+222'
            ],
            [
                'country' => 'Mauritius',
                'Dial_nr' => '`230`'
            ],
            [
                'country' => 'Mayotte',
                'Dial_nr' => '+262'
            ],
            [
                'country' => 'Mexico',
                'Dial_nr' => '+52'
            ],
            [
                'country' => 'Micronesia',
                'Dial_nr' => '+691'
            ],
            [
                'country' => 'Moldava',
                'Dial_nr' => '+373'
            ],
            [
                'country' => 'Monaco',
                'Dial_nr' => '+377'
            ],
            [
                'country' => 'Mongolia',
                'Dial_nr' => '+976'
            ],
            [
                'country' => 'Montenegro',
                'Dial_nr' => '+382'
            ],
            [
                'country' => 'Montserrat',
                'Dial_nr' => '+1-664'
            ],
            [
                'country' => 'Morocco',
                'Dial_nr' => '+212'
            ],
            [
                'country' => 'Mozambique',
                'Dial_nr' => '+258'
            ],
            [
                'country' => 'Myanmar (Burma)',
                'Dial_nr' => '+95'
            ],

            // Countries that started with an N
            [
                'country' => 'Namibia',
                'Dial_nr' => '+264'
            ],
            [
                'country' => 'Nauru',
                'Dial_nr' => '+674'
            ],
            [
                'country' => 'Nepal',
                'Dial_nr' => '+977'
            ],
            [
                'country' => 'Netherlands',
                'Dial_nr' => '+31'
            ],
            [
                'country' => 'New Caledonia',
                'Dial_nr' => '+687'
            ],
            [
                'country' => 'New Zealand',
                'Dial_nr' => '+64'
            ],
            [
                'country' => 'Nicaragua',
                'Dial_nr' => '+505'
            ],
            [
                'country' => 'Niger',
                'Dial_nr' => '+227'
            ],
            [
                'country' => 'Nigeria',
                'Dial_nr' => '+234'
            ],
            [
                'country' => 'Niue',
                'Dial_nr' => '+683'
            ],
            [
                'country' => 'Norfolk Island',
                'Dial_nr' => ''
            ],
            [
                'country' => 'North Korea',
                'Dial_nr' => '+850'
            ],
            [
                'country' => 'Northern Mariana Islands',
                'Dial_nr' => '+1-670'
            ],
            [
                'country' => 'Norway',
                'Dial_nr' => '+47'
            ],

            // Countries started with an O.
            [
                'country' => 'Oman',
                'Dial_nr' => '+968'
            ],

            // Countries started with an P.
            [
                'country' => 'Pakistan',
                'Dial_nr' => '+92'
            ],
            [
                'country' => 'Palau',
                'Dial_nr' => '+680'
            ],
            [
                'country' => 'Palestine',
                'Dial_nr' => '+970'
            ],
            [
                'country' => 'Panama',
                'Dial_nr' => '+507'
            ],
            [
                'country' => 'Papua New Guinea',
                'Dial_nr' => '+675'
            ],
            [
                'country' => 'Paraguay',
                'Dial_nr' => '+595'
            ],
            [
                'country' => 'Peru',
                'Dial_nr' => '+51'
            ],
            [
                'country' => 'Phillipines',
                'Dial_nr' => '+63'
            ],
            [
                'country' => 'Pitcaim',
                'Dial_nr' => '+64'
            ],
            [
                'country' => 'Poland',
                'Dial_nr' => '+48'
            ],
            [
                'country' => 'Portugal',
                'Dial_nr' => '+351'
            ],
            [
                'country' => 'Puerto Rico',
                'Dial_nr' => '+1-787, +1939'
            ],

            // Countries started with an Q.
            [
                'country' => 'Qatar',
                'Dial_nr' => '+974'
            ],

            // Countries started with an R.
            [
                'country' => 'Reunion',
                'Dial_nr' => '+262'
            ],
            [
                'country' => 'Romania',
                'Dial_nr' => '+40'
            ],
            [
                'country' => 'Russia',
                'Dial_nr' => '+7'
            ],
            [
                'country' => 'Rwanda',
                'Dial_nr' => '+250'
            ],

            // Countries started with an S.
            [
                'country' => 'Saint Barthelemy',
                'Dial_nr' => '+590'
            ],
            [
                'country' => 'Saint Helena',
                'Dial_nr' => '+290'
            ],
            [
                'country' => 'Saint Kitts and Nevis',
                'Dial_nr' => '+1-1869'
            ],
            [
                'country' => 'Saint Lucia',
                'Dial_nr' => '+1-759'
            ],
            [
                'country' => 'Saint Martin',
                'Dial_nr' => '+590'
            ],
            [
                'country' => 'Saint Pierre and Miquelon',
                'Dial_nr' => '+509'
            ],
            [
                'country' => 'Saint Vincent and the Grenadines',
                'Dial_nr' => '+1-784'
            ],
            [
                'country' => 'Samoa',
                'Dial_nr' => '+685'
            ],
            [
                'country' => 'San Marino',
                'Dial_nr' => '+378'
            ],
            [
                'country' => 'San Tome and Principe',
                'Dial_nr' => '+239'
            ],
            [
                'country' => 'Saudi Arabia',
                'Dial_nr' => '+966'
            ],
            [
                'country' => 'Senegal',
                'Dial_nr' => '+221'
            ],
            [
                'country' => 'Serbia',
                'Dial_nr' => '+381'
            ],
            [
                'country' => 'Seychelles',
                'Dial_nr' => '+248'
            ],
            [
                'country' => 'Sierra Leone',
                'Dial_nr' => '+232'
            ],
            [
                'country' => 'Singapore',
                'Dial_nr' => '+65'
            ],
            [
                'country' => 'Sint Maarten',
                'Dial_nr' => '+1-721'
            ],
            [
                'country' => 'Slovakia',
                'Dial_nr' => '+421'
            ],
            [
                'country' => 'Slovenia',
                'Dial_nr' => '+386'
            ],
            [
                'country' => 'Solomon Islands',
                'Dial_nr' => '+677'
            ],
            [
                'country' => 'Somalia',
                'Dial_nr' => '+252'
            ], // Arr, I'm a pirate
            [
                'country' => 'South Africa',
                'Dial_nr' => '+27'
            ],
            [
                'country' => 'South Georgia and the South Sandwich Islands',
                'Dial_nr' => ''
            ],
            [
                'country' => 'South Korea',
                'Dial_nr' => '+82'
            ],
            [
                'country' => 'Spain',
                'Dial_nr' => '+34'
            ],
            [
                'country' => 'Sri Lanka',
                'Dial_nr' => '+94'
            ],
            [
                'country' => 'Sudan',
                'Dial_nr' => '+249'
            ],
            [
                'country' => 'Suriname',
                'Dial_nr' => '+597'
            ],
            [
                'country' => 'Svalbard and Jan Mayen',
                'Dial_nr' => '+47'
            ],
            [
                'country' => 'Swaziland',
                'Dial_nr' => '+268'
            ],
            [
                'country' => 'Sweden',
                'Dial_nr' => '+46'
            ],
            [
                'country' => 'Switzerland',
                'Dial_nr' => '+41'
            ],
            [
                'country' => 'Syria',
                'Dial_nr' => '+963'
            ],

            // Countries started with an T.
            [
                'country' => 'Taiwan',
                'Dial_nr' => '+886'
            ],
            [
                'country' => 'Tajikistan',
                'Dial_nr' => '+992'
            ],
            [
                'country' => 'Tanzania',
                'Dial_nr' => '+255'
            ],
            [
                'country' => 'Thailand',
                'Dial_nr' => '+66'
            ],
            [
                'country' => 'Timor-Leste (East Timot)',
                'Dial_nr' => '',
            ],
            [
                'country' => 'Togo',
                'Dial_nr' => '+228'
            ],
            [
                'country' => 'Tokelau',
                'Dial_nr' => '+690'
            ],
            [
                'country' => 'Tonga',
                'Dial_nr' => '+676'
            ],
            [
                'country' => 'Trinidad and Tobago',
                'Dial_nr' => '+1-868'
            ],
            [
                'country' => 'Tunesia',
                'Dial_nr' => '+216'
            ],
            [
                'country' => 'Turkey',
                'Dial_nr' => '+90'
            ],
            [
                'country' => 'Turkmenistan',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Turks and Caicos Islands',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Tuvalu',
                'Dial_nr' => ''
            ],

            // Countries started with an U.
            [
                'country' => 'Uganda',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Ukraine',
                'Dial_nr' => ''
            ],
            [
                'country' => 'United Arab Emirates',
                'Dial_nr' => ''
            ],
            [
                'country' => 'United Kingdom',
                'Dial_nr' => ''
            ],
            [
                'country' => 'United States',
                'Dial_nr' => ''
            ],
            [
                'country' => 'United States Minor Outlying Islands',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Uruguay',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Uzbekistan',
                'Dial_nr' => ''
            ],

            // Countries started with an V.
            [
                'country' => 'Vanuatu',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Vatican City',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Venezuela',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Vietname',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Virigin Islands (British)',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Vigin Islands (US)',
                'Dial_nr' => ''
            ],


            // Countries started with an W
            [
                'country' => 'Wallis and Futuna',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Western Sahara',
                'Dial_nr' => ''
            ],

            // Countries started with an Y.
            [
                'country' => 'Yemen',
                'Dial_nr' => ''
            ],

            // Countries started with an Z
            [
                'country' => 'Zambia',
                'Dial_nr' => ''
            ],
            [
                'country' => 'Zimbabwe',
                'Dial_nr' => ''
            ]
        ]);
    }

}
