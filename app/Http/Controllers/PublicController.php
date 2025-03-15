<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PublicController extends Controller implements HasMiddleware
{


    public static function middleware(): array
    {

        return [
            new Middleware('auth', except: ['index']),
            'verified'
        ];
    }


    public $products = [
        [
            "id" => 1,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Porefining Face Mask",
            "image_hover" => "/images/detox/1-h.png",
            "image" => "/images/detox/1.png",
            "price" => 39,
            "type" => '',

            "desc" => "Refresh and reset your skin: treat your pores to a deep detox, smooth out skin texture and boost radiance with this multi-talented clay mask. Clogged pores, blackheads, we don't know them.",
            "tags" => ['Tightens pores in 10 minutes', 'Fades hyperpigmentation & evens skin tone', 'Draws out toxins, impurities and excess sebum clogging pores', 'Refines skin texture'],
            "accordion_1" => "Kaolin (Australian Clay), Aqua (Water), Bentonite, Aloe Barbadensis (Aloe Vera) Leaf Juice, Terminalia Ferdinandiana (Kakadu Plum) Fruit Extract, Centipeda Cunninghamii Extract (Old Man's Weed), Glycyrrhiza Glabra (Liquorice) Root Extract, Retinyl Palmitate (Vitamin A), Tocopheryl Acetate (Vitamin E), Undaria Pinnatifida (Kelp) Extract, Hamamelis Virginiana (Witch Hazel) Bark/Twig Extract, Punica Granatum (Pomegranate) Sterols, Garcinia Mangostana (Mangosteen) Fruit Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Phenoxyethanol, Dehydroacetic Acid, Lactic Acid, CI 77491, Parfum*, Glycerin, Benzyl Alcohol, Limonene.",
            "accordion_2" => "Apply on cleansed, dry skin using the applicator brush provided. Leave on for 10 minutes, or until complete dry. Gently remove with warm water and pat dry. Use 2-3 times a week if you have oily to combination skin, or 1-2 times a week if you have dry or sensitive skin.",
            "accordion_3" => "If you have oily to combination skin use the face mask 2 to 3 times a week for best results. For dry or sensitive skin, use up to 2 times per week. Avoid using on the same day as your Flash Perfection Exfoliating Treatment.",
        ],
        [
            "id" => 2,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Deep Pore Cleanser",
            "image_hover" => "/images/detox/2-h.png",
            "image" => "/images/detox/2.png",
            "price" => 25,
            "type" => '',

            "desc" => "A 4-in-1 purifying deep pore cleanser that easily lifts away make-up, clears congestion, tightens pores and gently exfoliates skin everyday without stripping moisture.",
            "tags" => ['Deeply detoxifies and refines skin', 'Removes make up and clears congestions', 'Exfoliates gently with AHAs and luffa plant extract', 'Reduces the appearance of pores', 'Balances oil production', 'Hydrates and nourishes skin with squalane for a supple feel'],
            "accordion_1" => "Aqua, Propanediol , Decyl Glucoside, Polyacrylate Crosspolymer-6, Cocamidopropyl Betaine, Sodium Lauroyl Sarcosinate, Glycerin, Macadamia Intergrifolia Seed Oil, Luffa Cylindrica Fruit Powder, Kaolin, Hamamelis Virginiana (Witch hazel), Alcohol, Microcitrus Australis (Radescrest lime), Citrus Glauca (Desert lime), Microcitrus Australasica (finger Lime), Backhousia Citriodora (Lemon myrtle), Bisabolol, Allantoin, Parfum, CI 77491, Benzyl Alcohol, Dehydroacetic Acid.",
            "accordion_2" => "Use it daily as a morning and night cleanser. For sensitive skin, use it daily as a night cleanser. Squeeze a small amount of the gel into the palm of your hand, lather it with water and massage onto your skin. Rinse off after. Follow with a serum and moisturiser to lock in the glowy benefits.
            To maximise the detoxifying benefits, pair it with our Australian Pink Clay Porefining Face Mask 2-3 times a week for oily/combination skin and 1-2 times a week for sensitive/dry skin.",
            "accordion_3" => "Make it the first step in your daily routine. Pair with the Australian Pink Clay Porefining Face Mask 2-3 times a week for oily/combination skin and 1-2 times a week for sensitive/dry skin. Avoid using the Deep Pore cleanser with our Australian Emu Apple Enzyme Polish since you’ll already be exfoliating your skin.",
        ],
        [
            "id" => 3,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Pore Tight Kit",
            "image_hover" => "/images/detox/3-h.png",
            "image" => "/images/detox/3.png",
            "price" => 65,
            "type" => '',

            "desc" => "A 4-in-1 purifying deep pore cleanser that easily lifts away make-up, clears congestion, tightens pores and gently exfoliates skin everyday without stripping moisture.",
            "tags" => ['Deeply detoxifies and refines skin', 'Removes make up and clears congestions', 'Exfoliates gently with AHAs and luffa plant extract', 'Reduces the appearance of pores', 'Balances oil production', 'Hydrates and nourishes skin with squalane for a supple feel'],
            "accordion_1" => "Aqua, Propanediol , Decyl Glucoside, Polyacrylate Crosspolymer-6, Cocamidopropyl Betaine, Sodium Lauroyl Sarcosinate, Glycerin, Macadamia Intergrifolia Seed Oil, Luffa Cylindrica Fruit Powder, Kaolin, Hamamelis Virginiana (Witch hazel), Alcohol, Microcitrus Australis (Radescrest lime), Citrus Glauca (Desert lime), Microcitrus Australasica (finger Lime), Backhousia Citriodora (Lemon myrtle), Bisabolol, Allantoin, Parfum, CI 77491, Benzyl Alcohol, Dehydroacetic Acid.",
            "accordion_2" => "Use it daily as a morning and night cleanser. For sensitive skin, use it daily as a night cleanser.  Squeeze a small amount of the gel into the palm of your hand, lather it with water and massage onto your skin. Rinse off after. Follow with a serum and moisturiser to lock in the glowy benefits.
            To maximise the detoxifying benefits, pair it with our Australian Pink Clay Porefining Face Mask 2-3 times a week for oily/combination skin and 1-2 times a week for sensitive/dry skin. ",
            "accordion_3" => "Make it the first step in your daily routine. Pair with the Australian Pink Clay Porefining Face Mask 2-3 times a week for oily/combination skin and 1-2 times a week for sensitive/dry skin. Avoid using the Deep Pore cleanser with our Australian Emu Apple Enzyme Polish since you’ll already be exfoliating your skin.",
        ],
        [
            "id" => 4,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Mask Besties Kit",
            "image_hover" => "/images/detox/4-h.png",
            "image" => "/images/detox/4.png",
            "price" => 78,
            "type" => '',

            "desc" => "Our bestselling 4-in-1 miracle mask that deeply detoxify your skin, achieving tighten pores, brighter complexion and improved radiance  in 10 minutes!",
            "tags" => ['Tightens pores & brightens skin in 10 minutes', 'Deeply detoxifies to draw impurities, toxins, and pollutants from the skin', 'Tackles pigmentation & evens skin tone', 'Winner of 5 major beauty awards', '4-in-1 treatment + 2 FREE applicator brushes', 'Cruelty-free and ZERO nasties '],
            "accordion_1" => "Kaolin (Australian Clay), Aqua (Water), Bentonite, Aloe Barbadensis (Aloe Vera) Leaf Juice, Terminalia Ferdinandiana (Kakadu Plum) Fruit Extract, Centipeda Cunninghamii Extract (Old Man's Weed), Glycyrrhiza Glabra (Liquorice) Root Extract, Retinyl Palmitate (Vitamin A), Tocopheryl Acetate (Vitamin E), Undaria Pinnatifida (Kelp) Extract, Hamamelis Virginiana (Witch Hazel) Bark/Twig Extract, Punica Granatum (Pomegranate) Sterols, Garcinia Mangostana (Mangosteen) Fruit Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Phenoxyethanol, Dehydroacetic Acid, Lactic Acid, CI 77491, Parfum*, Glycerin, Benzyl Alcohol, Limonene.",
            "accordion_2" => "Apply on cleansed, dry skin using the applicator brush provided. Leave on for 10 minutes, or until complete dry. Gently remove with warm water and pat dry.
            Supercharge your results by following with our Dreamy Glow Drops, a direct delivery of moisture and antioxidants to your freshly detoxified skin.
            Use 2-3 times a week if you have oily to combination skin, or 1-2 times a week if you have dry or sensitive skin.",
            "accordion_3" => "If you have oily skin to combination skin use 2 to 3 times a week for best results. For dry or sensitive skin, use up to 2 times per week. Avoid using on the same day as your Flash Perfection Exfoliating Treatment.",
        ],
        [
            "id" => 5,
            "categories" => 'Detox',
            "name" => "Pore Minimising Kit",
            "image_hover" => "/images/detox/6-h.png",
            "image" => "/images/detox/6.png",
            "price" => 78,
            "type" => '',

            "desc" => "Reset your skin for refined pores and clearer, softer and smoother skin. Smooth uneven texture, soothe irritation and instantly boost radiance in 3 easy steps!",
            "tags" => ['Tightens pores & brightens skin in 10 minutes', 'Deeply detoxifies to draw impurities, toxins, and pollutants from the skin', 'Tackles pigmentation & evens skin tone', 'Gentle physical exfoliation sloughs of dead skin cells', 'Absorbs oil, clears congestions and refines pores', 'Resurfaces + mattifies your skin'],
            "accordion_1" => "Aqua, Kaolin (Australian clay),Macadamia Integrifolia seed powder,Bambusa Arundinacea (Bamboo) Stem Powder, Vitis vinifera (Grape) seed oil, Glycerin, Cetearyl Alcohol, Stearic acid, Olea Europea (Olive) fruit oil, Ceteareth-20, Hamamelis virginiana (Witch hazel) extract, Microcitrus australasica (finger lime) fruit extract, Citrus Glauca Fruit Extract (desert lime),Rosa eglanteria (Rosehip) seed oil, Vaccinium myrtillus (bilberry) fruit extract, Saccharum Officinarum Extract, Citrus Aurantium Dulcis Fruit Extract, Citrus Limon Fruit Extract, Acer Saccharum Sap Extract, Calcium carbonate (Pearl powder), Citrus Paradisi (Grapefruit) Peel Oil, Citrus Aurantium Amara (Petitgrain) Leaf/ Twig Oil, Citrus Aurantifolia (Lime) Oil, Pelargonium Graveolens(Geranium) Flower Oil, Viola Odorata Flower/Leaf Extract, Natural Vitamin E, Carrageenan,Phenoxyethanol, Benzyl alcohol and Dehydroacetic acid. CI77491, Lactic acid.",
            "accordion_2" => "Squeeze a pea-sized amount of the the Deep Pore Cleanser onto the your palm and lather before gently sweeping across skin in an upwards motion. Rinse off and pat skin dry.
            Apply an even layer of the Porefining Face Mask to dry skin using the applicator brush provided. Leave on for 10 minutes, or until completely dry. Gently remove with warm water and pat dry.
            Soak a cotton pad with 3 pumps of the Marshmallow Toner and sweep it gently across the face, neck and décolletage, while avoiding the eye area. Allow a moment for the toner to absorb into your skin before following in with a serum and/or moisturiser.
            Use the cleanser and toner daily, morning and night. If you have sensitive skin, it's best used only at night. Use the mask 2-3 times a week for oily/combination skin and 1-2 times a week for sensitive/dry skin.
            Suitable for all skin types.",
            "accordion_3" => "This detoxifying darling is suitable for most skin types even sensitive. It’s ideal if your skin has visible and clogged pores. Or if your skin is rough, flaky and has an uneven surface. Or if it looks dull and lacklustre.",
        ],

        [
            "id" => 6,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Flash Perfection Exfoliator",
            "image_hover" => "/images/detox/6-h.png",
            "image" => "/images/detox/5.png",
            "price" => 29,
            "type" => '',

            "desc" => "Smooth uneven texture and clear congestion with this triple-action facial exfoliator.",
            "tags" => ['Bamboo & Macadamia for gentle physical exfoliation', 'Finger Lime extracts gently and sloughs off dead skin cells', 'Absorbs oil, clears congestions and refines pores', 'Resurfaces + mattifies your skin', 'Cruelty-free and ZERO nasties'],
            "accordion_1" => "Aqua, Kaolin (Australian clay),Macadamia Integrifolia seed powder,Bambusa Arundinacea (Bamboo) Stem Powder, Vitis vinifera (Grape) seed oil, Glycerin, Cetearyl Alcohol, Stearic acid, Olea Europea (Olive) fruit oil, Ceteareth-20, Hamamelis virginiana (Witch hazel) extract, Microcitrus australasica (finger lime) fruit extract, Citrus Glauca Fruit Extract (desert lime),Rosa eglanteria (Rosehip) seed oil, Vaccinium myrtillus (bilberry) fruit extract, Saccharum Officinarum Extract, Citrus Aurantium Dulcis Fruit Extract, Citrus Limon Fruit Extract, Acer Saccharum Sap Extract, Calcium carbonate (Pearl powder), Citrus Paradisi (Grapefruit) Peel Oil, Citrus Aurantium Amara (Petitgrain) Leaf/ Twig Oil, Citrus Aurantifolia (Lime) Oil, Pelargonium Graveolens(Geranium) Flower Oil, Viola Odorata Flower/Leaf Extract, Natural Vitamin E, Carrageenan,Phenoxyethanol, Benzyl alcohol and Dehydroacetic acid. CI77491, Lactic acid.",
            "accordion_2" => "Use morning or night after cleansing, and before serums or toners.
            Apply to damp, freshly cleansed skin and massage gently in circular motions.
            Allow to sit on the skin for up to 5 minutes to allow the Finger Lime Extract to get to work.
            Rinse off with warm water and pat skin dry.
            Follow with hydrating serums as the natural AHAs help your skin better absorb moisture immediately after use. Clever AHAs.
            Suitable for all skin types, use up to 3 times a week.",
            "accordion_3" => "If you have oily skin to combination skin use 2-3 times a week for best results. For dry or sensitive skin, use up to 3 times per week. Don't use on the same day as your Australian Pink Clay Porefining Face Mask to avoid over-stripping your skin's natural oil.",
        ],
        [
            "id" => 7,
            "categories" => 'Detox',
            "name" => "Smoothing Body Sand",
            "image_hover" => "/images/detox/8-h.png",
            "image" => "/images/detox/8.png",
            "price" => 24,
            "type" => '',

            "desc" => "Glow from head to toe with the world's first Australian Pink Clay body scrub.",
            "tags" => ['Deeply detox, smooth, moisturise and illuminate skin', 'Cleanses and moisturises for silky-soft, touch-me skin', 'Gently exfoliates to tackle cellulite, stretch marks + ingrown hair', 'Botanical-based body scrub', 'Eco-friendly Mica glitter shines bright on your body', 'FREE scoop for mess-free application'],
            "accordion_1" => "Oryza Sativa (Rice) Powder/Oryza Sativa Powder, Macadamia Integrifolia Seed Oil, Kaolin, Cocos Nucifera (Coconut) Shell Powder/Cocos Nucifera Shell Powder, Macadamia Ternifolia Shell Powder, Tocopherol, Rayon, Glycerin, Aqua/ Water/ Eau, Urea, Styrene/Acrylates Copolymer, Calcium Aluminum Borosilicate, Silica, Tin oxide, Undaria Pinnatifida Extract, Parfum/Fragrance, Limonene, Phenoxyethanol, Benzyl alcohol, Dehydroacetic acid, Linalool, CI 77491/Iron Oxides, CI 42090/FD&C Blue No. 1, CI 15850/D&C Red No. 6, CI 77000/ Aluminum powder, CI 77891/Titanium Dioxide",
            "accordion_2" => "Use morning or night, after cleansing the body and before moisturising.
            Scoop a chunk of sand and massage onto damp body in circular motions. Rinse off, and lock in results with a body moisturiser.
            Suitable for all skin types, use up to 3 times a week.",
            "accordion_3" => "How often you use a body scrub will depend on your skin type and factors such as how often you use fake tan. For oily, congestion-prone skin, we suggest using our Body Sand up to three times a week. For normal or dry skin, use once or twice a week.",
        ],
        [
            "id" => 8,
            "categories" => 'Detox',
            "name" => "Australian Pink Clay Resurfacing Mask",
            "image_hover" => "/images/detox/9-h.png",
            "image" => "/images/detox/9.png",
            "price" => 49,
            "type" => '',

            "desc" => "Reignite your skin’s natural beauty with our triple-action resurfacing face mask",
            "tags" => ['Combines 10% Skin Resurfacing Complex (AHA, BHA & PHA), Marshmallow Extract, 40% Australian Pink Clay & Lime Caviar Extract.', '93%* of users said their skin texture felt smoother', 'Instant Glow: In just 10 minutes, the mask deeply cleanses, exfoliates, and renews skin, leaving you with a luminous, smoother complexion', 'Gentle Yet Effective: Suitable for all skin types, the formula balances intense resurfacing with soothing hydration, perfect for sensitive skin.'],
            "accordion_1" => "FREE from petroleum & mineral oils, formaldehyde , soy and nuts
            KAOLIN, AQUA/WATER, GLYCOLIC ACID,GLUCONOLOLACTONE, BENTONITE, SODIUM HYDROXIDE, GLYCERIN, CAPRYLYL/CAPRYL GLUCOSIDE, BENZYL ALCOHOL, SODIUM POLYACRYLATE, SALICYLIC ACID, CRYSTALINE SILICA CITRUS AUSTRALASICA (FINGER LIME) FRUIT EXTRACT, XANTHAN GUM, TITANIUM DIOXIDE CITRUS GLAUCA (DESERT LIME) FRUIT EXTRACT, ALTHAEA OFFICINALIS (MARSHMALLOW) LEAF/ROOT EXTRACT, TOCOPHEROL DIISOPROPYL ADIPATE ALOE BARBADENSIS (ALOE VERA) LEAF JUICE, CI 77491 DEHYDROACETIC ACID, LIMONENE, TRIETHYL CITRATE QUARTZ, CI 77499, PARFUM/FRAGRANCE, SODIUM BENZOATE, CITRIC ACID, POTASSIUM SORBATE, LINALOOL, CITRONELLOL",
            "accordion_2" => "Apply Australian Pink Clay Resurfacing Mask onto bare skin using clean fingers or the mask brush, you can apply the mask all over the face (avoiding the delicate eye and lip area) or use it to treat specific problem areas. Leave on for 10-15 minutes.
            Use once or twice a week as needed",
            "accordion_3" => "Australian Pink Clay Resurfacing Mask should be used a couple of times a week and is perfect for when your skin is feeling congested or breaking out. It’s also perfect for a once a week detox to draw out impurities.",
        ],

        [
            "id" => 10,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water Intense Hydrating Mask",
            "image_hover" => "/images/tasmanian/h-1.png",
            "image" => "/images/tasmanian/1.png",
            "price" => 35,
            "type" => '',

            "desc" => "Intensively hydrates and repairs skin barrier, achieving instant luminous skin in 10 minutes.",
            "tags" => ['Instantly soothes redness within 10 minutes*', 'Strengthens skin barriers', '40% increase in skin hydration', 'Retains skin moisture by up to 30%', '45% decrease in skin redness', 'Improves skin texture and reduces wrinkle by 34%'],
            "accordion_1" => "Aqua/Water/Eau, Butylene Glycol, Dimethylsilanol Hyaluronate, Caprylic/Capric Triglyceride, Squalane, 1,2-Hexanediol, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Saccharide Isomerate, Centaurea Cyanus Flower Extract, Magnesium Aspartate, Zinc Gluconate, Hydrolyzed Hyaluronic Acid, Copper Gluconate, Sodium Hyaluronate, Undaria Pinnatifida Extract, Glycerin, Tocopherol, Tetrasodium Glutamate Diacetate, Carbomer, Fragrance/Parfum, Ethylhexylglycerin, Phenoxyethanol, Sodium Benzoate, Potassium Sorbate, Sodium Hydroxide, Sodium Citrate, Citric Acid, FD&C Blue No. 1/CI 42090, Limonene, Linalool, Citral.",
            "accordion_2" => "Apply a generous layer on cleansed, dry skin using the applicator brush provided. Leave on for 10 minutes for an instant hydration perk. Gently remove with lukewarm water and pat dry.",
            "accordion_3" => "Dehydrated skin stems from the skin's inability to produce or retain water content. A simple way to test for dehydrated skin at home is to pinch your cheeks lightly for 3 seconds, if it wrinkles with gentle pressure instead of holding its shape, you may have dehydrated skin. Our mask boosts hydration in 10 minutes, giving you an instant well-rested, supple skin you've been missing.",
        ],
        [
            "id" => 11,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water Hydration Boost Cream",
            "image_hover" => "/images/tasmanian/h-2.png",
            "image" => "/images/tasmanian/2.png",
            "price" => 88,
            "type" => '',

            "desc" => "Drench and quench with our ultra-hydrating gel-cream moisturiser.",
            "tags" => ['Hydrates & strengthens with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Red Seaweed Extract forms ‘second skin’ to prevent dehydration', 'Ultra-lightweight gel-cream  ideal for all skin types'],
            "accordion_1" => "Aqua/Water/Eau, Butylene Glycol, C15-19 Alkane, Caprylic/Capric Triglyceride, Propylene Glycol Laurate, Cetyl Palmitate, Coco-Caprylate/Caprate, Glycerin, Xylitylglucoside, 1,2-Hexanediol, Apricot Kernel Oil Polyglyceryl-6 Esters, Carbomer, Potassium Cetyl Phosphate, Hyaluronic Acid, Hydrolyzed Hyaluronic Acid, Anhydroxylitol, Xylitol, Caprylyl Glycol, Ethylcellulose, Propylene Glycol Isostearate, Sodium Hydroxide, Chondrus Crispus (Carrageenan) Extract, Ethylhexylglycerin,Parfum/ Fragrance/Perfume, Agar, Aloe Barbadensis Leaf Juice, Sodium Hyaluronate, Undaria Pinnatifida Extract, Methylpropanediol, Citral, Dehydroacetic Acid, Silanetriol, Citric Acid, Xanthan Gum, CI 42090/F, D&C Blue No. 1, Potassium Sorbate, Sodium Benzoate, Benzyl Alcohol, Linalool, Limonene.",
            "accordion_2" => "Use the Tasmanian water gel cream morning or night as the final step of your skincare routine.
            Apply a small amount to dry, clean skin, after serums or oils.
            Gently massage the hydrating gel into skin in upward sweeping motions.
            Apply down the neck and onto the decolletage.
            Follow with sunscreen.
            Suitable for all skin types. For daily use, morning and night.",
            "accordion_3" => "You should use our Tasmanian Spring Water Hydration Boost Cream if your skin is dry and dehydrated, looks dull and tired and want to even your skin tone and texture",
        ],
        [
            "id" => 12,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water Splash Serum",
            "image_hover" => "/images/tasmanian/h-3.png",
            "image" => "/images/tasmanian/3.png",
            "price" => 44,
            "type" => '',

            "desc" => "Say bye to dry with this ultra-hydrating, water-based serum.",
            "tags" => ['Hydrate & fortify with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Mineral + probiotic formula strengthens skin barrier', 'Light, water-based serum ideal for daily use'],
            "accordion_1" => "Aqua/Water/ Eau, Dimethylsilanol Hyaluronate, 1,2-Hexanediol, Butylene Glycol, Glycerin, Methyl Gluceth-20, Polysorbate 20, Sodium Levulinate, Undaria Pinnatifida Extract, Xanthan Gum, Parfum/Fragrance/Perfume, Sodium Anisate, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Tetrasodium Glutamate Diacetate, Citric Acid, Phenoxyethanol, Bifida Ferment Lysate, Sodium Hydroxide, Sodium Benzoate, Lactic Acid, Acetic Acid, Citral, Linalool, Limonene.",
            "accordion_2" => "Apply four to six drops to dry, clean skin. Gently massage into skin in upward, sweeping motions.",
            "accordion_3" => "Our Splash Serum is an ultra-hydrating serum that quenches dull, thirsty skin for smooth, radiant results. This lightweight serum delivers long-lasting moisture while safeguard your skin against inflammation and strengthen your skin barrier.",
        ],
        [
            "id" => 13,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Kit",
            "image_hover" => "/images/tasmanian/h-3.png",
            "image" => "/images/tasmanian/4.png",
            "price" => 44,
            "type" => '',

            "desc" => "Say bye to dry with this ultra-hydrating, water-based serum.",
            "tags" => ['Hydrate & fortify with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Mineral + probiotic formula strengthens skin barrier', 'Light, water-based serum ideal for daily use'],
            "accordion_1" => "Aqua/Water/ Eau, Dimethylsilanol Hyaluronate, 1,2-Hexanediol, Butylene Glycol, Glycerin, Methyl Gluceth-20, Polysorbate 20, Sodium Levulinate, Undaria Pinnatifida Extract, Xanthan Gum, Parfum/Fragrance/Perfume, Sodium Anisate, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Tetrasodium Glutamate Diacetate, Citric Acid, Phenoxyethanol, Bifida Ferment Lysate, Sodium Hydroxide, Sodium Benzoate, Lactic Acid, Acetic Acid, Citral, Linalool, Limonene.",
            "accordion_2" => "Apply four to six drops to dry, clean skin. Gently massage into skin in upward, sweeping motions.",
            "accordion_3" => "Our Splash Serum is an ultra-hydrating serum that quenches dull, thirsty skin for smooth, radiant results. This lightweight serum delivers long-lasting moisture while safeguard your skin against inflammation and strengthen your skin barrier.",
        ],
        [
            "id" => 14,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water AM/PM Moisturiser Kit",
            "image_hover" => "/images/tasmanian/h-5.png",
            "image" => "/images/tasmanian/5.png",
            "price" => 75,
            "type" => '',

            "desc" => "The power-packed AM to PM duo guaranteed to quench your skin from deep within.
            Strengthen skin barriers and increase skin's hydration levels during the day. At night, provide your skin with overnight intensive skin repair and regeneration process together with enhanced collagen production.
            Meet your two new besties for hydrated, plump and balanced skin - repairing and strengthening skin barriers all day, all night.",
            "tags" => ['Hydrate & fortify with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Mineral + probiotic formula strengthens skin barrier', 'Light, water-based serum ideal for daily use'],
            "accordion_1" => "Aqua/Water/ Eau, Dimethylsilanol Hyaluronate, 1,2-Hexanediol, Butylene Glycol, Glycerin, Methyl Gluceth-20, Polysorbate 20, Sodium Levulinate, Undaria Pinnatifida Extract, Xanthan Gum, Parfum/Fragrance/Perfume, Sodium Anisate, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Tetrasodium Glutamate Diacetate, Citric Acid, Phenoxyethanol, Bifida Ferment Lysate, Sodium Hydroxide, Sodium Benzoate, Lactic Acid, Acetic Acid, Citral, Linalool, Limonene.",
            "accordion_2" => "Use the Hydration Boost Cream in the morning. Apply a small amount to dry, clean skin, after using serums or oils. Gently massage the hydrating gel into skin in upward sweeping motions and apply it down the neck and onto the décolletage. Follow in with sunscreen. For daily use during the day.
            Follow in with the Renewing Night Cream at night, after cleansing your skin. Apply a small amount on your face and gently massage it in upward sweeping motions before applying down your neck. This should be applied after any serums or oils. For daily use at night.",
            "accordion_3" => "The Hydration Boost Cream is an ultra lightweight gel cream that is very suitable for day time use as it absorbs quickly and does not leave a greasy feel or shiny look. It also consists of Fermented Sea Kelp that not only forms a moisture barrier, it treats the skin from day-time environmental stresses by reducing skin redness by 45%. Additionally, it has 2 types of HA, Red Algae and Tasmanian Spring Water to increase skin hydration and replenishes with daily essential minerals.
            On the other hand, the Renewing Night Cream has a slightly richer creamy texture that is ideal for overnight intense hydration and repair. The cream is formulated with glycoproteins that reactivates and works in sync with your skin’s natural repair process at night, enriched with Vegan Squalane, 3 types of HA comprising a super HA that hydrates 43% better than HA for a deeply hydrated, smooth and brighter skin the next morning.",
        ],
        [
            "id" => 15,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water AM/PM Moisturiser Kit",
            "image_hover" => "/images/tasmanian/h-3.png",
            "image" => "/images/tasmanian/6.png",
            "price" => 75,
            "type" => '',

            "desc" => "Your daily essentials for lasting hydration, skin recovery, and a radiance that won’t quit.",
            "tags" => ['Hydrate & fortify with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Mineral + probiotic formula strengthens skin barrier', 'Light, water-based serum ideal for daily use'],
            "accordion_1" => "Aqua/Water/ Eau, Dimethylsilanol Hyaluronate, 1,2-Hexanediol, Butylene Glycol, Glycerin, Methyl Gluceth-20, Polysorbate 20, Sodium Levulinate, Undaria Pinnatifida Extract, Xanthan Gum, Parfum/Fragrance/Perfume, Sodium Anisate, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Tetrasodium Glutamate Diacetate, Citric Acid, Phenoxyethanol, Bifida Ferment Lysate, Sodium Hydroxide, Sodium Benzoate, Lactic Acid, Acetic Acid, Citral, Linalool, Limonene.",
            "accordion_2" => "Use the Hydration Boost Cream in the morning. Apply a small amount to dry, clean skin, after using serums or oils. Gently massage the hydrating gel into skin in upward sweeping motions and apply it down the neck and onto the décolletage. Follow in with sunscreen. For daily use during the day.
            Follow in with the Renewing Night Cream at night, after cleansing your skin. Apply a small amount on your face and gently massage it in upward sweeping motions before applying down your neck. This should be applied after any serums or oils. For daily use at night.",
            "accordion_3" => "The Hydration Boost Cream is an ultra lightweight gel cream that is very suitable for day time use as it absorbs quickly and does not leave a greasy feel or shiny look. It also consists of Fermented Sea Kelp that not only forms a moisture barrier, it treats the skin from day-time environmental stresses by reducing skin redness by 45%. Additionally, it has 2 types of HA, Red Algae and Tasmanian Spring Water to increase skin hydration and replenishes with daily essential minerals.
            On the other hand, the Renewing Night Cream has a slightly richer creamy texture that is ideal for overnight intense hydration and repair. The cream is formulated with glycoproteins that reactivates and works in sync with your skin’s natural repair process at night, enriched with Vegan Squalane, 3 types of HA comprising a super HA that hydrates 43% better than HA for a deeply hydrated, smooth and brighter skin the next morning.",
        ],
        [
            "id" => 16,
            "categories" => 'Hydrate',
            "name" => "Wake & Hydrate Kit",
            "image_hover" => "/images/tasmanian/h-1.png",
            "image" => "/images/tasmanian/7.png",
            "price" => 79,
            "type" => '',

            "desc" => "Bring back the twinkle in your eye and glow to your complexion with this essential eye cream + moisturiser kit duo.",
            "tags" => ['Hydrate & fortify with Tasmanian Spring Water', 'Hyaluronic Acid Complex locks in moisture', 'Fermented Sea Kelp smooths skin & targets wrinkles', 'Mineral + probiotic formula strengthens skin barrier', 'Light, water-based serum ideal for daily use'],
            "accordion_1" => "Aqua/Water/ Eau, Dimethylsilanol Hyaluronate, 1,2-Hexanediol, Butylene Glycol, Glycerin, Methyl Gluceth-20, Polysorbate 20, Sodium Levulinate, Undaria Pinnatifida Extract, Xanthan Gum, Parfum/Fragrance/Perfume, Sodium Anisate, Sodium Hyaluronate, Hydrolyzed Hyaluronic Acid, Tetrasodium Glutamate Diacetate, Citric Acid, Phenoxyethanol, Bifida Ferment Lysate, Sodium Hydroxide, Sodium Benzoate, Lactic Acid, Acetic Acid, Citral, Linalool, Limonene.",
            "accordion_2" => "Use the Hydration Boost Cream in the morning. Apply a small amount to dry, clean skin, after using serums or oils. Gently massage the hydrating gel into skin in upward sweeping motions and apply it down the neck and onto the décolletage. Follow in with sunscreen. For daily use during the day.
            Follow in with the Renewing Night Cream at night, after cleansing your skin. Apply a small amount on your face and gently massage it in upward sweeping motions before applying down your neck. This should be applied after any serums or oils. For daily use at night.",
            "accordion_3" => "The Hydration Boost Cream is an ultra lightweight gel cream that is very suitable for day time use as it absorbs quickly and does not leave a greasy feel or shiny look. It also consists of Fermented Sea Kelp that not only forms a moisture barrier, it treats the skin from day-time environmental stresses by reducing skin redness by 45%. Additionally, it has 2 types of HA, Red Algae and Tasmanian Spring Water to increase skin hydration and replenishes with daily essential minerals.
            On the other hand, the Renewing Night Cream has a slightly richer creamy texture that is ideal for overnight intense hydration and repair. The cream is formulated with glycoproteins that reactivates and works in sync with your skin’s natural repair process at night, enriched with Vegan Squalane, 3 types of HA comprising a super HA that hydrates 43% better than HA for a deeply hydrated, smooth and brighter skin the next morning.",
        ],
        [
            "id" => 18,
            "categories" => 'Hydrate',
            "name" => "Tasmanian Spring Water Renewing Night Cream",
            "image_hover" => "/images/tasmanian/h-9.png",
            "image" => "/images/tasmanian/9.png",
            "price" => 45,
            "type" => '',

            "desc" => "An innovative night cream that deeply hydrates skin, prepping it for an overnight boosted regeneration and replenishing process, for more youthful radiance by morning.",
            "tags" => ['Retains skin moisture by up to 30%', '110% increase in skin hydration', 'Decrease in skin redness by up to 20%', 'Increase in skin renewal by 56% (after 2 days of use)', 'Reduction in wrinkled area by 24% (after 14 days of use)', 'Increase in skin elasticity by 67%', 'Boost in skin collagen production by 165%'],
            "accordion_1" => "Aqua (Water), Coco-caprylate/caprate, Squalane, Dimethylsilanol hyaluronate, Glycerin, 1,2-Hexanediol, Hydroxyethyl acrylate/sodium acryloyldimethyl taurate copolymer, Carbomer, Propanediol, Undaria pinnatifida extract, Pseudoalteromonas ferment extract, Ethylhexylglycerin, Sodium hydroxide, Parfum (Fragrance), Phenoxyethanol, Orobanche rapum extract, Hydrolyzed Hyaluronic acid, Caprylyl glycol, Sodium hyaluronate",
            "accordion_2" => "Apply a pea-sized amount to dry, clean skin, and after using any serums or oils.",
            "accordion_3" => "There are several differences between both products. The Hydration Boost cream consists of actives such as 2x Hyaluronic Acid, Red Algae and Fermented Sea Kelp and is more suited for daytime use, while the Renewing Night Cream consists of 3x Hyaluronic Acid, Vegan Squalane and Glacial Glycoproteins that are better absorbed at night. The textures between both are different too, as the Boost Cream consists of a much more watery, jelly-like texture while the Night Cream is more of a lightweight creamy texture.",
        ],
        [
            "id" => 19,
            "categories" => 'Oil Control',
            "name" => "Oil Control Clearing Face Mask",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/1.png",
            "price" => 35,
            "type" => '',

            "desc" => "The nemesis of excess sebum, enlarged pores and blemishes, this clay mask rebalances microbiome, leaving skin clear of imperfections.",
            "tags" => ['Combat breakout-causing debris and excess oil', 'Reduce skin redness and inflammation by 29%', 'Tighten and reduce pore size by 60%', 'Reduces sebum production by 28% (after 10 days)', 'Improve appearance of acne scars and marks', 'With powerful ingredients such as Salicylic Acid and Prebiotics'],
            "accordion_1" => "Aqua [Water], Kaolin, Magnesium aluminum silicate, Glycerin, Propanediol, Butylene glycol, Fomes officinalis (Mushroom) extract, Microcrystalline cellulose, Salicylic acid, Phenoxyethanol, Polyacrylate crosspolymer-6, Decyl glucoside, Niacinamide, Aloe barbadensis leaf juice, Sodium hydroxide, Cellulose gum, CI 77288 [Chromium oxide greens], Maltodextrin, Bixa orellana seed extract, Ethylhexylglycerin, Tetrasodium glutamate diacetate, Citric acid, Inulin, Zinc oxide, Tasmannia lanceolata fruit/leaf extract, Centipeda cunninghamii extract, Citrus australasica fruit extract, Alpha-glucan oligosaccharide, Salix alba (Willow) bark extract, PEG-40 hydrogenated castor oil, Hamamelis virginiana (Witch hazel) leaf extract, Sodium benzoate, Potassium sorbate",
            "accordion_2" => "Apply a thin layer of our Clearing Face Mask on to dry skin using the applicator brush. Focus on the T-zone areas, especially with large, visible pores and blemishes. Leave on 5 to 10 minutes before gently removing it with warm water and patting skin dry. Use 2-3 times a week.",
            "accordion_3" => "Our Oil Control Mask dries out acne without drying out your skin! It consists of hydrating properties such as Niacinamide that rebalances sebum production by improving skin’s barrier against moisture loss and dehydration. Say goodbye to oily skin and hello to calmer, clearer and hydrated skin!",
        ],

        [
            "id" => 20,
            "categories" => 'Oil Control',
            "name" => "Oil Control Clearing Cleanser",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/2.png",
            "price" => 35,
            "type" => '',

            "desc" => "A gentle daily cleanser for oily skin. It unclogs nasties in pores and regulates sebum production to combat blemishes.",
            "tags" => ['Combat breakout-causing debris and excess oil', 'Reduce skin redness and inflammation by 29%', 'Tighten and reduce pore size by 60%', 'Reduces sebum production by 28% (after 10 days)', 'Prevents breakouts and balances skins oil levels', 'Unclogs pores & removes makeup, oil and impurities'],
            "accordion_1" => "Aqua, Hydrogenated starch hydrolysate, Sodium lauroyl methyl isethionate, Glycerin, Cocamidopropyl hydroxysultaine, Lauryl glucoside, Polyacrylate crosspolymer-6, Salicylic acid, Aloe barbadensis leaf juice, Inulin, Sodium lactate, Saccharide isomerate, Sodium benzoate, Sodium hydroxide, Alpha-glucan oligosaccharide, Trisodium ethylenediamine disuccinate, Potassium sorbate, Citric acid, Centipeda cunninghamii extract, Citrus australasica fruit extract, Tetrasodium glutamate diacetate, Salix alba (Willow) bark extract, Sodium citrate, Tasmannia lanceolata fruit/leaf extract, CI 19140/Yellow 5, CI 42090/Blue 1",
            "accordion_2" => "Squeeze a small amount of the cleanser onto your palm and lather with a bit of water to create foam. Gently massage in circular motions all over your face, avoiding the eye area. Rinse off with luke-warm water and pat skin dry. Suitable for daily use.",
            "accordion_3" => "Our pH-balanced cleanser instantly tightens pores, and soothes skin inflammation and redness. For best results, use the Oil Control Clearing Cleanser every day for at least 2 weeks to regulate sebum production and skin hydration.",
        ],
        [
            "id" => 21,
            "categories" => 'Oil Control',
            "name" => "Oil Control Clearing Moisturiser",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/3.png",
            "price" => 39,
            "type" => '',

            "desc" => "A daily lightweight moisturiser that eliminates oily skin, balances and calms inflammation, while delivering essential hydration.",
            "tags" => ['pH balancing formula', 'Reduce skin redness and inflammation by 29%', 'Strengthens skin barriers by 20%', 'Soothe inflammation and balance skins oil levels', 'Tighten and reduce pore size by 60%', 'Double skin defense fortifies skin and adds a layer of protection over skin barrier'],
            "accordion_1" => "Aqua [Water], Glycerin, Propylheptyl caprylate, Sorbitan stearate, Butylene glycol, Caprylic/capric triglyceride, Fomes officinalis (Mushroom) extract, Glycol palmitate, Niacinamide, Salicylic acid Aloe barbadensis leaf juice, Sodium starch octenylsuccinate, Phenoxyethanol, Ammonium acryloyldimethyltaurate/VP copolymer, Inulin, Cetearyl alcohol, Cellulose, Polyacrylate crosspolymer-6, Sodium hydroxide, Alpha-glucan oligosaccharide, Cetearyl glucoside, Maltodextrin, Tocopherol, Bixa orellana seed extract, Centipeda cunninghamii extract, Citrus australasica fruit extract, Ethylhexylglycerin, Tetrasodium glutamate diacetate, Helianthus annuus (Sunflower) seed oil, Glycol, Tasmannia lanceolata fruit/leaf extract, Hamamelis virginiana (Witch hazel) leaf extract, Palmitic acid, Laminaria saccharina extract, Sodium benzoate, Citric acid, PEG-40 hydrogenated castor oil, Potassium sorbate, Zinc sulfate, Pyridoxine HCl",
            "accordion_2" => "On cleansed and toned skin, squeeze a pea-sized amount of our Clearing Moisturiser onto your palm. Massage it gently on your face in circular motions, avoiding the eye area.",
            "accordion_3" => "Our pH-balanced Clearing Moisturiser is a perfect base for your makeup, keeping your skin hydrated while preventing sebum buildup. It also consists of our power-packed Old Man Weed, consisting of anti-inflammatory properties to soothe your skin as well, before applying makeup.",
        ],
        [
            "id" => 22,
            "categories" => 'Oil Control',
            "name" => "Oil Control Goodbye Breakout Kit",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/4.png",
            "price" => 70,
            "type" => '',

            "desc" => "The gift of clear skin, tied with a bow! Banish breakouts, clogged pores and oily skin with our complexion perfecting routine. Unclogs pores, regulates sebum overproduction and soothes skin redness, leaving skin clear of imperfections.
            Deep cleanse your skin with this two-step routine that visibly reduces blemishes, as it unclogs pores, regulates sebum overproduction and soothes skin redness, leaving skin clear of imperfections.",
            "tags" => ['pH balancing formula', 'Reduce skin redness and inflammation by 29%', 'Strengthens skin barriers by 20%', 'Soothe inflammation and balance skins oil levels', 'Tighten and reduce pore size by 60%', 'Double skin defense fortifies skin and adds a layer of protection over skin barrier'],
            "accordion_1" => "Aqua [Water], Glycerin, Propylheptyl caprylate, Sorbitan stearate, Butylene glycol, Caprylic/capric triglyceride, Fomes officinalis (Mushroom) extract, Glycol palmitate, Niacinamide, Salicylic acid Aloe barbadensis leaf juice, Sodium starch octenylsuccinate, Phenoxyethanol, Ammonium acryloyldimethyltaurate/VP copolymer, Inulin, Cetearyl alcohol, Cellulose, Polyacrylate crosspolymer-6, Sodium hydroxide, Alpha-glucan oligosaccharide, Cetearyl glucoside, Maltodextrin, Tocopherol, Bixa orellana seed extract, Centipeda cunninghamii extract, Citrus australasica fruit extract, Ethylhexylglycerin, Tetrasodium glutamate diacetate, Helianthus annuus (Sunflower) seed oil, Glycol, Tasmannia lanceolata fruit/leaf extract, Hamamelis virginiana (Witch hazel) leaf extract, Palmitic acid, Laminaria saccharina extract, Sodium benzoate, Citric acid, PEG-40 hydrogenated castor oil, Potassium sorbate, Zinc sulfate, Pyridoxine HCl",
            "accordion_2" => "This skin balancing duo not only fights breakouts, but it also decongests pores for clearer skin while reducing skin inflammation and strengthening skin barrier. Clearing Cleanser prevents breakouts by balancing the skin's microbiome, clearing pore congestion and excess sebum without leaving the skin feeling stripped. With antiseptic and anti-inflammatory ingredients, it also soothes irritation and reduces redness and inflammation. Clearing Face Mask targets breakouts and blemishes while treating the skin with nourishing botanicals to rejuvenate the skin. A gentle white kaolin clay unclogs pores, while salicylic acid exfoliates from within to ensure a thorough detox. An ideal set if you're a healther complexion is what you're after.",
            "accordion_3" => "Our pH-balanced Clearing Moisturiser is a perfect base for your makeup, keeping your skin hydrated while preventing sebum buildup. It also consists of our power-packed Old Man Weed, consisting of anti-inflammatory properties to soothe your skin as well, before applying makeup.",
        ],
        [
            "id" => 23,
            "categories" => 'Oil Control',
            "name" => "Pimple Patrol Kit",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/5.png",
            "price" => 70,
            "type" => '',

            "desc" => "Your tags-shelf duo for battling breakouts and oily skin. It's as simple as cleanse, patch and go  and let our cutting-edge formula work for you on the way.",
            "tags" => ['pH-balanced formula with 24 hours soothing effect', 'Reduce skin redness and inflammation by 29%', 'Strengthens skin barriers by 20%', 'Soothe inflammation and balance skins oil levels', 'Tighten and reduce pore size by 60%', '75 patches, with two patch types to tailor treatment to your blemishs specific need'],
            "accordion_1" => "Aqua [Water], Glycerin, Propylheptyl caprylate, Sorbitan stearate, Butylene glycol, Caprylic/capric triglyceride, Fomes officinalis (Mushroom) extract, Glycol palmitate, Niacinamide, Salicylic acid Aloe barbadensis leaf juice, Sodium starch octenylsuccinate, Phenoxyethanol, Ammonium acryloyldimethyltaurate/VP copolymer, Inulin, Cetearyl alcohol, Cellulose, Polyacrylate crosspolymer-6, Sodium hydroxide, Alpha-glucan oligosaccharide, Cetearyl glucoside, Maltodextrin, Tocopherol, Bixa orellana seed extract, Centipeda cunninghamii extract, Citrus australasica fruit extract, Ethylhexylglycerin, Tetrasodium glutamate diacetate, Helianthus annuus (Sunflower) seed oil, Glycol, Tasmannia lanceolata fruit/leaf extract, Hamamelis virginiana (Witch hazel) leaf extract, Palmitic acid, Laminaria saccharina extract, Sodium benzoate, Citric acid, PEG-40 hydrogenated castor oil, Potassium sorbate, Zinc sulfate, Pyridoxine HCl",
            "accordion_2" => "Lather a pea-sized amount of cleanser with a small amount of water to create a smooth foam. Gently massage over your skin in circular motions, avoiding the eye area. Rinse off with lukewarm water and pat skin to dry. Suitable for daily use in the morning and night.
            To follow suit, ensure the skin is dry and free of product before applying an appropriately-sized Blemish Patch directly onto your blemish. Use Help Me Patches for red blemishes and Bye-Bye Patches for white blemishes.
            Leave the patch on for at least 6 hours overnight or as you go about your day. Continue to use as needed until the blemish is cleared.",
            "accordion_3" => "Our pH-balanced Clearing Moisturiser is a perfect base for your makeup, keeping your skin hydrated while preventing sebum buildup. It also consists of our power-packed Old Man Weed, consisting of anti-inflammatory properties to soothe your skin as well, before applying makeup.",
        ],
        [
            "id" => 24,
            "categories" => 'Oil Control',
            "name" => "Clean Sweep Kit",
            "image_hover" => "/images/oil/h1.png",
            "image" => "/images/oil/6.png",
            "price" => 70,
            "type" => '',

            "desc" => "Unleash your skin's full potential with our duo, expertly crafted to cleanse, exfoliate, purify and brighten, while combating blemishes and refining pores!",
            "tags" => ['pH-balanced formula with 24 hours soothing effect', 'Reduce skin redness and inflammation by 29%', 'Strengthens skin barriers by 20%', 'Soothe inflammation and balance skins oil levels', 'Tighten and reduce pore size by 60%', '75 patches, with two patch types to tailor treatment to your blemishs specific need'],
            "accordion_1" => "Aqua [Water], Glycerin, Propylheptyl caprylate, Sorbitan stearate, Butylene glycol, Caprylic/capric triglyceride, Fomes officinalis (Mushroom) extract, Glycol palmitate, Niacinamide, Salicylic acid Aloe barbadensis leaf juice, Sodium starch octenylsuccinate, Phenoxyethanol, Ammonium acryloyldimethyltaurate/VP copolymer, Inulin, Cetearyl alcohol, Cellulose, Polyacrylate crosspolymer-6, Sodium hydroxide, Alpha-glucan oligosaccharide, Cetearyl glucoside, Maltodextrin, Tocopherol, Bixa orellana seed extract, Centipeda cunninghamii extract, Citrus australasica fruit extract, Ethylhexylglycerin, Tetrasodium glutamate diacetate, Helianthus annuus (Sunflower) seed oil, Glycol, Tasmannia lanceolata fruit/leaf extract, Hamamelis virginiana (Witch hazel) leaf extract, Palmitic acid, Laminaria saccharina extract, Sodium benzoate, Citric acid, PEG-40 hydrogenated castor oil, Potassium sorbate, Zinc sulfate, Pyridoxine HCl",
            "accordion_2" => "queeze a small amount of the Oil Control Cleanser onto your palm and lather with a bit of water to create foam. Gently massage in circular motions all over your face, avoiding the eye area. Rinse off with luke-warm water and pat skin dry.
            Use our Marshmallow Toner after cleansing your skin. Soak a cotton pad with 3 pumps of the toner and sweep it gently across face, neck and décolletage, while avoiding the eye area. Allow a moment for the Marshmallow Toner to absorb into your skin, and let it dry before you follow in with a serum and/or moisturiser.
            Use daily, both morning & evening. Suitable for all skin types, but best for oily and breakout-prone skin.",
            "accordion_3" => "Our pH-balanced Clearing Moisturiser is a perfect base for your makeup, keeping your skin hydrated while preventing sebum buildup. It also consists of our power-packed Old Man Weed, consisting of anti-inflammatory properties to soothe your skin as well, before applying makeup.",
        ],

        [
            "id" => 25,
            "categories" => 'Glow',
            "name" => "Australian Glow Berries Super Bounce Mask",
            "image_hover" => "/images/glow/h-1.png",
            "image" => "/images/glow/1.png",
            "price" => 39,
            "type" => '',

            "desc" => "Deeply hydrate, brighten and protect the skin with this antioxidant rich face mask.",
            "tags" => ['Brightens & evens skin tone with Vitamin C rich botanical blend', 'Visibly reduces wrinkles by 41% with Polyphenols', 'Increase skin hydration by 34% with powerful blend of 5 types of Hyaluronic Acid', 'Ultra-nourishing mask packed with super-potent antioxidants', 'Megawatt glow in just 10 minutes*!', 'Free application brush included'],
            "accordion_1" => "Aqua/Water/Eau, Propanediol, Kaolin, Glycerin, C13-15 Alkane, Coco-Caprylate, Oryza Sativa Starch/Oryza Sativa (Rice) Starch, Ethylhexyl Olivate, Bis-C16-20 Isoalkoxy TMHDI/PEG-90 Copolymer, Sodium Acrylates Copolymer, 3-O-Ethyl Ascorbic Acid, Kunzea Pomifera Fruit Extract, Syzygium Luehmannii Fruit Extract, Tasmannia Lanceolata Fruit Extract, Terminalia Ferdinandiana Fruit Extract, Hyaluronic Acid, Hydrolyzed Hyaluronic Acid, Sodium Hyaluronate, Sodium Hyaluronate Crosspolymer, Hydrolyzed Glycosaminoglycans, Parfum (Citrus Paradisi Peel Oil/Citrus Paradisi (Grapefruit) Peel Oil, Citrus Sinensis Peel Oil Expressed/Citrus Sinensis (Orange) Peel Extract, Hibiscus Sabdaria Flower, Michelia Alba Flower Oil, Pelargonium Graveolens Leaf Oil, Rosmarinus Ocinalis Leaf Oil/Rosmarinus Ocinalis (Rosemary) Leaf Oil, Santalum Spicata Wood Oil, Simmondsia Chinensis Seed Oil/Simmondsia Chinensis (Jojoba) Seed Oil), Magnesium Aspartate, Zinc Gluconate, Copper Gluconate, Tocopherol, Allantoin, Helianthus Annuus Seed Oi/Helianthus Annuus (Sunflower) Seed Oil, Dicaprylyl Carbonate, Polyglyceryl-4 Oleate, Decyl Glucoside, Citric Acid, Phenoxyethanol, Ethylhexylglycerin, Sodium Benzoate, Potassium Sorbate, Limonene, Citronellol, Geraniol, Linalool, C.I. 60730/ Ext. D&C Violet No. 2, C.I. 16035/ D&C Red No. 40",
            "accordion_2" => "Spread a thick layer on clean skin, avoiding the eye area. Let the face mask sink into thirsty skin for 10 minutes, then rinse off with warm water. We reccomend using 2 - 3 times a week for best results.",
            "accordion_3" => "You might experience a slight tingling sensation, this should lessen as you keep the mask on for 10 minutes. This means that the mask is working. However, we do always recommend a patch test before using all over the face. If excessive irritation occurs this product may not be right for you.",
        ],
        [
            "id" => 26,
            "categories" => 'Glow',
            "name" => "Australian Glow Berries Super Bounce Mask",
            "image_hover" => "/images/glow/h-4.png",
            "image" => "/images/glow/2.png",
            "price" => 39,
            "type" => '',

            "desc" => "A multi-tasking moisturiser powered by Australian Glow Berries complex and 2 forms of Vitamin C for a plump-looking and radiant complexion.",
            "tags" => ['Oil-soluble Vitamin C with 2X more antioxidant power', 'Glow Berries complex protects, nourishes & hydrates skin', 'Increase skin hydration by 34% with powerful blend of 5 types of Hyaluronic Acid', 'Ultra-nourishing mask packed with super-potent antioxidants', 'Megawatt glow in just 10 minutes*!', 'Free application brush included'],
            "accordion_1" => "Aqua, Dicaprylyl carbonate, Ascorbyl tetraisopalmitate, Squalane, C10-18 triglycerides, Glycerin, Octyldecyl oleate, Propanediol, Hydrogenated vegetable glycerides, Candelilla/jojoba/rice bran polyglyceryl-3 esters, Glyceryl stearate, Phenoxyethanol, Sodium acrylates copolymer, Cetearyl alcohol, Sodium stearoyl lactylate, Xanthan gum, Xylitylglucoside, Anhydroxylitol, Lecithin, Tocopherol, Xylitol, Allantoin, Ethylhexylglycerin, Sodium stearoyl glutamate, Tetrasodium glutamate diacetate, Helianthus annuus (Sunflower) seed oil, Limonene, Citric acid, Kunzea pomifera fruit extract, Syzygium luehmannii fruit extract, Tasmannia lanceolata fruit extract, Glucose, Terminalia ferdinandiana fruit extract, Papain, Davidsonia jerseyana fruit extract, Santalum acuminatum fruit extract, Citronellol, Geraniol, Linalool, 1,2-Hexanediol, Caprylyl glycol, Carbomer, Simmondsia chinensis seed oil/Simmondsia chinensis (Jojoba) seed oil, Citrus paradisi peel oil/Citrus paradisi (Grapefruit) peel oil, Citrus sinensis peel oil expressed/Citrus sinensis (Orange) peel extract, Hibiscus sabdariffa flower, Michelia alba flower oil, Pelargonium graveolens leaf oil, Rosmarinus officinalis leaf oil/Rosmarinus officinalis (Rosemary) leaf oil, Santalum spicata wood oil, Sodium benzoate, Algin, Potassium sorbate",
            "accordion_2" => "Spread a thick layer on clean skin, avoiding the eye area. Let the face mask sink into thirsty skin for 10 minutes, then rinse off with warm water. We reccomend using 2 - 3 times a week for best results.",
            "accordion_3" => "You might experience a slight tingling sensation, this should lessen as you keep the mask on for 10 minutes. This means that the mask is working. However, we do always recommend a patch test before using all over the face. If excessive irritation occurs this product may not be right for you.",
        ],

        [
            "id" => 27,
            "categories" => 'Glow',
            "name" => "Australian Glow Berries Dreamy Glow Drops",
            "image_hover" => "/images/glow/h-3.png",
            "image" => "/images/glow/3.png",
            "price" => 44,
            "type" => '',

            "desc" => "Defeat dryness, dull skin & daily pollutants with this dreamy bi-phase serum.",
            "tags" => ['Vitamin C rich botanical blend brightens & evens skin tone', 'Glow Berries complex protects, nourishes & hydrates skin', 'Increase skin hydration by 34% with powerful blend of 5 types of Hyaluronic Acid', 'Ultra-nourishing mask packed with super-potent antioxidants', 'Boost collagen by up to +144% with Kakadu Plum', 'Free application brush included'],
            "accordion_1" => "Aqua/Water/Eau, Coco-Caprylate, C13-15 Alkane, Dicaprylyl Carbonate, Propanediol, Almond/Borage/ Linseed/Olive Acids/Glycerides, Caprylic/Capric Triglyceride, Glycerin, 3-O-Ethyl Ascorbic Acid, Kunzea Pomifera Fruit Extract, Syzygium Luehmannii Fruit Extract, Tasmannia Lanceolata Fruit Extract, Terminalia Ferdinandiana Fruit Extract, Achillea Millefolium Extract, Hyaluronic Acid, Hydrolyzed Hyaluronic Acid, Sodium Hyaluronate, Sodium Hyaluronate Crosspolymer, Hydrolyzed Glycosaminoglycans, Helianthus Annuus Seed Oil/Helianthus Annuus (Sunflower) Seed Oil, Tocopherol, Parfum (Citrus Paradisi Peel Oil/Citrus Paradisi (Grapefruit) Peel Oil, Citrus Sinensis Peel Oil Expressed/Citrus Sinensis (Orange) Peel Extract, Hibiscus Sabdaria Flower, Michelia Alba Flower Oil, Pelargonium Graveolens Leaf Oil, Rosmarinus Ocinalis Leaf Oil/ Rosmarinus Ocinalis (Rosemary) Leaf Oil, Santalum Spicata Wood Oil, Simmondsia Chinensis Seed Oil/Simmondsia Chinensis (Jojoba) Seed Oil), Xanthan Gum, Citric Acid, Limonene, Citronellol, Geraniol, Linalool, Pentylene Glycol, Butylene Glycol, Sodium Benzoate, Potassium Sorbate, CI 60730/Ext. D&C Violet No. 2.",
            "accordion_2" => "Shake bottle to combine and activate the bi-phase formula.",
            "accordion_3" => "For best results, we recommend applying our Dreamy Glow Drops as your last step before applying moisturiser, after cleansing and applying any lighter serums. For a supercharged glow, you might want to try adding a couple of drops to your primer, foundation, or even dab on as a subtle liquid highlighter.",
        ],

        [
            "id" => 28,
            "categories" => 'Glow',
            "name" => "Australian Glow Berries Enzyme Powder Polish",
            "image_hover" => "/images/glow/h-4.png",
            "image" => "/images/glow/4.png",
            "price" => 34,
            "type" => '',

            "desc" => "Glow beyond bright skin with our advanced, triple-action enzyme powder exfoliant.",
            "tags" => ['Vitamin C rich botanical blend brightens & evens skin tone', 'Glow Berries complex protects, nourishes & hydrates skin', 'Increase skin hydration by 34% with powerful blend of 5 types of Hyaluronic Acid', 'Ultra-nourishing mask packed with super-potent antioxidants', 'Boost collagen by up to +144% with Kakadu Plum', 'Free application brush included'],
            "accordion_1" => "Oryza Sativa Starch/Oryza Sativa (Rice) Starch, Kaolin, Sodium Cocoyl Glutamate, Cellulose, Oryza Sativa Powder/Oryza Sativa (Rice) Powder, Glycerin, Macadamia Ternifolia Seed Oil, Kunzea Pomifera Fruit Extract, Syzygium Luehmannii Fruit Extract, Tasmannia Lanceolata Fruit Extract, Santalum Acuminatum Fruit Extract, Davidsonia Jerseyana Fruit Extract, Terminalia Ferdinandiana Fruit Extract, Papain, Aloe Barbadensis Leaf Juice, Vaccinium Myrtillus Fruit Extract, Cassia Angustifolia Seed Polysaccharide, Pichia/Resveratrol Ferment Extract, 3-O-Ethyl Ascorbic Acid, Tocopherol, Helianthus Annuus Seed Oil/Helianthus Annuus (Sunflower) Seed Oil, Parfum (Citrus Paradisi Peel Oil/Citrus Paradisi (Grapefruit) Peel Oil, Citrus Sinensis Peel Oil Expressed/Citrus Sinensis (Orange) Peel Extract, Hibiscus Sabdariffa Flower, Michelia Alba Flower Oil, Pelargonium Graveolens Leaf Oil, Rosmarinus Officinalis Leaf Oil/Rosmarinus Officinalis (Rosemary) Leaf Oil, Santalum Spicata Wood Oil, Simmondsia Chinensis Seed Oil/Simmondsia Chinensis (Jojoba) Seed Oil), Maltodextrin, Glucose, Gluconolactone, Citric Acid, Aqua/Water/Eau, Phenoxyethanol, Ethylhexylglycerin, Sodium Benzoate, Potassium Sorbate, Limonene, CI 16035/ D&C Red No. 40, CI 60730/Ext. D&C Violet No. 2",
            "accordion_2" => "Morning or night, pour a half-spoon of polish into your palm and add a few drops of water. Gently rub hands together to create a foam before massaging onto a cleansed face and neck for 15 seconds, avoiding the eye area. Rinse to reveal smooth, glowing skin.",
            "accordion_3" => "Use it 2 - 3 times a week as part of your regular skincare routine. We recommend using Enzyme Powder Polish on different days to our Australian Pink Clay Mask to ensure you're not overdoing the exfoliation/detox. For those with sensitive skin, we recommend using a gentle cleanser before exfoliating with the Enzyme Powder Polish, to avoid any irritation.",
        ],
        [
            "id" => 29,
            "categories" => 'Glow',
            "name" => "Plump & Glow Kit",
            "image_hover" => "/images/glow/h-4.png",
            "image" => "/images/glow/5.png",
            "price" => 74,
            "type" => '',

            "desc" => "The ultimate dewy-skin duo to firm, plump and supercharge your glow. Packed with luxurious botanical extracts and potent actives, the plush, dazzling radiance of your dreams is made attainable with this indulgent set.",
            "tags" => ['Vitamin C rich botanical blend brightens & evens skin tone', 'Glow Berries complex protects, nourishes & hydrates skin', 'Increase skin hydration by 34% with powerful blend of 5 types of Hyaluronic Acid', 'Ultra-nourishing mask packed with super-potent antioxidants', 'Boost collagen by up to +144% with Kakadu Plum', 'Free application brush included'],
            "accordion_1" => "Oryza Sativa Starch/Oryza Sativa (Rice) Starch, Kaolin, Sodium Cocoyl Glutamate, Cellulose, Oryza Sativa Powder/Oryza Sativa (Rice) Powder, Glycerin, Macadamia Ternifolia Seed Oil, Kunzea Pomifera Fruit Extract, Syzygium Luehmannii Fruit Extract, Tasmannia Lanceolata Fruit Extract, Santalum Acuminatum Fruit Extract, Davidsonia Jerseyana Fruit Extract, Terminalia Ferdinandiana Fruit Extract, Papain, Aloe Barbadensis Leaf Juice, Vaccinium Myrtillus Fruit Extract, Cassia Angustifolia Seed Polysaccharide, Pichia/Resveratrol Ferment Extract, 3-O-Ethyl Ascorbic Acid, Tocopherol, Helianthus Annuus Seed Oil/Helianthus Annuus (Sunflower) Seed Oil, Parfum (Citrus Paradisi Peel Oil/Citrus Paradisi (Grapefruit) Peel Oil, Citrus Sinensis Peel Oil Expressed/Citrus Sinensis (Orange) Peel Extract, Hibiscus Sabdariffa Flower, Michelia Alba Flower Oil, Pelargonium Graveolens Leaf Oil, Rosmarinus Officinalis Leaf Oil/Rosmarinus Officinalis (Rosemary) Leaf Oil, Santalum Spicata Wood Oil, Simmondsia Chinensis Seed Oil/Simmondsia Chinensis (Jojoba) Seed Oil), Maltodextrin, Glucose, Gluconolactone, Citric Acid, Aqua/Water/Eau, Phenoxyethanol, Ethylhexylglycerin, Sodium Benzoate, Potassium Sorbate, Limonene, CI 16035/ D&C Red No. 40, CI 60730/Ext. D&C Violet No. 2",
            "accordion_2" => "After cleansing, apply 4 drops of Dreamy Glow Drops serum to clean, slightly damp skin. Shake the bottle to activate the bi-phase serum before application. Gently massage in the serum into the skin in upwards, sweeping motions.",
            "accordion_3" => "Complete the routine with the Intense Glow Moisturiser, powered by 2 sources of Vitamin C to boost skin radiance, hydrate and nourish skin while protecting skin barriers against environmental stressors with antioxidants.",
        ],


    ];



    public function homepage()
    {
        $products = array_slice($this->products, -16);
        $set1 = array_slice($products, 0, 4);
        $set2 = array_slice($products, 4, 4);
        $set3 = array_slice($products, 8, 4);
        $set4 = array_slice($products, 12, 4);
        return view('homepage', compact('set1', 'set2', 'set3', 'set4'));
    }


    public function all()
    {
        $categories = collect($this->products)->pluck('categories')->unique()->values();
        return view('all', ['products' => $this->products, 'categories' => $categories]);
    }


    public function details($id)
    {
        $products = array_slice($this->products, -4);
        $product = collect($this->products)->firstWhere('id', $id);


        return view('details', [
            'product' => $product,
            'products' => $products,
        ]);
    }


    public function filteredProducts(Request $request)
    {
        $filteredProducts = collect($this->products);

        if ($request->has('categories') && count($request->categories) > 0) {
            $filteredProducts = $filteredProducts->filter(function ($product) use ($request) {
                return in_array(strtolower($product['categories']), array_map('strtolower', $request->categories));
            });
        }

        if ($request->has('prices') && count($request->prices) > 0) {
            $filteredProducts = $filteredProducts->filter(function ($product) use ($request) {
                $price = $product['price'];
                foreach ($request->prices as $range) {
                    if ($range === 'under-25' && $price < 25) return true;
                    if ($range === '25-50' && $price >= 25 && $price <= 50) return true;
                    if ($range === '50-100' && $price > 50 && $price <= 100) return true;
                }
                return false;
            });
        }


        return response()->json($filteredProducts->values());
    }


    public function filterByTag($tag)
    {

        $filteredProducts = collect($this->products)->filter(function ($product) use ($tag) {
            return in_array(strtolower($tag), array_map('strtolower', $product['tags'] ?? []));
        });

        return view('products_by_tag', ['products' => $filteredProducts, 'tag' => $tag]);
    }
}
