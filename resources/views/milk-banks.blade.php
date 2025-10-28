@extends('layouts.app')

@section('title', 'SABR: South African Breastmilk Reserve - Find A Milk Bank Near You')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Africa Milk Banks Interactive Map</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
   
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" />
   
    <style>
        h2{
            font-family: 'Work Sans', sans-serif; 
            font-weight: 700;
            color: #905460;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 130px;
            font-family: 'Work Sans', sans-serif;
            min-height: 100vh;
        }
        
        .header-section {
            text-align: center;
            padding: 40px 16px;
            background: linear-gradient(135deg, #e5d2b8 0%, #d4c5a9 100%);
            border-radius: 24px;
            margin-bottom: 32px;
            box-shadow: 0px 8px 16px rgba(80, 51, 37, 0.1);
        }
        .header-section h1 {
            color: #905460;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        .header-section p {
            color: #666562;
            font-size: 20px;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.4;
        }
        .map-container {
            display: flex;
            gap: 24px;
            align-items: flex-start;
            margin: 40px 0;
        }
        .map-wrapper {
            flex: 2;
            background: #fff;
            border-radius: 16px;
            padding: 16px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            border: 1px solid #9f9ab1;
        }
        #map {
            height: 500px;
            width: 100%;
            border-radius: 12px;
            border: 2px solid #dedad4;
        }
        .info-panel {
            flex: 1;
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            border: 1px solid #9f9ab1;
            min-height: 500px;
            position: relative;
        }
        .info-panel.empty {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #666562;
        }
        .empty-state h3 {
            color: #905460;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 12px;
        }
        .empty-state p {
            color: #666562;
            font-size: 16px;
            line-height: 1.6;
        }
        .stats-summary {
            background: linear-gradient(135deg, #d4c5a9 , #d4c5a9 );
            color: white;
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 20px;
            text-align: center;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            display: block;
            font-family: 'Inter', sans-serif;
        }
        .stats-label {
            font-size: 14px;
            font-weight: 400;
            opacity: 0.9;
        }
        .province-description {
            color: #666562;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            padding: 16px;
            background: #f8f5f0;
            border-radius: 10px;
        }
        .milk-bank-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            border-left: 5px solid #3B82F6;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        }
        .milk-bank-card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.15);
            border-left-color: #e26654;
        }
        .bank-name {
            font-size: 18px;
            font-weight: 700;
            color: #905460;
            margin-bottom: 8px;
            font-family: 'Work Sans', sans-serif;
        }
        .hospital-name {
            color: #666562;
            font-style: italic;
            margin-bottom: 12px;
            font-size: 14px;
        }
        .bank-details {
            font-size: 14px;
            line-height: 1.6;
            color: #636061;
            font-family: 'Inter', sans-serif;
        }
        .bank-details strong {
            color: #905460;
            font-weight: 600;
        }
        .contact-info {
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #dedad4;
        }
        .contact-info a {
            color: #3B82F6;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .contact-info a:hover {
            color: #e26654;
            text-decoration: underline;
        }
        .legend {
            background: #f8f5f0;
            border-radius: 12px;
            padding: 16px;
            margin-top: 20px;
            border: 1px solid #dedad4;
        }
        .legend h3 {
            color: #905460;
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: 600;
        }
        .legend-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 13px;
            color: #666562;
        }
        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 5px;
            margin-right: 10px;
            border: 2px solid #fff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .loading {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3B82F6;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .no-results {
            text-align: center;
            padding: 32px 16px;
            color: #666562;
        }
        .no-results h3 {
            color: #905460;
            font-size: 22px;
            margin-bottom: 12px;
        }
        /* Custom Leaflet popup styles */
        .leaflet-popup-content-wrapper {
            border-radius: 10px;
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.15);
        }
        .leaflet-popup-content {
            margin: 12px;
            font-family: 'Work Sans', sans-serif;
        }
        .popup-title {
            color: #905460;
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 6px;
        }
        .popup-info {
            color: #666562;
            font-size: 13px;
            line-height: 1.4;
        }
        /* Custom marker styles */
        .milk-bank-marker {
            background: #c4df16;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .milk-bank-marker:hover {
            transform: scale(1.2);
            box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.25);
        }
        .custom-tooltip {
            background: #fff;
            border: 1px solid #dedad4;
            border-radius: 6px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            font-family: 'Work Sans', sans-serif;
        }
        /* Disable zoom controls */
        .leaflet-control-zoom {
            display: none;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .wrapper {
                padding: 16px 8px;
            }
            .header-section {
                padding: 24px 12px;
            }
            .header-section h1 {
                font-size: 28px;
            }
            .header-section p {
                font-size: 16px;
            }
            .map-container {
                flex-direction: column;
                gap: 16px;
            }
            #map {
                height: 350px;
            }
            .info-panel {
                min-height: auto;
                padding: 16px;
            }
            .milk-bank-card {
                padding: 16px;
            }
            .stats-number {
                font-size: 2rem;
            }
            .map-wrapper{
                width: 100%;
            }
        }
        @media (max-width: 480px) {
            .header-section h1 {
                font-size: 24px;
            }
            .header-section p {
                font-size: 14px;
            }
            #map {
                height: 300px;
            }
            .info-panel {
                padding: 12px;
            }
            .milk-bank-card {
                padding: 12px;
            }
            .stats-number {
                font-size: 1.8rem;
            }
            .legend {
                padding: 12px;
            }
            .legend-item {
                font-size: 12px;
            }
        }
    </style>
</head>
<body class="py-[120px] md:py-[120px] !mt-6">
    <div class="wrapper ">
        <div class="header-section">
            <h1>Find a Milk Bank Near You</h1>
            <p>Click on any milk bank marker to discover breastmilk banking facilities across South Africa</p>
        </div>
        <div class="map-container">
            <div class="map-wrapper">
                <div id="map" style="z-index: 1;"></div>
                <div class="legend">
                    
                    <div class="legend-item">
                        <img src="{{asset('images/bottle.png') }}" class=" w-3 mr-3"/>
                        <span>Milk bank locations</span>
                    </div>
                </div>
            </div>
            <div class="info-panel empty" id="info-panel">
                <div class="empty-state">
                    <h3>💡 Get Started</h3>
                    <p>Click on any milk bank marker on the map to view details about the facility.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Leaflet JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
    <script>
        // Updated milk bank data based on official SABR website
        const milkBankData = {
            'Gauteng': {
                province: "Gauteng",
                description: "Economic hub with multiple hospitals offering milk banking services, serving the largest urban population in South Africa through SABR's network.",
                milk_banks: [
                    {
                        name: "Kalafong Hospital",
                        hospital_name: "Kalafong Hospital",
                        address: "Klipspring Road, Atteridgeville, 0008",
                        phone: "011 482 1967",
                        
                        coordinates: [-25.7456, 28.1063]
                    },
                    {
                        name: "Chris Hani Baragwanath Hospital",
                        hospital_name: "Chris Hani Baragwanath Academic Hospital",
                        address: "Chris Hani Road, Diepkloof, Soweto, 1862",
                        phone: "011 482 1967",
                        
                        coordinates: [-26.2041, 27.9106]
                    },
                    {
                        name: "Dr George Mukhari Hospital",
                        hospital_name: "Dr George Mukhari Academic Hospital",
                        address: "3111 Setlogelo Street, Ga-Rankuwa, 0208",
                        phone: "011 482 1967",
                        
                        coordinates: [-25.6254, 27.9891]
                    },
                    {
                        name: "Mediclinic Sandton",
                        hospital_name: "Mediclinic Sandton",
                        address: "Cnr Peter Place and Hendrik Vervoed Drive, Bryanston",
                        phone: "011 482 1967",
                       
                        coordinates: [-26.0731, 28.0194]
                    },
                    {
                        name: "SABR Head Office",
                        hospital_name: "SABR Head Office",
                        address: "Johannesburg Office, The Media Mills, 7 Quince Rd Braamfontein",
                        phone: "011 482 1920",
                       
                        coordinates: [-26.185705098898918, 28.018127021546153]
                    },
                    {
                        name: "Midwives Exclusive",
                        hospital_name: "Midwives Exclusive",
                        address: "38 Belrene Street, Rietondale, Pretoria",
                        phone: "011 482 1967",
                       
                        coordinates: [-25.7842, 28.1936]
                    }
                ],
                total_banks: 6
            },
            'Eastern Cape': {
                province: "Eastern Cape",
                description: "Rural province expanding access to donated breast milk through regional hospital networks and community programs via SABR partnerships.",
                milk_banks: [
                    {
                        name: "Cecilia Makiwane Hospital",
                        hospital_name: "Cecilia Makiwane Hospital",
                        address: "4 Billie road, Mdantsane, East London, 4820",
                        phone: "011 482 1967",
                       
                        coordinates: [-32.9831, 27.8546]
                    },
                    {
                        name: "Dora Nginza Hospital",
                        hospital_name: "Dora Nginza Hospital",
                        address: "Spondo Street, Zwide, PE, 6005",
                        phone: "011 482 1967",
                       
                        coordinates: [-33.8267, 25.5733]
                    },
                    {
                        name: "Frontier Hospital",
                        hospital_name: "Frontier Hospital",
                        address: "Kingsway Avenue, Queenstown, 5320",
                        phone: "011 482 1967",
                        
                        coordinates: [-31.8977, 26.8753]
                    },
                    {
                        name: "Nelson Mandela Academic Hospital",
                        hospital_name: "Nelson Mandela Academic Hospital",
                        address: "71 Nelson Mandela Street, Umtata, 5099",
                        phone: "011 482 1967",
                       
                        coordinates: [-31.5886, 28.7761]
                    },
                    {
                        name: "St Elizabeth Hospital",
                        hospital_name: "St Elizabeth Hospital",
                        address: "Main Road, Lusikisiki, 4820",
                        phone: "011 482 1967",
                       
                        coordinates: [-31.35902458281482, 29.56579726999668]
                    }
                ],
                total_banks: 5
            },
            'Limpopo': {
                province: "Limpopo",
                description: "Northern province developing milk banking infrastructure through SABR partnerships to serve rural communities and improve infant health outcomes.",
                milk_banks: [
                    {
                        name: "Mankweng Hospital",
                        hospital_name: "Mankweng Hospital Complex",
                        address: "Mankweng Complex, Houtbos Dorp Street, Mankweng, Limpopo",
                        phone: "015 286 1000",
                        nicu_phone: "015 286 1432/1317",
                       
                        sabr_agent: "Hellen Lekganyane",
                    
                        coordinates: [-23.8853, 29.7363]
                    },
                    {
                        name: "Letaba Hospital",
                        hospital_name: "Letaba Hospital",
                        address: "Nkowakowa Tzaneen Lydenburg Road, Letaba, Tzaneen, 0870, 0870",
                        phone: "011 482 1967",
                        
                       
                        sabr_agent: "Edith - 0839436779",
                    
                        coordinates: [-23.87323488274142, 30.268155438936063]
                    },
                    {
                        name: "Philadephia Hospital",
                        hospital_name: "Philadephia Hospital",
                        address: "246 Philadephia  Main Road, Dennilton AH, 1030",
                        phone: "0791767844",
                        nicu_phone: "015 286 1432/1317",
                      
                        
                        sabr_agent: "Thuli",
                        agent_address: "246 Philadelphia Main Road, Dennilton AH, 1030",
                        coordinator: "Thuli - 0791767844",
                        coordinates: [-23.8853, 30.8363]
                    },
                    {
                        name: "Mokopne Hospital",
                        hospital_name: "Mokopne Hospital",
                        address: "Mokopane hospital, 0626 Dudu Madisha Dr, Mahwelereng-C, Mokopane, 0601",
                        phone: "011 482 1967",
                        
                        sabr_agent: "Noko - 07640416986",  
                        coordinator: "Noko - 07640416986",
                        coordinates: [-24.155036237081628, 28.9891152520933]
                    }
                ],
                total_banks: 4
            },
            'Free State': {
                province: "Free State",
                description: "Central province with comprehensive milk banking services through SABR, connecting urban centers with rural communities and setting standards for public sector human milk banking.",
                milk_banks: [
                    {
                        name: "Boitumelo Regional Hospital",
                        hospital_name: "Boitumelo Regional Hospital",
                        address: "Smaldeel Road, Kroonstad, 9499",
                        phone: "056 216 5200",
                        nicu_phone: "056 216 5250",
                        sabr_phone: "011 482 1967",
                        coordinates: [-27.6506, 27.2348]
                    },
                    {
                        name: "Bongani Regional Hospital",
                        hospital_name: "Bongani Regional Hospital",
                        address: "Mothusi Rd, Welkom, 9459",
                        phone: "057 916 8000",
                        nicu_phone: "057 916 8253",
                        sabr_phone: "011 482 1967",

                        coordinates: [-27.9775, 26.7334]
                    },
                    {
                        name: "Dihlabeng Regional Hospital",
                        hospital_name: "Dihlabeng Regional Hospital",
                        address: "2 Eeufees Street, Bethlehem, 9701",
                        phone: "058 303 5331",
                        nicu_phone: "058 307 1054",
                       
                        sabr_agent: "Stefanie Kilian - 082 718 6388 - KilianS@fshealth.gov.za",
                        coordinates: [-28.2292, 28.3067]
                    },
                    {
                        name: "Mofumahadi Manapo Mopeli Hospital",
                        hospital_name: "Mofumahadi Manapo Mopeli Hospital",
                        address: "Mampoi Street, Phuthaditjhaba, 9869",
                        phone: "058 718 3200",
                        nicu_phone: "058 718 3244",
                       
                        sabr_agent: "Amelia Mkhwanazi - 072 839 2585",
                        coordinates: [-28.5225, 28.8197]
                    },
                    {
                        name: "Pelonomi Regional Hospital",
                        hospital_name: "Pelonomi Regional Hospital",
                        address: "121 Dr Belcher road, Heidedal, 9301",
                        phone: "051 405 1911",
                        nicu_phone: "051 405 1147",
                       
                        sabr_agent: "Matron Makatane - 072 260 1561 - makatanemt@fshealth.gov.za",
                        description: "Established under the Fuchs Foundation, active and positively banking since 2007. Secondary hospital that refers ill babies to Universitas.",
                        coordinates: [-29.1360, 26.2456]
                    },
                    {
                        name: "Universitas Hospital",
                        hospital_name: "Universitas Academic Hospital",
                        address: "Logeman Street, Bloemfontein, 9301",
                        phone: "051 405 3526",
                        nicu_phone: "051 405 3315",
                       
                        sabr_agent: "Annalize Steinob - 082 463 5923",
                        description: "Tertiary facility and only referral hospital for surgical and cardiac babies in Free State and Northern Cape. Sets the public sector golden standard for human milk banking in South Africa.",
                        partners: ["Life Health care Rosepark", "Pelonomi Public"],
                        coordinates: [-29.1217, 26.2041]
                    }
                ],
                total_banks: 6
            },
            'North West': {
                province: "North West",
                description: "Province establishing comprehensive milk banking services through SABR partnerships with regional hospital networks and community health programs.",
                milk_banks: [
                    {
                        name: "Klerksdorp Hospital",
                        hospital_name: "Klerksdorp Hospital",
                        address: "Corner John Orr St, Neserhof, Klerksdorp, 2571",
                        phone: "0114821920",
                        
                        sabr_phone: "011 482 1967",
                        
                        coordinates: [-26.878619569016056, 26.663050909379987]
                    },
                    {
                        name: "Job Shimankana Tabane Hospital",
                        hospital_name: "Job Shimankana Tabane Hospital",
                        address: "Cnr Bosch Street and Heystek Street, Rustenburg, 0299",
                        phone: "014 590 5100",
                        nicu_phone: "014 590 5270",
                        sabr_phone: "011 482 1967",
                     
                        coordinates: [-25.6677, 27.2419]
                    },
                    {
                        name: "Joe Morolong Memorial Hospital",
                        hospital_name: "Joe Morolong Memorial Hospital",
                        address: "608 South Street, Vryburg, 8601",
                        phone: "053 928 9000",
                        nicu_phone: "053 928 9100",
                        sabr_phone: "011 482 1967",
                        
                        coordinates: [-26.9569, 24.7284]
                    },
                    {
                        name: "Mafikeng Provincial Hospital",
                        hospital_name: "Mafikeng Provincial Hospital",
                        address: "Lichtenburg Rd, Mafikeng, 2745",
                        phone: "018 383 2005",
                        nicu_phone: "018 383 6873",
                        sabr_phone: "011 482 1967",
                        
                        coordinates: [-25.8475, 25.6314]
                    },
                    {
                        name: "Potchefstroom Hospital",
                        hospital_name: "Potchefstroom Hospital",
                        address: "Crn Chris Hani and Kruis Street, Potchefstroom, 2520",
                        phone: "018 293 4400",
                        nicu_phone: "018 293 4609",
                        
                        sabr_agent: "Lizelle Payne - 083 748 0757",
                        coordinates: [-26.7081, 27.0842]
                    }
                ],
                total_banks: 5
            },
            'Northern Cape': {
                province: "Northern Cape",
                description: "Sparsely populated province served through SABR regional milk banking networks, mobile outreach programs, and partnerships with the Fuchs Foundation.",
                milk_banks: [
                    {
                        name: "Kimberley Hospital Complex",
                        hospital_name: "Kimberley Hospital Complex",
                        address: "Du Toitspan Rd, Belgravia, Kimberley, 8301",
                        phone: "053 802 9111",
                        nicu_phone: "053 802 2142",
                        nutrition_phone: "053 802 2233",
                        
                        description: "Established under the Fuchs Foundation in 2007/08. Shows positive banking and feeds the NICU on site as well as acts as top-up facility for Universitas hospital.",
                        coordinates: [-28.7282, 24.7499]
                    },
                    {
                        name: "Dr Harry Surtie Hospital",
                        hospital_name: "Dr Harry Surtie Hospital",
                        address: "Turner St, Upington Extension, Upington, 8801",
                        phone: "054 338 6100",
                        nicu_phone: "054 332 9001",
                        nutrition_phone: "054 332 9043 or 054 332 9042",
                        
                        coordinates: [-28.4478, 21.2561]
                    }
                ],
                total_banks: 2
            },
            'Mpumalanga': {
                province: "Mpumalanga",
                description: "Province working to expand milk banking access through SABR partnerships with existing healthcare infrastructure, currently establishing collection points.",
                milk_banks: [
                    {
                        name: "Nelspruit SABR Corner",
                        hospital_name: "Nelspruit Hospital (Rob Ferreira Hospital)",
                        address: "Nelspruit",
                        phone: "011 482 1967",
                        
                        coordinates: [-25.4753, 30.9822]
                    }
                ],
                total_banks: 1
            },
            'Western Cape': {
                province: "Western Cape",
                description: "Home to Cape Town and several pioneering milk banking facilities including community-based initiatives and major academic hospitals leading South Africa's milk banking efforts.",
                milk_banks: [
                    
                    {
                        name: "Groote Schuur Hospital Milk Bank",
                        hospital_name: "Groote Schuur Hospital",
                        address: "Observatory, Cape Town",
                        phone: "+27 21 404 9111",
                        
                        coordinates: [-33.9399, 18.4666]
                    },
                    {
                        name: "Tygerberg Hospital Milk Bank",
                        hospital_name: "Tygerberg Hospital",
                        address: "Bellville, Cape Town",
                        phone: "+27 21 938 9111",
                      
                        coordinates: [-33.8841, 18.6368]
                    }
                ],
                total_banks: 3
            },
            'KwaZulu-Natal': {
                province: "KwaZulu-Natal",
                description: "Coastal province with growing milk banking network serving urban and rural communities along the Indian Ocean coast through established hospital partnerships.",
                milk_banks: [
                    {
                        name: "King Edward VIII Hospital Milk Bank",
                        hospital_name: "King Edward VIII Hospital",
                        address: "Durban",
                        phone: "+27 31 360 3111",
                       
                        coordinates: [-29.8587, 31.0218]
                    },
                    {
                        name: "Inkosi Albert Luthuli Hospital Milk Bank",
                        hospital_name: "Inkosi Albert Luthuli Central Hospital",
                        address: "Cato Manor, Durban",
                        phone: "+27 31 240 2111",
                        
                        coordinates: [-29.8215, 30.8893]
                    }
                ],
                total_banks: 2
            }
        };

        let map;
        let markersLayer;
        let currentActiveBank = null;

        function initializeMap() {
            map = L.map('map', {
    center: [-29.0, 24.5],
    zoom: 5.5,
    minZoom: 5,
    maxZoom: 12,
    maxBounds: [[-35.5, 15.0], [-21.5, 33.5]],
    maxBoundsViscosity: 1.0,
    zoomControl: true,
    scrollWheelZoom: true,
    doubleClickZoom: true,
    touchZoom: true,
    dragging: true
});

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                bounds: [[-35.5, 15.0], [-21.5, 33.5]]
            }).addTo(map);

            markersLayer = L.layerGroup().addTo(map);

            addMilkBankMarkers();
        }

        function addMilkBankMarkers() {
            Object.keys(milkBankData).forEach(province => {
                const data = milkBankData[province];
                if (data && data.milk_banks) {
                    data.milk_banks.forEach(bank => {
                        if (bank.coordinates) {
                            const customIcon = L.icon({
                                iconUrl: '/images/bottle.png',
                                iconSize: [20, 40],
                                iconAnchor: [20, 40],
                                popupAnchor: [0, -40]
                            });
                            
                            const marker = L.marker([bank.coordinates[0], bank.coordinates[1]], {
                                icon: customIcon
                            });
                            
                            marker.on('click', () => {
                                displayMilkBankData(province, bank);
                                // Center map on clicked marker
                                map.setView([bank.coordinates[0], bank.coordinates[1]], Math.max(map.getZoom(), 8), {
                                    animate: true,
                                    duration: 1
                                });
                            });
                            
                            let popupContent = `
                                <div class="popup-title">${bank.name}</div>
                                <div class="popup-info">
                                    <strong>Hospital:</strong> ${bank.hospital_name}<br>
                                    <strong>Address:</strong> ${bank.address}<br>
                                   
                            `;
                            
                            if (bank.phone) {
                                popupContent += `<br><strong>Phone:</strong> <a href="tel:${bank.phone}">${bank.phone}</a>`;
                            }
                            if (bank.nicu_phone) {
                                popupContent += `<br><strong>NICU:</strong> <a href="tel:${bank.nicu_phone}">${bank.nicu_phone}</a>`;
                            }
                            if (bank.sabr_agent) {
                                popupContent += `<br><strong>SABR Agent:</strong> ${bank.sabr_agent}`;
                            }
                            
                            popupContent += `</div>`;
                            
                            marker.bindPopup(popupContent);
                            markersLayer.addLayer(marker);
                        }
                    });
                }
            });
        }

        function showLoading() {
            const infoPanel = document.getElementById('info-panel');
            infoPanel.innerHTML = `
                <div class="loading">
                    <div class="spinner"></div>
                </div>
            `;
            infoPanel.className = 'info-panel';
        }

        function displayMilkBankData(provinceName, bank) {
            const data = milkBankData[provinceName];
            const infoPanel = document.getElementById('info-panel');

            showLoading();

            setTimeout(() => {
                let html = `
                    <h2>${data.province}</h2>
                    <div class="stats-summary">
                        <span class="stats-number">${data.total_banks}</span>
                        <span class="stats-label">Milk Banking ${data.total_banks === 1 ? 'Facility' : 'Facilities'}</span>
                    </div>
                    <div class="province-description">
                        ${data.description}
                    </div>
                    <div class="milk-bank-card">
                        <div class="bank-name">${bank.name}</div>
                        <div class="hospital-name">${bank.hospital_name}</div>
                        <div class="bank-details">
                            <strong>Address:</strong> ${bank.address}<br>
                          
                `;
                
                if (bank.description) {
                    html += `<br><strong>About:</strong> ${bank.description}`;
                }
                
                if (bank.services && bank.services.length > 0) {
                    html += `<br><strong>Services:</strong> ${bank.services.join(', ')}`;
                }
                
                if (bank.partners && bank.partners.length > 0) {
                    html += `<br><strong>Partners:</strong> ${bank.partners.join(', ')}`;
                }
                
                if (bank.phone || bank.email || bank.nicu_phone || bank.sabr_phone || bank.nutrition_phone || bank.sabr_agent || bank.coordinator) {
                    html += `<div class="contact-info">`;
                    
                    if (bank.phone) {
                        html += `<strong>Phone:</strong> <a href="tel:${bank.phone}">${bank.phone}</a><br>`;
                    }
                    if (bank.nicu_phone) {
                        html += `<strong>NICU:</strong> <a href="tel:${bank.nicu_phone}">${bank.nicu_phone}</a><br>`;
                    }
                    if (bank.sabr_phone && bank.sabr_phone !== bank.phone) {
                        html += `<strong>SABR Enquiries:</strong> <a href="tel:${bank.sabr_phone}">${bank.sabr_phone}</a><br>`;
                    }
                    if (bank.nutrition_phone) {
                        html += `<strong>Nutrition Dept:</strong> <a href="tel:${bank.nutrition_phone}">${bank.nutrition_phone}</a><br>`;
                    }
                    if (bank.email) {
                        html += `<strong>Email:</strong> <a href="mailto:${bank.email}">${bank.email}</a><br>`;
                    }
                    if (bank.sabr_agent) {
                        html += `<strong>SABR Agent:</strong> ${bank.sabr_agent}<br>`;
                    }
                    if (bank.coordinator) {
                        html += `<strong>Coordinator:</strong> ${bank.coordinator}<br>`;
                    }
                    if (bank.agent_address) {
                        html += `<strong>Agent Address:</strong> ${bank.agent_address}<br>`;
                    }
                    
                    html += `</div>`;
                }
                
                html += `
                        </div>
                    </div>
                `;
                
                infoPanel.innerHTML = html;
                infoPanel.className = 'info-panel';
                currentActiveBank = bank.name;
            }, 300);
        }

        document.addEventListener('DOMContentLoaded', function() {
            initializeMap();
        });

        window.MilkBankMap = {
            getProvinces: function() {
                return Object.keys(milkBankData);
            },
            getProvinceData: function(provinceName) {
                return milkBankData[provinceName] || null;
            },
            getCurrentBank: function() {
                return currentActiveBank;
            }
        };
    </script>
</body>
@endsection