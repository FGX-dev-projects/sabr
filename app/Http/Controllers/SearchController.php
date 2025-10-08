<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        if (empty($query)) {
            return response()->json([]);
        }

        // Define searchable pages with comprehensive content
        $pages = [
            [
                'title' => 'Home',
                'url' => route('home'),
                'keywords' => 'south african breastmilk reserve SABR home milk bank babies infants premature neonatal donation volunteer sostainer sosafe feed for life saving lives donor breastmilk',
                'description' => 'South African Breastmilk Reserve - Bringing milk to babies, safely. Award-winning milk banking organization founded in 2003.'
            ],
            [
                'title' => 'About Us',
                'url' => route('about-us'),
                'keywords' => 'SABR about mission vision history breastmilk reserve organization non-profit award-winning founded 2003 stasha jordan executive director 21 years healthcare mothers scientific research advocacy',
                'description' => 'Award-winning, not-for-profit human milk-banking organisation founded in 2003, supporting healthcare and breastfeeding mothers for over 21 years through research, advocacy and safe donor milk provision.'
            ],
            [
                'title' => 'Statistics',
                'url' => route('stats'),
                'keywords' => 'statistics stats numbers data impact results metrics babies saved donors milk banking facilities hospitals public hospitals collection corners 31000 babies',
                'description' => 'Over 31,000 babies served since 2003, with 30 milk banking facilities nationwide including hospitals and collection corners across South Africa.'
            ],
            [
                'title' => 'Our Impact',
                'url' => route('impact'),
                'keywords' => 'impact statistics babies saved lives transformed donor milk bank results achievements success stories neonatal care premature infants healthcare 31000 babies 30 facilities',
                'description' => 'SABR has established 30 milk banking facilities nationwide, touching the lives of over 31,000 infants with safe donor breastmilk delivery within 24-48 hours.'
            ],
            [
                'title' => 'Feed for Life Initiative',
                'url' => route('feed-for-life'),
                'keywords' => 'feed for life initiative programme program donor breastmilk premature babies sick infants neonatal care DBM donated breastmilk neonates at risk NICU',
                'description' => 'Programme providing donor breastmilk (DBM) to premature and sick infants under 37 weeks gestation, primarily serving NICU patients in public hospitals.'
            ],
            [
                'title' => 'SOStainer Mobile Container Clinics',
                'url' => route('sostainer'),
                'keywords' => 'sostainer mobile container clinic milk bank portable healthcare community outreach rural areas early childhood development ECD breastfeeding support immunisation HIV testing nutrition home visits',
                'description' => 'Innovative mobile clinics designed for low-resourced rural settings, providing breastfeeding support, milk banking, immunization, HIV testing, nutrition support and comprehensive ECD programmes.'
            ],
            [
                'title' => 'Make Your Hospital Breastmilk Smart',
                'url' => route('breastmilk-smart'),
                'keywords' => 'breastmilk smart hospital programme breastmilk-friendly neonatal units healthcare facilities NICU training support equipment',
                'description' => 'Transform your hospital into a breastmilk-friendly facility with comprehensive training, support and equipment for establishing milk banking services in neonatal units.'
            ],
            [
                'title' => 'SoSAFE Pasteuriser',
                'url' => route('sosafe'),
                'keywords' => 'sosafe pasteuriser pasteurization pasteurizing milk safety equipment technology innovation quality rapid testing hygienic safe nutritious donated breastmilk',
                'description' => 'State-of-the-art pasteurization technology and rapid testing methods ensuring safe, hygienic and nutritious donor breastmilk meets regulatory standards.'
            ],
            [
                'title' => 'Research at SABR',
                'url' => route('research'),
                'keywords' => 'research studies scientific breastmilk donor milk banking evidence lactation quality management university researchers clinical technological managerial innovation low-resourced settings',
                'description' => 'Cutting-edge research in clinical, technological and managerial techniques for supporting lactation and improving quality management of donor breastmilk for low-resourced settings.'
            ],
            [
                'title' => 'Get Involved',
                'url' => route('get-involved'),
                'keywords' => 'get involved volunteer donate support help contribute participate sponsorship collections deliveries making a difference join us',
                'description' => 'Join SABR\'s mission through donating breastmilk, financial support, volunteering, or helping with collections and deliveries to reach more children in need.'
            ],
            [
                'title' => 'Best in Breast (FAQs)',
                'url' => route('breast-is-best'),
                'keywords' => 'FAQ frequently asked questions breastfeeding breast is best information guide help exclusive breastfeeding workplace mothers infants nutrition health benefits',
                'description' => 'Comprehensive FAQs about breastfeeding, workplace lactation support, exclusive breastfeeding benefits, and donor milk banking information for mothers.'
            ],
            [
                'title' => 'Why The Cost?',
                'url' => route('why-the-cost'),
                'keywords' => 'cost pricing fees expenses donor milk banking processing pasteurization testing quality storage distribution transparency funding',
                'description' => 'Understanding the costs of safe donor milk banking including collection, pasteurization, testing, storage and distribution to ensure highest quality standards.'
            ],
            [
                'title' => 'The Safe Use of DBM',
                'url' => route('safe-user-of-dbm'),
                'keywords' => 'DBM donor breastmilk donated breastmilk safety guidelines usage instructions safe use hospitals homes handling storage thawing feeding premature babies',
                'description' => 'Essential guidelines and instructions for the safe handling, storage, thawing and feeding of donor breastmilk (DBM) in hospitals and homes.'
            ],
            [
                'title' => 'News & Media',
                'url' => route('news'),
                'keywords' => 'news media articles press releases updates announcements coverage radio newspapers national media social media community awareness',
                'description' => 'Latest news, updates, press releases and media coverage about SABR through community radio, newspapers, national media and social platforms.'
            ],
            [
                'title' => 'Contact Us',
                'url' => route('contact-us'),
                'keywords' => 'contact us email phone address location get in touch 011 482 1920 info@sabr.org.za enquiries support help',
                'description' => 'Contact SABR: Call 011 482 1920 or email info@sabr.org.za for inquiries, support and information about milk banking services.'
            ],
            [
                'title' => 'Donate Money',
                'url' => route('donate'),
                'keywords' => 'donate donation financial support contribute money fund sponsorship helping save lives babies premature infants neonatal care',
                'description' => 'Support SABR with financial donations to help save babies\' lives through milk banking, research and community programmes.'
            ],
            [
                'title' => 'Donate Milk',
                'url' => route('donate') . '?memberGroupID=2',
                'keywords' => 'donate milk breastmilk become donor milk donation altruistic collection expressing breastmilk mothers lactating donors',
                'description' => 'Become a breastmilk donor and help save premature and sick babies. Altruistic milk donation through dignified collection and expressing support.'
            ],
            [
                'title' => 'Volunteer',
                'url' => route('volunteer'),
                'keywords' => 'volunteer volunteering help support time skills contribute collections deliveries transport car community service making difference',
                'description' => 'Volunteer your time, skills, or vehicle to support SABR\'s mission through collections, deliveries and community outreach programmes.'
            ],
            [
                'title' => 'Register as Parent',
                'url' => route('register'),
                'keywords' => 'register parent baby need milk recipient access donor milk premature sick infant NICU under 37 weeks gestation',
                'description' => 'Register to access safe donor breastmilk for your premature or sick baby under 37 weeks gestation in NICU or neonatal care.'
            ],
            [
                'title' => 'Board of Directors',
                'url' => route('board-of-directors'),
                'keywords' => 'board of directors leadership team management governance stasha jordan executive director founder advisors experts',
                'description' => 'Meet SABR\'s Board of Directors, leadership team and founder Stasha Jordan, executive director guiding our milk banking mission.'
            ],
            [
                'title' => 'Financial Statements',
                'url' => route('financials'),
                'keywords' => 'financials financial statements annual report transparency accountability funding expenses income donations non-profit',
                'description' => 'Access SABR\'s annual financial statements and reports demonstrating transparency and accountability as a non-profit organization.'
            ],
            [
                'title' => 'Breast Milk Banks',
                'url' => route('milk-banks'),
                'keywords' => 'milk banks locations facilities centers breastmilk banking nationwide 30 facilities public hospitals private hospitals collection corners lusikisiki umthatha queenstown upington kimberley mafikeng vryburg dihlabeng phuthaditjhaba mankweng rural areas',
                'description' => 'Find 30 milk banking facilities across South Africa including public hospitals, private hospitals and collection corners in rural and urban areas.'
            ],
            [
                'title' => 'Annual Report',
                'url' => asset('documents/SABR-Annual-Report-14-10-2020.pdf'),
                'keywords' => 'annual report 2020 2021 financial year achievements impact statistics programmes outcomes transparency',
                'description' => 'SABR Annual Report 2020/21 detailing achievements, impact statistics, programmes and financial outcomes.'
            ],
        ];

        // Filter pages based on search query with relevance scoring
        $results = [];
        $searchQuery = strtolower($query);
        
        foreach ($pages as $page) {
            $score = 0;
            $titleLower = strtolower($page['title']);
            $keywordsLower = strtolower($page['keywords']);
            $descriptionLower = strtolower($page['description']);
            
            // Title match gets highest score
            if (strpos($titleLower, $searchQuery) !== false) {
                $score += 100;
            }
            
            // Exact word match in keywords
            $keywords = explode(' ', $keywordsLower);
            foreach (explode(' ', $searchQuery) as $word) {
                if (in_array($word, $keywords)) {
                    $score += 50;
                }
            }
            
            // Partial match in keywords
            if (strpos($keywordsLower, $searchQuery) !== false) {
                $score += 30;
            }
            
            // Match in description
            if (strpos($descriptionLower, $searchQuery) !== false) {
                $score += 20;
            }
            
            if ($score > 0) {
                $page['score'] = $score;
                $results[] = $page;
            }
        }
        
        // Sort by relevance score
        usort($results, function($a, $b) {
            return $b['score'] - $a['score'];
        });
        
        // Remove score from results and limit to 10
        $results = array_map(function($page) {
            unset($page['score']);
            return $page;
        }, array_slice($results, 0, 10));

        return response()->json($results);
    }
}