<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    private $seeds = [];

    public function __construct()
    {
        self::buildSeeds();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->seeds AS $seeds){

            School::create(
                [
                    'id' => $seeds[0],
                    'name' => $seeds[1],
                    'address1' => $seeds[2],
                    'address2' => $seeds[3],
                    'city' => $seeds[4],
                    'geostate_id' => $seeds[5],
                    'postal_code' => $seeds[6],
                    'county_id' => $seeds[7],
                ]
            );
        }
    }

    private function buildSeeds()
    {
        $this->seeds = [
            [2,'Emma C Attales Middle School','800 Irelan Avenue','','Absecon',37,'08201',22],
            [4,'H Ashton Marsh','800 Irelan Ave','','Absecon',37,'08201',22],
            [6,'Atlantic City High School','1400 N Albany Avenue','','Atlantic City',37,'08401',22],
            [33,'Atlantic County Institute Of Technology','5080 Atlantic Avenue','','Mays Landing',37,'08330',22],
            [35,'Buena Regional High School','125 Weymouth Road','','Buena',37,'08310',22],
            [37,'Buena Regional Middle School','175 Weymouth Road','','Buena',37,'08310',22],
            [47,'Brigantine North Middle School','301 E  Evans Boulevard','','Brigantine',37,'08203',22],
            [53,'Alder Avenue Middle School','25 Alder Avenue','','Egg Harbor Township',37,'08234',22],
            [57,'Dr. Joyanne D. Miller Elementary School','2 Alder Avenue','','Egg Harbor Township',37,'08234',22],
            [61,'Egg Harbor Township High School','24 High School Drive','','Egg Harbor Township',37,'08234',1],
            [63,'Fernwood Avenue Middle School','4034 Fernwood Avenue','','Egg Harbor Township',37,'08234',22],
            [79,'Roland Rogers Elementary School','105 S  Reeds Road','','Galloway',37,'08205',22],
            [83,'Absegami High School','201 S  Wrangleboro Road','','Galloway',37,'08205',22],
            [85,'Cedar Creek High School','1701 New York Ave.','','Egg Harbor City',37,'08215',22],
            [87,'Oakcrest High School','1824 Dr  Dennis Foreman Drive','','Mays Landing',37,'08330',1],
            [93,'William Davies Middle School','1876 Dr Dennis Foreman Drive','','Mays Landing',37,'08330',22],
            [97,'Hammonton High School','566 Old Forks Road','','Hammonton',37,'08037',22],
            [99,'Hammonton Middle School','75 North Liberty Street','','Hammonton',37,'08037',22],
            [103,'Belhaven Middle School','51 Belhaven Avenue','','Linwood',37,'08221',22],
            [107,'Mainland Regional High School','1301 Oak Avenue','','Linwood',37,'08221',1],
            [113,'Mullica Township Middle School','500 Elwood Road','','Elwood',37,'08217',22],
            [115,'Mullica Township Primary School','500 Elwood Road','','Elwood',37,'08217',22],
            [116,'Northfield Community Elementary School','2000 New Road','','Northfield',37,'08225',22],
            [142,'Ventnor Elementary School','400 N  Lafayette Avenue','','Ventnor',37,'08406',22],
            [144,'Ventnor Middle School','Ventnor Educational Community','','Ventnor',37,'08406',22],
            [169,'Bergen County Academies','200 Hackensack Avenue','','Hackensack',37,'07601',2],
            [173,'Bergen County Technical High School - Te','504 Route 46 West','','Teterboro',37,'07608',22],
            [282,'Fair Lawn High School','14 Ã‚Â 00 Berdan Avenue','','Fair Lawn',37,'07410',2],
            [306,'Fort Lee High School','3000 Lemoine Ave','','Fort Lee',37,'07024',22],
            [418,'Lyndhurst High School','400 Weart Avenue','','Lyndhurst',37,'07071',2],
            [438,'Mahwah High School','50 Ridge Road','','Mahwah',37,'07430',2],
            [474,'Northern Highlands Regional High School','298 Hillside Ave','','Allendale',37,'07401',22],
            [476,'Northern Valley Regional H. S.at Demarest ','150 Knickerbocker Rd','','Demarest',37,'07627',2],
            [479,'Northern Valley Regional H. S. At Old Tappan','140 Central Ave.','','Old Tappan',37,'07675',2],
            [496,'Pascack Hills High School','225 West Grand Avenue','','Montvale',37,'07645',2],
            [512,'Paramus High School','99 East Century Rd','','Paramus',37,'07652',2],
            [530,'Ramapo High School','331 George Street','','Franklin Lakes',37,'07417',22],
            [553,'Ridgefield Memorial High School','555 Walnut St','','Ridgefield',37,'07657',2],
            [571,'Ridgewood High School','627 East Ridgewood Avenue','','Ridgewood',37,'07451',2],
            [579,'River Dell Middle School','230 Woodland Avenue','','River Edge',37,'07661',22],
            [581,'River Dell Regional High School','55 Pyle Street','','Oradell',37,'07649',22],
            [599,'Rutherford High School','56 Elliott Pl','','Rutherford',37,'07070',2],
            [609,'Saddle Brook MS/HS','355 Mayhill Street','','Saddle Brook',37,'07663',2],
            [630,'Tenafly High School','19 Columbus Drive','','Tenafly',37,'07670',2],
            [644,'Teaneck High School','100 Elizabeth Street','','Teaneck',37,'07666',22],
            [707,'Burlington County Institute Of Technology - Medford','10 Hawkin Road','','Medford',37,'08055',3],
            [719,'Burlington Township High School','610 Fountain Avenue','','Burlington',37,'08016',22],
            [725,'Bordentown Regional High School','318 Ward Ave','','Bordentown',37,'08505',22],
            [742,'Wilbur Watts Intermediate School','550 High Street','','Burlington',37,'08016',22],
            [744,'Cinnaminson High School','1197 Riverton Road','','Cinnaminson',37,'08077',3],
            [754,'M. Joan Pearson Elementary School','1301 Burlington Ave','','Delanco',37,'08075',22],
            [757,'Delran High School','50 Hartford Road','','Delran',37,'08075',3],
            [759,'Delran Intermediate School','20 Creek Road','','Delran',37,'08075',22],
            [761,'Delran Middle School','905 Chester Avenue','','Delran',37,'08075',22],
            [794,'Hainesport Township School','211 Broad Street','','Hainesport',37,'08036',22],
            [795,'Cherokee High School','120 Tomlinson Mill Road','','Marlton',37,'08053',22],
            [797,'Lenape High School','235 Hartford Road','','Medford',37,'08055',22],
            [799,'Seneca High School','110 Carranza Road','','Tabernacle',37,'08088',3],
            [801,'Shawnee High School','600 Tabernacle Road','','Medford',37,'08055',3],
            [817,'Maple Shade High School','180 Frederick Ave','','Maple Shade',37,'08052',22],
            [823,'Neeta School','44 Neeta Trail','','Medford Lakes',37,'08055',22],
            [825,'Nokomis School','135 Mudjekeewis Trail','','Medford Lakes',37,'08055',22],
            [829,'Cranberry Pines Elementary','400 Fairview Road','','Medford',37,'08055',22],
            [831,'Haines Sixth Grade Center','162 Stokes Road','','Medford',37,'08055',22],
            [835,'Medford Memorial Middle School','55 Mill Street','','Medford',37,'08055',22],
            [837,'Milton H. Allen Elementary School','24 Allen Avenue','','Medford',37,'08055',22],
            [845,'Moorestown High School','350 Bridgeboro Road','','Moorestown',37,'08057',3],
            [847,'Moorestown Upper Elementary School','325 Borton Landing Road','','Moorestown',37,'08057',22],
            [851,'William Allen Middle School','801 N  Stanwick Road','','Moorestown',37,'08057',22],
            [863,'Hartford Upper Elementary School','397 Hartford Road','','Mount Laurel',37,'08054',22],
            [867,'Larchmont Elementary School','301 Larchmont Blvd','','Mount Laurel',37,'08054',22],
            [873,'Thomas E. Harrington Middle School','514 Mount Laurel Road','','Mount Laurel',37,'08054',22],
            [885,'Northern Burlington County Regional High School','160 Mansfield Road East','','Columbus',37,'08022',3],
            [887,'Northern Burlington County Regional Middle School','160 Mansfield Road East','','Columbus',37,'08022',22],
            [891,'Palmyra High School','5th &amp; Weart Boulevard','','Palmyra',37,'08065',22],
            [907,'Pemberton Township High School','148 Arney\'s Mount Road','','Pemberton',37,'08068',22],
            [929,'Springfield Township Elementary School','2146 Jacksonville Road','','Jobstown',37,'08041',22],
            [955,'Audubon Junior/senior High School','350 Edgewood Avenue','','Audubon',37,'08106',4],
            [979,'Highland Regional High School','450 Erial Road','','Blackwood',37,'08012',4],
            [981,'Timber Creek Regional High School','501 Jarvis Road','','Erial',37,'08081',22],
            [983,'Triton Regional High School','250 Schubert Ave','','Runnemede',37,'08078',22],
            [995,'Creative Arts High School','1700 Park Blvd','','Camden',37,'08104',22],
            [1030,'Camden County Technical School-gtc','343 Berlin Cross Keys Road','','Sicklerville',37,'08081',22],
            [1042,'Cherry Hill High School East','1750 Kresson Rd','','Cherry Hill',37,'08003',4],
            [1044,'Cherry Hill High School West','2101 Chapel Ave','','Cherry Hill',37,'08002',4],
            [1048,'Henry C. Beck Middle School','950 Cropwell Rd','','Cherry Hill',37,'08003',22],
            [1056,'John A. Carusi Middle School','315 Roosevelt Dr','','Cherry Hill',37,'08034',22],
            [1066,'Rosa International Middle School','485 Browning Lane','','Cherry Hill',37,'08003',22],
            [1074,'Collingswood High School','424 Collings Ave','','Collingswood',37,'08108',22],
            [1076,'Collingswood Middle School','414 Collings Ave','','Collingswood',37,'08108',22],
            [1078,'James A. Garfield Elementary School','480 Haddon Ave','','Collingswood',37,'08108',22],
            [1080,'Mark Newbie Elementary School','2 East Browning Rd','','Collingswood',37,'08108',22],
            [1110,'Union Valley Elementary School','1300 Jarvis Road','','Sicklerville',37,'08081',22],
            [1118,'Gloucester City Jr. Sr. High School','1300 Market Street','','Gloucester City',37,'08030',22],
            [1130,'Haddon Township High School','406 Memorial Avenue','','Westmont',37,'08108',4],
            [1141,'Central Elementary School','3 Lincoln Avenue','','Haddonfield',37,'08033',22],
            [1143,'Elizabeth Haddon School','501 West Redman Avenue','','Haddonfield',37,'08033',22],
            [1145,'Haddonfield Memorial High School','401 Kings Highway East','','Haddonfield',37,'08033',4],
            [1147,'Haddonfield Middle School','Five Lincoln Avenue','','Haddonfield',37,'08033',4],
            [1157,'Lindenwold High School','801 Egg Harbor Road','','Lindenwold',37,'08021',4],
            [1159,'Lindenwold Middle School','40 White Horse Avenue','','Lindenwold',37,'08021',22],
            [1191,'Pennsauken Intermediate School','8125 Park Avenue','','Pennsauken',37,'08110',22],
            [1198,'Overbrook Senior High School','1200 Turnerville Road','','Pine Hill',37,'08021',22],
            [1200,'Pine Hill Middle School','1100 Turnerville Road','','Pine Hill',37,'08021',22],
            [1209,'Sterling High School','501 South Warwick Road','','Somerdale',37,'08083',22],
            [1211,'Parkivew Elementary School','123 Parkview Rd','','Stratford',37,'08084',22],
            [1213,'Samuel S. Yellin Elementary School','111 Warwick Road','','Stratford',37,'08084',22],
            [1245,'Winslow Township High School','10 Cooper Folly Rd.','','Atco',37,'08004',4],
            [1247,'Winslow Township Middle School','30 Cooper Folly Road','','Atco',37,'08004',22],
            [1267,'Lower Cape May Regional High School','687 Rt 9','','Cape May',37,'08204',22],
            [1271,'Carl T. Mitnick Elementary School','905 Seashore Road','','Cape May',37,'08204',22],
            [1273,'David C. Douglass Memorial School','2600 Bayshore Rd','','Villas',37,'08251',22],
            [1285,'Middle Township High School','300 East Atlantic Avenue','','Cape May Court House',37,'08210',22],
            [1289,'Ocean City High School','501 Atlantic Avenue','','Ocean City',37,'08226',22],
            [1297,'Upper Township Elementary School','50 Old Tuckahoe Rd','','Marmora',37,'08223',22],
            [1299,'Upper Township Middle School','525 Perry Rd','','Petersburg',37,'08270',22],
            [1313,'Bridgeton High School','111 N West Avenue','','Bridgeton',37,'08302',22],
            [1331,'Cumberland Regional High School','Cumb. Regional High School','','Bridgeton',37,'08302',6],
            [1350,'Holly Heights Elementary School','2509 E Main Street','','Millville',37,'08332',22],
            [1352,'Lakeside Middle School','2 N  Sharp St','','Millville',37,'08332',22],
            [1354,'Millville Memorial High School','504 East Broad Street','','Millville',37,'08332',6],
            [1356,'Millville Senior High School','200 Wade Boulevard','','Millville',37,'08332',22],
            [1368,'Stow Creek School','11 Gum Tree Corner Road','','Bridgeton',37,'08302',22],
            [1425,'Bloomfield High School','160 Broad Street','','Bloomfield',37,'07003',7],
            [1483,'East Orange Campus High School','344 Prospect Street','','East Orange',37,'07017',7],
            [1567,'Livingston High School','30 Robert Harp Drive','','Livingston',37,'07039',7],
            [1581,'Millburn High School','462 Millburn Avenue','','Millburn',37,'07041',7],
            [1743,'Nutley High School','300 Franklin Avenue','','Nutley',37,'07110',22],
            [1809,'West Essex High School','65 West Greenbrook Rd','','North Caldwell',37,'07006',7],
            [1835,'Clayton High School','55 Pop Kramer Boulevard','','Clayton',37,'08312',22],
            [1836,'Clayton Middle School','55 Pop Kramer Blvd','','Clayton',37,'08312',22],
            [1840,'Clearview Regional High School','625 Breakneck Rd','','Mullica Hill',37,'08082',8],
            [1842,'Clearview Regional Middle School','595 Jefferson Rd','','Mullica Hill',37,'08062',22],
            [1850,'Deptford Township High School','575 S Fox Run Rd','','Deptford',37,'08096',8],
            [1856,'Deptford Middle School','890 Bankbridge Rd','','Sewell',37,'08080',22],
            [1871,'Gateway Regional High School','775 Tanyard Rd','','Woodbury Hts',37,'08096',8],
            [1875,'Glassboro High School','560 Joseph L  Bowe Blvd','','Glassboro',37,'08028',22],
            [1877,'Glassboro Intermediate School','202 N Delsea Dr','','Glassboro',37,'08028',22],
            [1894,'Pleasant Valley School','401 Cedar Rd','','Mullica Hill',37,'08062',22],
            [1896,'Kingsway Regional High School','201 Kings Highway','','Woolwich Twp',37,'08085',8],
            [1908,'Oak Knoll Elementary School','23 Bodine Avenue','','Williamstown',37,'08094',22],
            [1910,'Radix Elementary School','363 Radix Rd','','Williamstown',37,'08094',22],
            [1912,'Whitehall Elementary School','161 Whitehall Road','','Williamstown',37,'08094',22],
            [1914,'Williamstown High School','700 N Tuckahoe Rd','','Williamstown',37,'08094',8],
            [1916,'Williamstown Middle School','561 Clayton Rd','','Williamstown',37,'08094',22],
            [1932,'Paulsboro High School','670 N Delaware St','','Paulsboro',37,'08066',22],
            [1938,'Pitman High School','225 Linden Avenue','','Pitman',37,'08071',8],
            [1940,'Pitman Middle School','138 East Holly Avenue','','Pitman',37,'08071',22],
            [1952,'Walter Hill School','1815 Kings Highway','','Swedesboro',37,'08085',22],
            [1960,'Green-fields Elementary School','15 Hill Lane','','West Deptford',37,'08096',22],
            [1966,'West Deptford High School','1600 Old Crown Point Rd','','West Deptford',37,'08093',22],
            [1968,'West Deptford Middle School','675 Grove Rd','','West Deptford',37,'08066',22],
            [1974,'Bunker Hill Middle School','372 Pitman Downer Rd','','Sewell',37,'08080',22],
            [1976,'Chestnut Ridge Middle School','641 Hurffville  Crosskeys Road','','Sewell',37,'08080',22],
            [1982,'Orchard Valley Middle School','238 Pitman  Downer Rd','','Sewell',37,'08080',22],
            [1986,'Washington Township High School','529 Hurffville  Crosskeys Rd','','Sewell',37,'08080',8],
            [1990,'Whitman Elementary School','827 Whitman School Dr','','Turnersville',37,'08012',22],
            [2002,'Woodbury Junior/senior High School','25 N. Broad Street','','Woodbury',37,'08096',22],
            [2175,'Secaucus High School','11 Mill Ridge Road','','Secaucus',37,'07094',22],
            [2254,'Delaware Valley Regional High School','19 Senator Stout Rd','','Frenchtown',37,'08825',10],
            [2282,'Hunterdon Central Regional High School District','84  Route 31','','Flemington',37,'08822',10],
            [2304,'North Hunterdon High School','1445 State Route 31','','Annandale',37,'08801',10],
            [2306,'Voorhees High School','256 County Route 513','','Glen Gardner',37,'08826',22],
            [2318,'South Hunterdon Regional High School ','301 Mt Airy Harbourton Rd','','Lambertville',37,'08530',22],
            [2345,'Hightstown High School','25 Leshin Lane','','Hightstown',37,'08520',11],
            [2353,'Ewing High School','900 Parkway Ave','','Ewing',37,'08618',22],
            [2379,'Hamilton West-watson','2720 South Clinton Avenue','','Hamilton',37,'08610',22],
            [2415,'Hopewell Valley Central High School','259 Pennington Titusville Rd','','Pennington',37,'08534',22],
            [2427,'Lawrence High School','2525 Princeton Pike','','Lawrenceville',37,'08648',22],
            [2452,'Princeton High School','151 Moore Street','','Princeton',37,'08540',22],
            [2458,'Robbinsville High School','155 Robbinsville Edinburg Rd','','Robbinsville',37,'08691',22],
            [2521,'West Windsor-Plainsboro High School North','90 Grovers Mill Road','','Plainsboro',37,'08536',22],
            [2525,'Carteret High School','199 Washington Avenue','','Carteret',37,'07008',22],
            [2549,'Churchill Jr High School','18 Norton Road','','E Brunswick',37,'08816',12],
            [2551,'East Brunswick High School','380 Cranbury Road','','E Brunswick',37,'08816',12],
            [2584,'John P. Stevens High School','855 Grove Avenue','','Edison',37,'08820',12],
            [2604,'Highland Park High School','102 North Fifth Avenue','','Highland Park',37,'08904',22],
            [2618,'Metuchen High School','400 Grove Ave','','Metuchen',37,'08840',12],
            [2673,'Monroe Township High School','200 Schoolhouse Road','','Monroe Township',37,'08831',12],
            [2691,'New Brunswick High School','1000 Somerset St','','New Brunswick',37,'08901',22],
            [2709,'North Brunswick Township High School','98 Raider Road','','North Brunswick',37,'08902',22],
            [2731,'Old Bridge High School','4209 Route 516','','Matawan',37,'07747',22],
            [2756,'Perth Amboy High School','Eagle Ave  &amp; Francis St','','Perth Amboy',37,'08861',22],
            [2820,'South Brunswick High School','750 Ridge Road','','Monmouth Junction',37,'08852',12],
            [2833,'South Plainfield High School','200 Lake Street','','South Plainfield',37,'07080',22],
            [2859,'Colonia High School','180 East Street','','Colonia',37,'07067',22],
            [2871,'John F. Kennedy High School','200 Washington Avenue','','Iselin',37,'08830',22],
            [2898,'Woodbridge High School','1 Samuel Lupo Place','','Woodbridge',37,'07095',22],
            [2952,'Colts Neck High School','59 Five Points Road','','Colts Neck',37,'07722',22],
            [2954,'Freehold Borough High School','2 Robertsville Road','','Freehold',37,'07728',21],
            [2956,'Freehold Township High School','281 Elton Adelphia Road','','Freehold Twp.',37,'07728',21],
            [2958,'Howell High School','405 Squankum  Yellowbrook Road','','Farmingdale',37,'07727',21],
            [3014,'Raritan High School','419 Middle Road','','Hazlet',37,'07730',12],
            [3024,'Holmdel High School','36 Crawfords Corner Road','','Holmdel',37,'07733',22],
            [3035,'Keansburg High School','140 Port Monmouth Road','','Keansburg',37,'07734',22],
            [3091,'Middletown High School North','63 Tindall Road','','Middletown',37,'07748',21],
            [3093,'Middletown High School South','900 Nut Swamp Road','','Middletown',37,'07748',22],
            [3115,'Monmouth Regional High School','One Norman J. Field Way','','Tinton Falls',37,'07724',22],
            [3135,'Manasquan High School','167 Broad Street','','Manasquan',37,'08736',22],
            [3143,'Matawan Regional High School','450 Atlantic Avenue','','Aberdeen',37,'07747',21],
            [3161,'Biotechnology High School','5000 Kozloski Road','','Freehold',37,'07728',22],
            [3167,'High Technology High School','765 Newman Springs Road','','Lincroft',37,'07738',22],
            [3206,'Red Bank Regional High School','101 Ridge Road','','Little Silver',37,'07739',21],
            [3238,'Allentown High School','27 High Street','','Allentown',37,'08501',22],
            [3252,'Wall High School','1630 18th Ave','','Wall',37,'07719',22],
            [3315,'Hanover Park High School','63 Mt  Pleasant Avenue','','East Hanover',37,'07936',22],
            [3344,'Kinnelon High School','121 Kinnelon Road','','Kinnelon',37,'07405',13],
            [3392,'Madison High School','170 Ridgedale Avenue','','Madison',37,'07940',22],
            [3408,'Montville Township High School','100 Horseneck Road','','Montville',37,'07045',13],
            [3422,'Morris Hills High School','520 West Main Street','','Rockaway',37,'07866',13],
            [3455,'Central Middle School','1620 Route 46','','Parsippany',37,'07054',22],
            [3473,'Parsippany High School','309 Baldwin Rd','','Parsippany',37,'07054',13],
            [3533,'Roxbury High School','One Bryant Drive','','Succasunna',37,'07876',13],
            [3547,'West Morris Central High School','259 Bartley Road','','Chester',37,'07930',13],
            [3549,'West Morris Mendham High School','65 East Main Street','','Mendham',37,'07945',13],
            [3589,'Brick Township Memorial High School','2001 Lanes Mill Rd','','Brick',37,'08724',14],
            [3611,'Central Regional High School','509 Forest Hills Parkway','','Bayville',37,'08721',14],
            [3631,'Jackson Memorial High School','101 Don Connor Blvd','','Jackson',37,'08527',22],
            [3671,'Frog Pond Elementary School','305 Frog Pond Road','','Little Egg Harbor',37,'08087',22],
            [3685,'Manchester Township High School','101 S  Colonial Dr','','Manchester',37,'08759',22],
            [3707,'Ocvts Performing Arts High School','Joint Base Mcguire-dix-lakehurst','','Lakehurst',37,'08733',22],
            [3714,'Pinelands Regional High School','565 Nugentown Road','','Little Egg Harbor',37,'08087',22],
            [3716,'Pinelands Regional Junior High School','590 Nugentown Road','','Little Egg Harbor',37,'08087',22],
            [3726,'G. Harold Antrim Elementary School','401 Niblick Street','','Point Pleasant Beach',37,'08742',22],
            [3728,'Point Pleasant Beach High School','700 Trenton Avenue','','Point Pleasant Beach',37,'08742',14],
            [3736,'Point Pleasant Borough High School','Laura Herbert Dr','','Point Pleasant',37,'08742',14],
            [3758,'East Dover Elementary School','725 Vaughn Avenue','','Toms River',37,'08753',22],
            [3762,'Joseph A. Citta Elementary School','2050 Lakewood Road','','Toms River',37,'08755',22],
            [3770,'South Toms River Elementary School','419 Dover Road','','South Toms River',37,'08757',22],
            [3774,'Toms River High School North','1245 Old Freehold Road','','Toms River',37,'08753',22],
            [3784,'Walnut Street Elementary School','60 Walnut Street','','Toms River',37,'08753',22],
            [4006,'Pompton Lakes High School','44 Lakeside Avenue','','Pompton Lakes',37,'07442',15],
            [4050,'Wayne Hills High School','272 Berdan Avenue','','Wayne',37,'07470',15],
            [4052,'Wayne Valley High School','551 Valley Road','','Wayne',37,'07470',15],
            [4066,'West Milford High School','67 Highlander Drive','','West Milford',37,'07480',22],
            [4078,'Elsinboro Township School','631 Salem  Fort Elfsborg Road','','Salem',37,'08079',22],
            [4088,'Pennsville Middle School','4 William Penn Avenue','','Pennsville',37,'08070',22],
            [4090,'Pennsville Memorial High School','110 South Broadway','','Pennsville',37,'08070',16],
            [4092,'Valley Park Elementary School','63 Mahoney Road','','Pennsville',37,'08070',22],
            [4094,'Arthur P Schalick High School','718 Centerton Road','','Pittsgrove',37,'08318',22],
            [4111,'Penns Grove Middle School','351 Maple Avenue','','Penns Grove',37,'08069',22],
            [4113,'Quinton Township School','8 Robinson Street','','Quinton',37,'08072',22],
            [4117,'Salem High School','219 Walnut Street','','Salem',37,'08079',22],
            [4133,'Upper Pittsgrove School','235 Pine Tavern Road','','Monroeville',37,'08343',22],
            [4135,'Mary S. Shoemaker School','Mary S  Shoemaker School','','Woodstown',37,'08098',22],
            [4139,'Woodstown High School','Woodstown High School','','Woodstown',37,'08098',16],
            [4141,'Woodstown Middle School','Woodstown Middle School','','Woodstown',37,'08098',22],
            [4188,'Oak Street School','70 W Oak St','','Basking Ridge',37,'07920',22],
            [4190,'Ridge High School','268 So  Finley Ave','','Basking Ridge',37,'07920',17],
            [4236,'Manville High School','1100 Brooks Boulevard','','Manville',37,'08835',22],
            [4242,'Montgomery Township School District','1016 Route 601','','Skillman',37,'08558',17],
            [4254,'North Plainfield High School','34 Wilson Ave','','N Plainfield',37,'07060',17],
            [4266,'Somerville High School','222 Davenport Street','','Somerville',37,'08876',17],
            [4286,'Watchung Hills Regional High School','108 Stirling Rd','','Warren',37,'07059',22],
            [4319,'High Point Regional High School','299 Pidgeon Hill Road','','Sussex',37,'07461',18],
            [4329,'Hopatcong High School','2a Windsor Ave','','Hopatcong',37,'07843',22],
            [4337,'Kittatinny Regional High School','77 Halsey Road','','Newton',37,'07860',18],
            [4348,'Hillsborough High School','466 Raider Boulevard','','Hillsborough',37,'08844',17],
            [4357,'Sparta High School','70 West Mountain Road','','Sparta',37,'07871',22],
            [4384,'Vernon Township High School','1832 Route 565','','Vernon',37,'07462',22],
            [4388,'Wallkill Valley Regional High School','10 Grumm Road','','Hardyston Township',37,'07419',22],
            [4392,'Governor Livingston High School','175 Watchung Boulevard','','Berkeley Heights',37,'07922',22],
            [4416,'Cranford High School','201 West End Place','','Cranford',37,'07016',22],
            [4546,'New Providence High School','35 Pioneer Dr','','New Providence',37,'07974',19],
            [4630,'Scotch Plains-Fanwood High School','667 Westfield Road','','Scotch Plains',37,'07076',19],
            [4659,'Summit High School','125 Kent Place Boulevard','','Summit',37,'07901',19],
            [4697,'Academy For Performing Arts','1776 Raritan Road','','Scotch Plains',37,'07076',22],
            [4703,'Union County Tech','1776 Raritan Rd','','Scotch Plains',37,'07076',22],
            [4721,'Westfield Senior High School','550 Dorian Road','','Westfield',37,'07090',19],
            [4733,'Belvidere High School','809 Oxford Street','','Belvidere',37,'07823',22],
            [4802,'Warren Hills Regional High School','41 Jackson Valley Road','','Washington',37,'07882',20],
            [4975,'Vineland Public Charter School','23 West Chestnut Avenue','','Vineland',37,'08360',22],
            [5020,'Immaculata High School','240 Mountain Avenue','','Somerville',37,'08876',17],
            [5021,'Mount Saint Mary Academy','1645 Us-22','','Watchung',37,'07069',17],
            [5022,'Princeton Day School','650 Great Road','','Princeton',37,'08540',22],
            [5311,'Camden Catholic High School','300 Cuthbert Blvd','','Cherry Hill',37,'08002',22],
            [5312,'Mater Dei High School','538 Church St','','Middletown',37,'07748',22],
            [5313,'Edgarton Christian Academy','212 Catawba Ave','','Newfield',37,'08344',22],
            [5314,'New Jersey Youth Chorus','230 Mendham Rd','','Morristown',37,'07960',22],
            [5315,'Newark Academy','91 S Orange Ave','','Livingston',37,'07039',7],
            [5316,'Dwight Morrow Academies @ Englewood','264 Knickerbocker Rd','','Englewood',37,'07631',22],
            [5317,'North Jersey Home Schoolers Association','39 Cheryl Hills Drive','','Hawthorne',37,'07506',15],
            [5318,'Hawthorne Christian Academy','2000 Nj-208','','Hawthorne',37,'07506',15],
            [5319,'Rutgers Preparatory School','1345 Easton Ave','','Somerset',37,'08873',17],
            [5320,'Bishop Eustace Preparatory School','5552 Nj-70','','Pennsauken Township',37,'08109',4],
            [5322,'St. Augustine Preparatory School','611 Cedar Ave','','Richland',37,'08350',22],
            [5599,'The Wardlaw-hartridge School','1295 Inman Road','','Edison',37,'08820',22],
            [5611,'Pope John Xxiii Regional High School','28 Andover Road','','Sparta',37,'07871',22],
            [5720,'Montclair Kimberley Academy Upper School','6 Lloyd Road','','Montclair',37,'07042',22],
            [5880,'Bergenfield High School','80 South Prospect Street','','Bergenfield',37,'07621',2],
            [5901,'Jackson Liberty High School','125 North Hope Chapel Rd.','','Jackson',37,'08527',22],
            [5933,'Ramsey High School','256 E. Main St','','Ramsey',37,'07446',2],
            [6156,'St. Peter\'s Preparatory School','144 Grand Street','','Jersey City',37,'07302',22],
            [6343,'Penns Grove High School','334 Harding Hwy','','Carneys Point',37,'08069',22],
            [6546,'Ocean Township High School','550 West Park Ave','','Oakhurst',37,'07755',22],
            [6892,'Eastern Regional High School','28 Hidden Acres Drive','','Voorhees',37,'08043',22],
            [6930,'Haddon Heights Jr/sr High School','301 Second Avenue','','Haddon Heights',37,'08035',4],
            [6942,'Westwood Regional Jr./sr. High School','701 Ridgewood Road','','Washington Township',37,'07676',22],
            [7025,'Piscataway High School','100 Behmer Road','','Piscataway',37,'08854',12],
            [7028,'John F. Kennedy Memorial High School','200 Washington Ave','','Iselin',37,'08830',12],
            [7087,'West Windsor Plainsboro High School South','26 Windsor Drive','','Princeton Junction',37,'08550',22],
            [7195,'Little Way Homeschool Cooperative','St. Rose Of Lima Church','312 Ridgedale Avenue','East Hanover',37,'07936',22],
            [7205,'Cresskill High School','1 Lincoln Drive','','Cresskill',37,'07626',22],
            [7470,'Cumberland Christian School','1100 W Sherman Ave','','Vineland',37,'08360',22],
            [7471,'Holy Spirit High School','500 S New Rd','','Absecon',37,'08201',22],
            [7472,'Rowan University','201 Mullica Hill Rd','','Glassboro',37,'08028',22],
            [7473,'The Pilgrim Academy','247 N Genoa Ave','','Egg Harbor City',37,'08215',22],
            [7475,'Our Lady Of Mount Carmel','1 N. Cedar Avenue','','Berlin',37,'08009',22],
            [7476,'The King\'s Christian School','5 Carnegie Plaza','','Cherry Hill',37,'08003',22],
            [7477,'Resurrection Catholic School','402 Kings Hwy N','','Cherry Hill',37,'08034',22],
            [7479,'Afterschool Music','40 South Broadway','','Pitman',37,'08071',22],
            [7480,'Our Lady Of Mercy Academy','1001 Main Road','','Newfield',37,'08334',22],
            [7485,'Fjr School Of Music','45 Dayton Crescent','','Bernardsville',37,'07924',17],
            [7486,'Howell Home School','','','Howell',37,'07710',22],
            [7487,'Pingry School','131 Martingsville Road','','Basking Ridge',37,'07924',22],
            [7488,'Peddie School','201 Main Street','','Hightstown',37,'08520',11],
            [7489,'The Lawrenceville School','2500 Main Street','','Lawrenceville',37,'08648',22],
            [7490,'Home School Yee','86 Forest Way','','Morris Plains',37,'012345',22],
            [7491,'Home School Kadetsky','103 Wildflower Court','','Egg Harbor Township',37,'012345',22],
            [7494,'Salem County Christian Academy','104 Sparks Avenue','','Pennsville',37,'08070',22],
            [7495,'Garden State Girlchoir','35 West Chelten Avenue','','Philadelphia',44,'019144',22],
            [7497,'Philadelphia Girls Choir','1336 Spring Garden Street','','Philadelphia',44,'019123',22],
            [7498,'Burlington City High School','100 Blue Devil','','Burlington',37,'08016',3],
            [7499,'Moorestown Friends School','110 East Main Street','','Moorestown',37,'08057',22],
            [7500,'Assumption Regional Catholic School','146 South Pitney Road','','Galloway',37,'08205',22],
            [7501,'Private 7994','Private Teacher','','Private',37,'012345',22],
            [7502,'Delbarton School','230 Mendham Road','','Morristown',38,'07960',22],
            [7503,'Rocknrollchorus','None','','None',38,'00',22],
            [7506,'Saint Mary Of The Lakes School','196 Nj-70','','Medford',37,'08088',22],
            [7508,'Saddle River Day School','147 Chestnut Ridge Road','','Saddle River',37,'07458',22],
            [7509,'Atlantic Christian School','391 Zion Rd','','Egg Harbor Township',37,'08234',22],
            [7510,'Walnut Street Middle School','411 Walnut St','','Delanco',37,'08075',22],
            [7511,'Maurice River Township Elementary School','3593 Nj-47','','Millville',37,'08348',22],
            [7512,'North Dover Elementary','1759 New Hampshire Avenue','','Toms River',37,'08755',22],
            [7513,'Music Training Center','137 Route 73','','South Marlton',37,'08053',22],
            [7514,'New Jersey Boychoir & Garden State Girlchoir','Unknown','','Cinnaminson',37,'08077',22],
            [7518,'Sjcda Proxy School','1 Main Street','','Anytown',37,'08080',22],
            [7519,'Saint Rose High School','607 7th Avenue','','Belmar',37,'07719',22],
            [7522,'The New School','New Address','','New City',37,'087654',22],
            [7523,'JF Tatem Elementary','1 Glover Ave','','Haddonfield',37,'08033',22],
            [7526,'Chartertech High School for the Performing Arts','413 New Rd','','Somers Point',37,'0008244-2143',1],
            [8556,'Verona High School','NULL','NULL','Verona',37,'07044',22],
            [8557,'Ranney School','Ranney School 235 Hope Rd','','Tinton Falls',37,'07724',22],
            [8558,'Hackettstown High School','599 Warren Street','NULL','Hackettstown',37,'07840',22],
            [8560,'Parsippany Hills High School','NULL','NULL','Morris Plains',37,'07950',22],
            [8561,'Mountain Lakes High School','96 Powerville Road','96 Powerville Road','Mountain Lakes',37,'07046',13],
            [8577,'Columbia High School','17 Parker Ave','NULL','Maplewood',37,'0NULL',7],
            [8579,'Sang Stu','100 Old Palisade Rd, 1405','100 Old Palisade Rd, 1405','Fort Lee',37,'07024',22],
            [8587,'Randolph High School','511 Millbrook Avenue','','Randolph ',37,'07869',1],
            [8592,'Newton High School','NULL','NULL','Newton',37,'07860',18],
            [8595,'Cedar Grove High School','90 Rugby Road','','Cedar Grove',37,'07009',1],
            [8614,'Vineland High School','NULL','NULL','Vineland',37,'08361',1],
            [8631,'Toms River High School East','1225 Raider Way','NULL','Toms River',37,'08753',1],
            [8641,'Chatham High School','NULL','NULL','NULL',37,'07928',1],
            [8645,'Audubon High School','NULL','NULL','',37,'0',1],
            [8652,'Bridgewater-Raritan High School','600 Garretson Rd','','Bridgewater',37,'08807',17],
            [8657,'Indian Mills Memorial School','295 Indian Mills Road','295 Indian Mills Road','Shamong',37,'08088',1],
            [8660,'Voorhees Middle School','1000 Holly Oak Dr','1000 Holly Oak Dr','Voorhees',37,'08043',1],
            [8663,'Cinnaminson Middle School','312 N. Forklanding Rd.','312 N. Forklanding Rd.','Cinnaminson',37,'08077',1],
            [8665,'Pennsauken High S','NULL','NULL','Pennsauken',1,'08110',1],
            [8689,'Resonance School of Music ','NULL','NULL','Sewell',37,'08080',1],
            [8691,'Penn Beach Elementary','96 Kansas Road','NULL','Pennsville',37,'08070',1],
            [8693,'J Mason Tomlin Elementary School','NULL','NULL','Mantua Township',37,'08051',1],
            [8695,'Edison High School','50 Boulevard of the Eagles','NULL','Edison',37,'08817',1],
            [8700,'Brick Township High School','346 Chambers Bridge Rd','NULL','Brick',37,'08723',1],
            [8701,'Morris Knolls High School','50 Knoll Drive','50 Knolls Drive','Rockaway',37,'07866',1],
            [8708,'Leonia High School','100 Christie Heights St.','NULL','Leonia',37,'07605',2],
            [8712,'River Dell Senior High School','55 Pyle Street','NULL','Oradell',37,'07649',1],
            [8715,'Pascack Valley High School','200 Piermont Avenue','','Hillsdale',37,'07642',2],
            [8718,'Immaculate Conception High School','NULL','NULL','Lodi',37,'07644',1],
        ];
    }
}
