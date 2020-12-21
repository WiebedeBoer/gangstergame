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
		DB::table('building_types')->insert([
			'building_name' => 'house',
            'category' => 'residential',
            'building_size' => '1x1',
            'front' => 'safehouse'
        ]);	
        //tenement
		DB::table('building_types')->insert([
			'building_name' => 'tenement',
            'category' => 'tenement',
            'building_size' => '2x2',
            'front' => 'safehouse'
        ]);	
        //industrial (food)
		DB::table('building_types')->insert([
			'building_name' => 'abatoir',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'cannery',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'food processor',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'ice house',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'milk yard',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'moonshine still'
        ]);	
        //industrial (textile)
		DB::table('building_types')->insert([
			'building_name' => 'textiles',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'furriers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'leather curers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'tanners',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'weavers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (construction)
		DB::table('building_types')->insert([
			'building_name' => 'builders',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'cement factory',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'engineers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'excavators',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'glaziers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'joiners',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'lumber yard',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'stone mason',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (iron)
		DB::table('building_types')->insert([
			'building_name' => 'iron mongers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'sheet workers',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'steel mill',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
        //industrial (common)
		DB::table('building_types')->insert([
			'building_name' => 'ceramics',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'chandler',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'fabricators',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'factory',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'packaging plant',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'paper mill',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'counterfeit press'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'wheelwrights',
            'category' => 'industrial',
            'building_size' => '2x2'
        ]);
        //industrial (freight)
		DB::table('building_types')->insert([
			'building_name' => 'freight forwarding',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'teamsters'
        ]);	
        //warehouse
		DB::table('building_types')->insert([
			'building_name' => 'warehouse',
            'category' => 'industrial',
            'building_size' => '2x2',
            'front' => 'warehouse'
        ]);
        //transport
		DB::table('building_types')->insert([
			'building_name' => 'docks',
            'category' => 'industrial',
            'building_size' => '5x5',
            'labour' => 'gangsters'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'railroad station',
            'category' => 'municipal',
            'building_size' => '2x5'
        ]);
        //commercial (food)
		DB::table('building_types')->insert([
			'building_name' => 'bakery',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'butcher',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'cake store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'candy store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'cheese store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'delicatessen',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'fish monger',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'fruit and vegetable store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'grocery store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (gastronomy)
		DB::table('building_types')->insert([
			'building_name' => 'breakfast bar',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'catering supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'cafe',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'speakeasy'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'icecream parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'ice store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'milk bar',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'soda fountain',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (health and beauty)
		DB::table('building_types')->insert([
			'building_name' => 'barber',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'beauty parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'cosmetics store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'doctor',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'drug store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'hair salon',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'health center',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'optometrist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'orthodontist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (fashion)
		DB::table('building_types')->insert([
			'building_name' => 'bridal parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'clothier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'costume store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'dressmaker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'fur store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'haberdashery',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'jeweler',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'ladieswear',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'lingerie store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'milliner',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'perfume store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'shoe store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'tailor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'watchmaker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'wig maker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (services)
		DB::table('building_types')->insert([
			'building_name' => 'blacksmith',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'coffin maker',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'detective agency',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'electrician',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'french polisher',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'funeral director',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'laundry',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'locksmith',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'pest controller',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'photographer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'plumber',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'shoe repair',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'sign writer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'upholsterer',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'window cleaner',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'tattoo parlor',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'saddler',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'trade union',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'teamsters'
        ]);
        //commercial (financial)
		DB::table('building_types')->insert([
			'building_name' => 'bailiff',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'finance company',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'accountants'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'real estate',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (novelty)
		DB::table('building_types')->insert([
			'building_name' => 'art gallery',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'antiques dealers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'diamond merchant',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'gift store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'gold merchant',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'pawnbrokers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'stamp and coin dealer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'grifters'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'tobacconist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (leisure)
		DB::table('building_types')->insert([
			'building_name' => 'dance studio',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'golf store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'massage parlor',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'brothel'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'sports equipment',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (home improvement)
		DB::table('building_types')->insert([
			'building_name' => 'china store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'electrical supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'florist',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'gardening supplier',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'glassware',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'moonshine still'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'hardware store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'lumber merchant',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'nursery store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'piano store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'pet store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (entertainment)
		DB::table('building_types')->insert([
			'building_name' => 'book store',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'numbers racket'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'gramophone store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'music store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'news agency',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'numbers racket'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'printer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'counterfeit press'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'record store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'stationer',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'counterfeit press'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'toy store',
            'category' => 'commercial',
            'building_size' => '1x1'
        ]);
        //commercial (labour pools)
		DB::table('building_types')->insert([
			'building_name' => 'accountants',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'accountants'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'lawyers',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'loanshark',
            'labour' => 'lawyers'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'gym',
            'category' => 'commercial',
            'building_size' => '1x1',
            'front' => 'prizefight ring',
            'labour' => 'gangsters'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'pool hall',
            'category' => 'commercial',
            'building_size' => '1x1',
            'labour' => 'gangsters'
        ]);	
        //gunsmith
		DB::table('building_types')->insert([
			'building_name' => 'gunsmith',
            'category' => 'commercial',
            'building_size' => '1x1',
            'equipment' => 'gun',
        ]);	
        //commercial (medium)
		DB::table('building_types')->insert([
			'building_name' => 'local store',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'numbers racket'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'convenience store',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'numbers racket'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'hotel',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'brothel'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'restaurant',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'speakeasy'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'bank',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino',
            'labour' => 'accountants'
        ]);
		DB::table('building_types')->insert([
			'building_name' => 'auction room',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'removal company',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'cab company',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'casino'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'carpet store',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'furniture store',
            'category' => 'commercial',
            'building_size' => '1x2'
        ]);	
        //auto dealer
		DB::table('building_types')->insert([
			'building_name' => 'auto dealer',
            'category' => 'commercial',
            'building_size' => '1x2',
            'front' => 'loanshark',
            'equipment' => 'car',
        ]);	
        //commercial (large)
		DB::table('building_types')->insert([
			'building_name' => 'bank',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'casino',
            'labour' => 'accountants'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'department store',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'numbers racket'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'hotel',
            'category' => 'commercial',
            'building_size' => '2x2',
            'front' => 'brothel'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'movie theatre',
            'category' => 'commercial',
            'building_size' => '2x2'
        ]);	
        //media
		DB::table('building_types')->insert([
			'building_name' => 'newspaper',
            'category' => 'media',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'radio',
            'category' => 'media',
            'building_size' => '2x2'
        ]);
        //municipal
		DB::table('building_types')->insert([
			'building_name' => 'fire department',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'hospital',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'school',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'highschool',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'post office',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'telegraph office',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'stock exchange',
            'category' => 'municipal',
            'building_size' => '2x2',
            'labour' => 'accountants'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'labor exchange',
            'category' => 'municipal',
            'building_size' => '2x2',
            'labour' => 'gangsters'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'museum',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'public baths',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'opera hall',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'orchestra hall',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'theatre',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'electric company',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'water company',
            'category' => 'municipal',
            'building_size' => '2x2'
        ]);	
        //university
		DB::table('building_types')->insert([
			'building_name' => 'university',
            'category' => 'unversity',
            'building_size' => '5x5'
        ]);
        //army	
		DB::table('building_types')->insert([
			'building_name' => 'army barracks',
            'category' => 'army',
            'building_size' => '5x5'
        ]);	
        //court
		DB::table('building_types')->insert([
			'building_name' => 'court',
            'category' => 'court',
            'building_size' => '2x2',
            'labour' => 'lawyers'
        ]);	
        //FBI
		DB::table('building_types')->insert([
			'building_name' => 'FBI',
            'category' => 'FBI',
            'building_size' => '2x2'
        ]);	
        //prison
		DB::table('building_types')->insert([
			'building_name' => 'prison',
            'category' => 'prison',
            'building_size' => '2x2'
        ]);
        //police
		DB::table('building_types')->insert([
			'building_name' => 'police department',
            'category' => 'police',
            'building_size' => '2x2'
        ]);
        //city hall
		DB::table('building_types')->insert([
			'building_name' => 'city hall',
            'category' => 'city hall',
            'building_size' => '2x2'
        ]);	
        //charity
		DB::table('building_types')->insert([
			'building_name' => 'church',
            'category' => 'charity',
            'building_size' => '2x5'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'synagogue',
            'category' => 'charity',
            'building_size' => '2x2'
        ]);	
		DB::table('building_types')->insert([
			'building_name' => 'orphanage',
            'category' => 'charity',
            'building_size' => '2x2'
        ]);		
    }
}
