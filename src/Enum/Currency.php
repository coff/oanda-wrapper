<?php


namespace Coff\OandaWrapper\Enum;

class Currency extends Enum
{
    const   _default = 0,
            AED = 'AED',  // 784	2	United Arab Emirates dirham	 United Arab Emirates
            AMD = 'AMD',  // 051	2	Armenian dram	 Armenia
            ANG = 'ANG',  // 532	2	Netherlands Antillean guilder	 Curaçao (CW),  Sint Maarten (SX)
            AFN = 'AFN',  // 971	2	Afghan afghani	 Afghanistan
            ALL = 'ALL',  // 008	2	Albanian lek	 Albania
            AOA = 'AOA',  // 973	2	Angolan kwanza	 Angola
            ARS = 'ARS',  // 032	2   Argentine peso	 Argentina
            AUD = 'AUD',  // 036	2	Australian dollar	 Australia,  Christmas Island (CX),  Cocos (Keeling) Islands (CC),  Heard Island and McDonald Islands (HM),  Kiribati (KI),  Nauru (NR),  Norfolk Island (NF),  Tuvalu (TV)
            BAM = 'BAM',  // 977	2	Bosnia and Herzegovina convertible mark	 Bosnia and Herzegovina
            CAD = 'CAD',  // 124	2	Canadian dollar	 Canada
            CHF = 'CHF',  // 756	2	Swiss franc	  Switzerland,  Liechtenstein (LI)'
            CZK = 'CZK',  // 203	2	Czech koruna	 Czechia [10]
            DKK = 'DKK',  // 208	2	Danish krone	 Denmark,  Faroe Islands (FO),  Greenland (GL)
            EUR = 'EUR',  // 978	2	Euro	 Andorra (AD),  Austria (AT),  Belgium (BE),  Cyprus (CY),  Estonia (EE),  Finland (FI),  France (FR),  Germany (DE),  Greece (GR),  Guadeloupe (GP),  Ireland (IE),  Italy (IT),  Latvia (LV),  Lithuania (LT),  Luxembourg (LU),  Malta (MT),  Martinique (MQ),  Mayotte (YT),  Monaco (MC),  Montenegro (ME),  Netherlands (NL),  Portugal (PT),  Réunion (RE),  Saint Barthélemy (BL),  Saint Pierre and Miquelon (PM),  San Marino (SM),  Slovakia (SK),  Slovenia (SI),  Spain (ES)
            GBP = 'GBP',  // 826	2	Pound sterling	 United Kingdom, the  Isle of Man (IM, see Manx pound),  Jersey (JE, see Jersey pound), and  Guernsey (GG, see Guernsey pound)
            HKD = 'HKD',  // 344	2	Hong Kong dollar	 Hong Kong
            HRK = 'HRK',  // 191	2	Croatian kuna	 Croatia
            HUF = 'HUF',  // 348	2	Hungarian forint	 Hungary
            IDR = 'IDR',  // 360	2	Indonesian rupiah	 Indonesia
            ILS = 'ILS',  // 376	2	Israeli new shekel	 Israel
            INR = 'INR',  // 356	2	Indian rupee	 India,  Bhutan
            ISK = 'ISK',  // 352	0	Icelandic króna	 Iceland
            JPY = 'JPY',  // 392	0	Japanese yen	 Japan
            MXN = 'MXN',  // 484	2	Mexican peso	 Mexico
            NOK = 'NOK',  // 578	2	Norwegian krone	 Norway,  Svalbard and  Jan Mayen (SJ),  Bouvet Island (BV)
            NZD = 'NZD',  // 554	2	New Zealand dollar	 New Zealand,  Cook Islands (CK),  Niue (NU),  Pitcairn Islands (PN; see also Pitcairn Islands dollar),  Tokelau (TK)
            USD = 'USD',  // 840	2	United States dollar	 United States,  American Samoa (AS),  Barbados (BB) (as well as Barbados Dollar),  Bermuda (BM) (as well as Bermudian Dollar),  British Indian Ocean Territory (IO) (also uses GBP),  British Virgin Islands (VG),  Caribbean Netherlands (BQ - Bonaire, Sint Eustatius and Saba),  Ecuador (EC),  El Salvador (SV),  Guam (GU),  Haiti (HT),  Marshall Islands (MH),  Federated States of Micronesia (FM),  Northern Mariana Islands (MP),  Palau (PW),  Panama (PA) (as well as Panamanian Balboa),  Puerto Rico (PR),  Timor-Leste (TL),  Turks and Caicos Islands (TC),  U.S. Virgin Islands (VI),  United States Minor Outlying Islands
            PLN = 'PLN',  // 985	2	Polish złoty	 Poland
            QAR = 'QAR',  // 634	2	Qatari riyal	 Qatar
            RON = 'RON',  // 946	2	Romanian leu	 Romania
            RUB = 'RUB',  // 643	2	Russian ruble	 Russia
            SEK = 'SEK',  // 752	2	Swedish krona/kronor	 Sweden
            SGD = 'SGD',  // 702	2	Singapore dollar	 Singapore
            THB = 'THB',  // 764	2	Thai baht	 Thailand
            TRY = 'TRY',  // 949	2	Turkish lira	 Turkey
            UAH = 'UAH',  // 980	2	Ukrainian hryvnia	 Ukraine
            XAG = 'XAG',  // 961	.	Silver (one troy ounce)
            XAU = 'XAU',  // 959	.	Gold (one troy ounce)
            XPT = 'XPT',  // 962	.	Platinum (one troy ounce)
            ZAR = 'ZAR',  // 710	2	South African rand	 South Africa
            ZWL = 'ZWL';  // 932	2	Zimbabwean dollar A/10	 Zimbabwe

    /*
     * @todo rewrite currencies below as constants
     *
    AWG	533	2	Aruban florin	 Aruba
    AZN	944	2	Azerbaijani manat	 Azerbaijan

    BBD	052	2	Barbados dollar	 Barbados
    BDT	050	2	Bangladeshi taka	 Bangladesh
    BGN	975	2	Bulgarian lev	 Bulgaria
    BHD	048	3	Bahraini dinar	 Bahrain
    BIF	108	0	Burundian franc	 Burundi
    BMD	060	2	Bermudian dollar	 Bermuda
    BND	096	2	Brunei dollar	 Brunei
    BOB	068	2	Boliviano	 Bolivia
    BOV	984	2	Bolivian Mvdol (funds code)	 Bolivia
    BRL	986	2	Brazilian real	 Brazil
    BSD	044	2	Bahamian dollar	 Bahamas
    BTN	064	2	Bhutanese ngultrum	 Bhutan
    BWP	072	2	Botswana pula	 Botswana
    BYN	933	2	Belarusian ruble	 Belarus
    BZD	084	2	Belize dollar	 Belize
    CDF	976	2	Congolese franc	 Democratic Republic of the Congo
    CHE	947	2	WIR Euro (complementary currency)	  Switzerland
    CHW	948	2	WIR Franc (complementary currency)	  Switzerland
    CLF	990	4	Unidad de Fomento (funds code)	 Chile
    CLP	152	0	Chilean peso	 Chile
    CNY	156	2	Renminbi (Chinese) yuan[8]	 China
    COP	170	2	Colombian peso	 Colombia
    COU	970	2[9]	Unidad de Valor Real (UVR) (funds code)[9]	 Colombia
    CRC	188	2	Costa Rican colon	 Costa Rica
    CUC	931	2	Cuban convertible peso	 Cuba
    CUP	192	2	Cuban peso	 Cuba
    CVE	132	0	Cape Verde escudo	 Cape Verde

    DJF	262	0	Djiboutian franc	 Djibouti

    DOP	214	2	Dominican peso	 Dominican Republic
    DZD	012	2	Algerian dinar	 Algeria
    EGP	818	2	Egyptian pound	 Egypt
    ERN	232	2	Eritrean nakfa	 Eritrea
    ETB	230	2	Ethiopian birr	 Ethiopia

    FJD	242	2	Fiji dollar	 Fiji
    FKP	238	2	Falkland Islands pound	 Falkland Islands (pegged to GBP 1:1)
    GEL	981	2	Georgian lari	 Georgia
    GHS	936	2	Ghanaian cedi	 Ghana
    GIP	292	2	Gibraltar pound	 Gibraltar (pegged to GBP 1:1)
    GMD	270	2	Gambian dalasi	 Gambia
    GNF	324	0	Guinean franc	 Guinea
    GTQ	320	2	Guatemalan quetzal	 Guatemala
    GYD	328	2	Guyanese dollar	 Guyana

    HNL	340	2	Honduran lempira	 Honduras

    HTG	332	2	Haitian gourde	 Haiti

    IQD	368	3	Iraqi dinar	 Iraq
    IRR	364	2	Iranian rial	 Iran

    JMD	388	2	Jamaican dollar	 Jamaica
    JOD	400	3	Jordanian dinar	 Jordan

    KES	404	2	Kenyan shilling	 Kenya
    KGS	417	2	Kyrgyzstani som	 Kyrgyzstan
    KHR	116	2	Cambodian riel	 Cambodia
    KMF	174	0	Comoro franc	 Comoros
    KPW	408	2	North Korean won	 North Korea
    KRW	410	0	South Korean won	 South Korea
    KWD	414	3	Kuwaiti dinar	 Kuwait
    KYD	136	2	Cayman Islands dollar	 Cayman Islands
    KZT	398	2	Kazakhstani tenge	 Kazakhstan
    LAK	418	2	Lao kip	 Laos
    LBP	422	2	Lebanese pound	 Lebanon
    LKR	144	2	Sri Lankan rupee	 Sri Lanka
    LRD	430	2	Liberian dollar	 Liberia
    LSL	426	2	Lesotho loti	 Lesotho
    LYD	434	3	Libyan dinar	 Libya
    MAD	504	2	Moroccan dirham	 Morocco
    MDL	498	2	Moldovan leu	 Moldova
    MGA	969	1*[11]	Malagasy ariary	 Madagascar
    MKD	807	2	Macedonian denar	 Macedonia
    MMK	104	2	Myanmar kyat	 Myanmar
    MNT	496	2	Mongolian tögrög	 Mongolia
    MOP	446	2	Macanese pataca	 Macao
    MRU[12]	929	1*[11]	Mauritanian ouguiya	 Mauritania
    MUR	480	2	Mauritian rupee	 Mauritius
    MVR	462	2	Maldivian rufiyaa	 Maldives
    MWK	454	2	Malawian kwacha	 Malawi
    MXV	979	2	Mexican Unidad de Inversion (UDI) (funds code)	 Mexico
    MYR	458	2	Malaysian ringgit	 Malaysia
    MZN	943	2	Mozambican metical	 Mozambique
    NAD	516	2	Namibian dollar	 Namibia
    NGN	566	2	Nigerian naira	 Nigeria
    NIO	558	2	Nicaraguan córdoba	 Nicaragua
    NPR	524	2	Nepalese rupee	   Nepal
    OMR	512	3	Omani rial	 Oman
    PAB	590	2	Panamanian balboa	 Panama
    PEN	604	2	Peruvian Sol	 Peru
    PGK	598	2	Papua New Guinean kina	 Papua New Guinea
    PHP	608	2	Philippine piso[13]	 Philippines
    PKR	586	2	Pakistani rupee	 Pakistan
    PYG	600	0	Paraguayan guaraní	 Paraguay


    RSD	941	2	Serbian dinar	 Serbia
    RWF	646	0	Rwandan franc	 Rwanda
    SAR	682	2	Saudi riyal	 Saudi Arabia
    SBD	090	2	Solomon Islands dollar	 Solomon Islands
    SCR	690	2	Seychelles rupee	 Seychelles
    SDG	938	2	Sudanese pound	 Sudan

    SHP	654	2	Saint Helena pound	 Saint Helena (SH-SH),  Ascension Island (SH-AC),  Tristan da Cunha
    SLL	694	2	Sierra Leonean leone	 Sierra Leone
    SOS	706	2	Somali shilling	 Somalia
    SRD	968	2	Surinamese dollar	 Suriname
    SSP	728	2	South Sudanese pound	 South Sudan
    STN[14]	930	2	São Tomé and Príncipe dobra	 São Tomé and Príncipe
    SVC	222	2	Salvadoran colón	 El Salvador
    SYP	760	2	Syrian pound	 Syria
    SZL	748	2	Swazi lilangeni	 Swaziland

    TJS	972	2	Tajikistani somoni	 Tajikistan
    TMT	934	2	Turkmenistan manat	 Turkmenistan
    TND	788	3	Tunisian dinar	 Tunisia
    TOP	776	2	Tongan paʻanga	 Tonga

    TTD	780	2	Trinidad and Tobago dollar	 Trinidad and Tobago
    TWD	901	2	New Taiwan dollar	 Taiwan
    TZS	834	2	Tanzanian shilling	 Tanzania

    UGX	800	0	Ugandan shilling	 Uganda
    USN	997	2	United States dollar (next day) (funds code)	 United States
    UYI	940	0	Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)	 Uruguay
    UYU	858	2	Uruguayan peso	 Uruguay
    UZS	860	2	Uzbekistan som	 Uzbekistan
    VEF	937	2	Venezuelan bolívar	 Venezuela
    VND	704	0	Vietnamese đồng	 Vietnam
    VUV	548	0	Vanuatu vatu	 Vanuatu
    WST	882	2	Samoan tala	 Samoa
    XAF	950	0	CFA franc BEAC	 Cameroon (CM),  Central African Republic (CF),  Republic of the Congo (CG),  Chad (TD),  Equatorial Guinea (GQ),  Gabon (GA)


    XBA	955	.	European Composite Unit (EURCO) (bond market unit)
    XBB	956	.	European Monetary Unit (E.M.U.-6) (bond market unit)
    XBC	957	.	European Unit of AccountEndpoint 9 (E.U.A.-9) (bond market unit)
    XBD	958	.	European Unit of AccountEndpoint 17 (E.U.A.-17) (bond market unit)
    XCD	951	2	East Caribbean dollar	 Anguilla (AI),  Antigua and Barbuda (AG),  Dominica (DM),  Grenada (GD),  Montserrat (MS),  Saint Kitts and Nevis (KN),  Saint Lucia (LC),  Saint Vincent and the Grenadines (VC)
    XDR	960	.	Special drawing rights	International Monetary Fund
    XOF	952	0	CFA franc BCEAO	 Benin (BJ),  Burkina Faso (BF),  Côte d'Ivoire (CI),  Guinea-Bissau (GW),  Mali (ML),  Niger (NE),  Senegal (SN),  Togo (TG)
    XPD	964	.	Palladium (one troy ounce)
    XPF	953	0	CFP franc (franc Pacifique)	French territories of the Pacific Ocean:  French Polynesia (PF),  New Caledonia (NC),  Wallis and Futuna (WF)

    XSU	994	.	SUCRE	Unified System for Regional Compensation (SUCRE)[15]
    XTS	963	.	Code reserved for testing purposes
    XUA	965	.	ADB Unit of AccountEndpoint	African Development Bank[16]
    XXX	999	.	No currency
    YER	886	2	Yemeni rial	 Yemen

    ZMW	967	2	Zambian kwacha	 Zambia
    */
}