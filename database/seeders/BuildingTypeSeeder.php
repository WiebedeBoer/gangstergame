<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuildingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //residential
        //1
		DB::table('building_types')->insert([
			'building_name' => 'house (colonial revival)',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //2
		DB::table('building_types')->insert([
			'building_name' => 'house (gothic revival)',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //3
		DB::table('building_types')->insert([
			'building_name' => 'house (tudor revival)',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //4
		DB::table('building_types')->insert([
			'building_name' => 'house (queen anne revival)',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //5
		DB::table('building_types')->insert([
			'building_name' => 'house (neoclassical)',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //tenement
        //6
		DB::table('building_types')->insert([
			'building_name' => 'tenement (rookery)',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'brothel'
        ]);
        //7
		DB::table('building_types')->insert([
			'building_name' => 'tenement (brownstone)',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'safehouse'
        ]);	
        //8
		DB::table('building_types')->insert([
			'building_name' => 'tenement (greystone)',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'safehouse'
        ]);		
        //9
		DB::table('building_types')->insert([
			'building_name' => 'tenement (queen anne revival)',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'safehouse'
        ]);	
        //10
		DB::table('building_types')->insert([
			'building_name' => 'tenement (beaux arts)',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'safehouse'
        ]);	
        //industrial (food)
        //11
		DB::table('building_types')->insert([
			'building_name' => 'abatoir',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //12
		DB::table('building_types')->insert([
			'building_name' => 'cannery',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //13
		DB::table('building_types')->insert([
			'building_name' => 'food processor',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //14	
		DB::table('building_types')->insert([
			'building_name' => 'ice house',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //15
		DB::table('building_types')->insert([
			'building_name' => 'milk yard',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'moonshine still'
        ]);	
        //industrial (textile)
        //16
		DB::table('building_types')->insert([
			'building_name' => 'textiles',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //17
		DB::table('building_types')->insert([
			'building_name' => 'furriers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //18
		DB::table('building_types')->insert([
			'building_name' => 'leather curers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //19
		DB::table('building_types')->insert([
			'building_name' => 'tanners',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //20
		DB::table('building_types')->insert([
			'building_name' => 'weavers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (construction)
        //21
		DB::table('building_types')->insert([
			'building_name' => 'builders',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //22
		DB::table('building_types')->insert([
			'building_name' => 'cement factory',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //23
		DB::table('building_types')->insert([
			'building_name' => 'engineers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //24
		DB::table('building_types')->insert([
			'building_name' => 'excavators',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //25
		DB::table('building_types')->insert([
			'building_name' => 'glaziers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //26
		DB::table('building_types')->insert([
			'building_name' => 'joiners',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //27
		DB::table('building_types')->insert([
			'building_name' => 'lumber yard',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //28
		DB::table('building_types')->insert([
			'building_name' => 'stone mason',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (iron)
        //29
		DB::table('building_types')->insert([
			'building_name' => 'iron mongers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //30
		DB::table('building_types')->insert([
			'building_name' => 'sheet workers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //31
		DB::table('building_types')->insert([
			'building_name' => 'steel mill',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //industrial (common)
        //32
		DB::table('building_types')->insert([
			'building_name' => 'ceramics',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //33
		DB::table('building_types')->insert([
			'building_name' => 'chandler',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //34
		DB::table('building_types')->insert([
			'building_name' => 'fabricators',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //35
		DB::table('building_types')->insert([
			'building_name' => 'factory',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //36
		DB::table('building_types')->insert([
			'building_name' => 'packaging plant',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //37
		DB::table('building_types')->insert([
			'building_name' => 'paper mill',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'counterfeit press'
        ]);	
        //38
		DB::table('building_types')->insert([
			'building_name' => 'wheelwrights',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (freight)
        //39 .7
		DB::table('building_types')->insert([
			'building_name' => 'freight forwarding',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'teamsters'
        ]);	
        //warehouse
        //40 .10
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'warehouse'
        ]);
        //transport
        //41 .1
		DB::table('building_types')->insert([
			'building_name' => 'docks',
            'category' => 'industrial',
            'building_size' => '5x5',
            'labour' => 'gangsters'
        ]);	
        //42 .2
		DB::table('building_types')->insert([
			'building_name' => 'railroad station',
            'category' => 'municipal',
            'building_size' => '5x2'
        ]);
        //commercial (food)
        //43
		DB::table('building_types')->insert([
			'building_name' => 'bakery',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //44
		DB::table('building_types')->insert([
			'building_name' => 'butcher',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //45
		DB::table('building_types')->insert([
			'building_name' => 'cake store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //46
		DB::table('building_types')->insert([
			'building_name' => 'candy store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //47
		DB::table('building_types')->insert([
			'building_name' => 'cheese store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //48
		DB::table('building_types')->insert([
			'building_name' => 'delicatessen',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //49
		DB::table('building_types')->insert([
			'building_name' => 'fish monger',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //50
		DB::table('building_types')->insert([
			'building_name' => 'fruit and vegetable store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //51
		DB::table('building_types')->insert([
			'building_name' => 'grocery store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (gastronomy)
        //52
		DB::table('building_types')->insert([
			'building_name' => 'breakfast bar',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //53
		DB::table('building_types')->insert([
			'building_name' => 'catering supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //54
		DB::table('building_types')->insert([
			'building_name' => 'cafe',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'speakeasy'
        ]);
        //55
		DB::table('building_types')->insert([
			'building_name' => 'icecream parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //56
		DB::table('building_types')->insert([
			'building_name' => 'ice store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //57
		DB::table('building_types')->insert([
			'building_name' => 'milk bar',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //58
		DB::table('building_types')->insert([
			'building_name' => 'soda fountain',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (health and beauty)
        //59
		DB::table('building_types')->insert([
			'building_name' => 'barber',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //60
		DB::table('building_types')->insert([
			'building_name' => 'beauty parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //61
		DB::table('building_types')->insert([
			'building_name' => 'cosmetics store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //62
		DB::table('building_types')->insert([
			'building_name' => 'doctor',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
        //63
		DB::table('building_types')->insert([
			'building_name' => 'drug store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
        //64
		DB::table('building_types')->insert([
			'building_name' => 'hair salon',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //65
		DB::table('building_types')->insert([
			'building_name' => 'health center',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
        //66
		DB::table('building_types')->insert([
			'building_name' => 'optometrist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //67
		DB::table('building_types')->insert([
			'building_name' => 'orthodontist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (fashion)
        //68
		DB::table('building_types')->insert([
			'building_name' => 'bridal parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //69
		DB::table('building_types')->insert([
			'building_name' => 'clothier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //70
		DB::table('building_types')->insert([
			'building_name' => 'costume store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //71
		DB::table('building_types')->insert([
			'building_name' => 'dressmaker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //72
		DB::table('building_types')->insert([
			'building_name' => 'fur store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //73
		DB::table('building_types')->insert([
			'building_name' => 'haberdashery',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //74
		DB::table('building_types')->insert([
			'building_name' => 'jeweler',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //75
		DB::table('building_types')->insert([
			'building_name' => 'ladieswear',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //76
		DB::table('building_types')->insert([
			'building_name' => 'lingerie store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //77
		DB::table('building_types')->insert([
			'building_name' => 'milliner',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //78
		DB::table('building_types')->insert([
			'building_name' => 'perfume store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //79
		DB::table('building_types')->insert([
			'building_name' => 'shoe store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //80
		DB::table('building_types')->insert([
			'building_name' => 'tailor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //81
		DB::table('building_types')->insert([
			'building_name' => 'watchmaker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //82
		DB::table('building_types')->insert([
			'building_name' => 'wig maker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (services)
        //83
		DB::table('building_types')->insert([
			'building_name' => 'blacksmith',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //84
		DB::table('building_types')->insert([
			'building_name' => 'coffin maker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //85
		DB::table('building_types')->insert([
			'building_name' => 'detective agency',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //86
		DB::table('building_types')->insert([
			'building_name' => 'electrician',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //87
		DB::table('building_types')->insert([
			'building_name' => 'french polisher',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //88
		DB::table('building_types')->insert([
			'building_name' => 'funeral director',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //89
		DB::table('building_types')->insert([
			'building_name' => 'laundry',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //90
		DB::table('building_types')->insert([
			'building_name' => 'locksmith',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //91
		DB::table('building_types')->insert([
			'building_name' => 'pest controller',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //92
		DB::table('building_types')->insert([
			'building_name' => 'photographer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //93
		DB::table('building_types')->insert([
			'building_name' => 'plumber',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
        //94
		DB::table('building_types')->insert([
			'building_name' => 'shoe repair',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //95
		DB::table('building_types')->insert([
			'building_name' => 'sign writer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //96
		DB::table('building_types')->insert([
			'building_name' => 'upholsterer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //97
		DB::table('building_types')->insert([
			'building_name' => 'window cleaner',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //98
		DB::table('building_types')->insert([
			'building_name' => 'tattoo parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //99
		DB::table('building_types')->insert([
			'building_name' => 'saddler',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //100
		DB::table('building_types')->insert([
			'building_name' => 'trade union',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'teamsters'
        ]);
        //commercial (financial)
        //101
		DB::table('building_types')->insert([
			'building_name' => 'bailiff',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //102
		DB::table('building_types')->insert([
			'building_name' => 'finance company',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'accountants'
        ]);
        //103
		DB::table('building_types')->insert([
			'building_name' => 'real estate',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (novelty)
        //104
		DB::table('building_types')->insert([
			'building_name' => 'art gallery',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //105
		DB::table('building_types')->insert([
			'building_name' => 'antiques dealers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //106
		DB::table('building_types')->insert([
			'building_name' => 'diamond merchant',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //107
		DB::table('building_types')->insert([
			'building_name' => 'gift store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //108
		DB::table('building_types')->insert([
			'building_name' => 'gold merchant',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //109
		DB::table('building_types')->insert([
			'building_name' => 'pawnbrokers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //110
		DB::table('building_types')->insert([
			'building_name' => 'stamp and coin dealer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
        //111
		DB::table('building_types')->insert([
			'building_name' => 'tobacconist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (leisure)
        //112
		DB::table('building_types')->insert([
			'building_name' => 'dance studio',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
        //113
		DB::table('building_types')->insert([
			'building_name' => 'golf store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //114
		DB::table('building_types')->insert([
			'building_name' => 'massage parlor',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
        //115
		DB::table('building_types')->insert([
			'building_name' => 'sports equipment',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (home improvement)
        //116
		DB::table('building_types')->insert([
			'building_name' => 'china store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //117
		DB::table('building_types')->insert([
			'building_name' => 'electrical supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //118
		DB::table('building_types')->insert([
			'building_name' => 'florist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //119
		DB::table('building_types')->insert([
			'building_name' => 'gardening supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //120
		DB::table('building_types')->insert([
			'building_name' => 'glassware',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
        //121
		DB::table('building_types')->insert([
			'building_name' => 'hardware store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //122
		DB::table('building_types')->insert([
			'building_name' => 'lumber merchant',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //123
		DB::table('building_types')->insert([
			'building_name' => 'nursery store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //124
		DB::table('building_types')->insert([
			'building_name' => 'piano store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //125
		DB::table('building_types')->insert([
			'building_name' => 'pet store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (entertainment)
        //126
		DB::table('building_types')->insert([
			'building_name' => 'book store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'numbers racket'
        ]);
        //127
		DB::table('building_types')->insert([
			'building_name' => 'gramophone store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //128
		DB::table('building_types')->insert([
			'building_name' => 'music store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //129
		DB::table('building_types')->insert([
			'building_name' => 'news agency',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'numbers racket'
        ]);
        //130
		DB::table('building_types')->insert([
			'building_name' => 'printer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'counterfeit press'
        ]);
        //131
		DB::table('building_types')->insert([
			'building_name' => 'record store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //132
		DB::table('building_types')->insert([
			'building_name' => 'stationer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'counterfeit press'
        ]);
        //133
		DB::table('building_types')->insert([
			'building_name' => 'toy store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (labour pools)
        //134
		DB::table('building_types')->insert([
			'building_name' => 'accountants',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'accountants'
        ]);	
        //135
		DB::table('building_types')->insert([
			'building_name' => 'lawyers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'lawyers'
        ]);	
        //136
		DB::table('building_types')->insert([
			'building_name' => 'gym',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'prizefight ring',
            'labour' => 'gangsters'
        ]);	
        //137
		DB::table('building_types')->insert([
			'building_name' => 'pool hall',
            'category' => 'commercial',
            'building_size' => '1x1',
            'labour' => 'gangsters'
        ]);	
        //gunsmith
        //138
		DB::table('building_types')->insert([
			'building_name' => 'gunsmith',
            'category' => 'commercial',
            'building_size' => '1x1',
            'equipment' => 'gun',
        ]);	
        //commercial (medium)
        //139
		DB::table('building_types')->insert([
			'building_name' => 'local store',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'numbers racket'
        ]);	
        //140
		DB::table('building_types')->insert([
			'building_name' => 'convenience store',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'numbers racket'
        ]);	
        //141
		DB::table('building_types')->insert([
			'building_name' => 'hotel (small)',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'brothel'
        ]);	
        //142
		DB::table('building_types')->insert([
			'building_name' => 'restaurant',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'speakeasy'
        ]);	
        //143
		DB::table('building_types')->insert([
			'building_name' => 'bank (small)',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino',
            'labour' => 'accountants'
        ]);
        //144
		DB::table('building_types')->insert([
			'building_name' => 'auction room',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino'
        ]);	
        //145
		DB::table('building_types')->insert([
			'building_name' => 'removal company',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
        //146
		DB::table('building_types')->insert([
			'building_name' => 'cab company',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino'
        ]);	
        //147
		DB::table('building_types')->insert([
			'building_name' => 'carpet store',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
        //148
		DB::table('building_types')->insert([
			'building_name' => 'furniture store',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
        //149
		DB::table('building_types')->insert([
			'building_name' => 'department store (junior)',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'numbers racket'
        ]);	
        //auto dealer
        //150
		DB::table('building_types')->insert([
			'building_name' => 'auto dealer',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'loanshark',
            'equipment' => 'car',
        ]);	
        //commercial (large)
        //151
		DB::table('building_types')->insert([
			'building_name' => 'bank',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'casino',
            'labour' => 'accountants'
        ]);	
        //152
		DB::table('building_types')->insert([
			'building_name' => 'department store (mainline)',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'numbers racket'
        ]);	
        //153
		DB::table('building_types')->insert([
			'building_name' => 'hotel',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'brothel'
        ]);	
        //154
		DB::table('building_types')->insert([
			'building_name' => 'movie theatre',
            'category' => 'commercial',
            'building_size' => '2x2'
        ]);	
        //media
        //155 .5
		DB::table('building_types')->insert([
			'building_name' => 'newspaper',
            'category' => 'media',
            'building_size' => '2x2'
        ]);	
        //156 .1
		DB::table('building_types')->insert([
			'building_name' => 'radio',
            'category' => 'media',
            'building_size' => '2x2'
        ]);
        //municipal
        //157 .2
		DB::table('building_types')->insert([
			'building_name' => 'fire department',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //158 .4
		DB::table('building_types')->insert([
			'building_name' => 'hospital',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //159
		DB::table('building_types')->insert([
			'building_name' => 'school',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //160
		DB::table('building_types')->insert([
			'building_name' => 'highschool',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //161
		DB::table('building_types')->insert([
			'building_name' => 'post office',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //162
		DB::table('building_types')->insert([
			'building_name' => 'telegraph office',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //163
		DB::table('building_types')->insert([
			'building_name' => 'stock exchange',
            'category' => 'municipal',
            'building_size' => '2x2',
            'labour' => 'accountants'
        ]);	
        //164
		DB::table('building_types')->insert([
			'building_name' => 'labor exchange',
            'category' => 'municipal',
            'building_size' => '2x2',
            'labour' => 'gangsters'
        ]);	
        //165
		DB::table('building_types')->insert([
			'building_name' => 'museum',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //166
		DB::table('building_types')->insert([
			'building_name' => 'public baths',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //167
		DB::table('building_types')->insert([
			'building_name' => 'opera hall',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //168
		DB::table('building_types')->insert([
			'building_name' => 'orchestra hall',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //169
		DB::table('building_types')->insert([
			'building_name' => 'theatre',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //170 .1
		DB::table('building_types')->insert([
			'building_name' => 'electric company',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //171 .1
		DB::table('building_types')->insert([
			'building_name' => 'water company',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //university
        //172 .1
		DB::table('building_types')->insert([
			'building_name' => 'university',
            'category' => 'unversity',
            'building_size' => '5x5'
        ]);
        //army	
        //173 .1
		DB::table('building_types')->insert([
			'building_name' => 'army barracks',
            'category' => 'army',
            'building_size' => '5x5'
        ]);	
        //court
        //174 .1
		DB::table('building_types')->insert([
			'building_name' => 'court',
            'category' => 'court',
            'building_size' => '2x2',
            'labour' => 'lawyers'
        ]);	
        //FBI
        //175 .1
		DB::table('building_types')->insert([
			'building_name' => 'FBI',
            'category' => 'FBI',
            'building_size' => '2x2'
        ]);	
        //prison
        //176 .1
		DB::table('building_types')->insert([
			'building_name' => 'prison',
            'category' => 'prison',
            'building_size' => '2x2'
        ]);
        //police
        //177 .6
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'category' => 'police',
            'building_size' => '2x2'
        ]);
        //city hall
        //178 .1
		DB::table('building_types')->insert([
			'building_name' => 'city hall',
            'category' => 'city hall',
            'building_size' => '2x2'
        ]);	
        //charity
        //179 .6
		DB::table('building_types')->insert([
			'building_name' => 'church',
            'category' => 'charity',
            'building_size' => '2x5'
        ]);	
        //180 .1
		DB::table('building_types')->insert([
			'building_name' => 'synagogue',
            'category' => 'charity',
            'building_size' => '2x2'
        ]);	
        //181 .1
		DB::table('building_types')->insert([
			'building_name' => 'orphanage',
            'category' => 'charity',
            'building_size' => '2x2'
        ]);	
        //park
        //182 .4	
		DB::table('building_types')->insert([
			'building_name' => 'park',
            'category' => 'park',
            'building_size' => '5x5'
        ]);	
    }
}
