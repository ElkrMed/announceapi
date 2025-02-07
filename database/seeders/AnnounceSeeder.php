<?php

namespace Database\Seeders;

use App\Models\Announce;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnnounceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Announce::insert([
            ['title' => 'Elegant Black Bag with Gold Belt', 'description' => 'A stylish and versatile black bag featuring a sleek gold belt accent. Perfect for any occasion, this bag offers both elegance and practicality with its spacious interior and premium finish', 'price' => '59.99', 'images' => json_encode(['/public/storage/uploads/Rectangle 22.png']), 'category_id' => '2', 'city' => 'Rabat'],
            ['title' => 'Classic 18K Gold Band', 'description' => 'A timeless 18K gold band with a smooth, polished finish. Perfect for weddings, anniversaries, or everyday elegance.', 'price' => '199.99', 'images' => json_encode(['/public/storage/uploads/accesoories2.png']), 'category_id' => '2', 'city' => 'Casablanca'],
            ['title' => '14K Gold Ring with Diamond Accent', 'description' => 'A stunning 14K gold ring featuring a delicate diamond accent, offering a blend of luxury and sophistication. Ideal for engagements or special occasions.', 'price' => '349.99', 'images' => json_encode(['/public/storage/uploads/accessories7.png']), 'category_id' => '2', 'city' => 'Tanger'],
            ['title' => 'Modern Textured Gold Ring', 'description' => 'A unique gold ring with a textured surface, adding a contemporary touch to a classic design. Perfect for those who love modern yet elegant accessories.', 'price' => '159.99', 'images' => json_encode(['/public/storage/uploads/accessories5.png']), 'category_id' => '2', 'city' => 'Agadir'],
            ['title' => 'Red BMW  Sporty & Stylish', 'description' => ' A stunning red BMW with a powerful engine, sleek design, and top-tier features. Perfect for those who love speed and luxury combined. Comes with premium interiors and advanced technology.', 'price' => '49,999', 'images' => json_encode(['/public/storage/uploads/BMW_red.jpg']), 'category_id' => '3', 'city' => 'Tanger'],
            ['title' => 'Blue BMW Elegant Performance', 'description' => 'This blue BMW offers a perfect blend of luxury and performance. Featuring a modern design, smooth handling, and cutting-edge technology, it`\'s built for both comfort and thrill.', 'price' => '52,999', 'images' => json_encode(['/public/storage/uploads/BMW_blue.jpg']), 'category_id' => '3', 'city' => 'Agadir'],
            ['title' => 'Black BMW Ultimate Luxury', 'description' => 'Experience the sophistication of a black BMW, combining power, elegance, and advanced features. Designed for those who demand the best in automotive excellence.', 'price' => '54,999', 'images' => json_encode(['/public/storage/uploads/BMW_black.jpg']), 'category_id' => '3', 'city' => 'Rabat'],
            ['title' => 'Classic Blue Jeans Comfortable & Stylish', 'description' => 'These premium blue jeans offer a perfect fit with durable fabric, ensuring both comfort and style. Ideal for casual outings or everyday wear. Available in various sizes.', 'price' => '39.99', 'images' => json_encode(['/public/storage/uploads/blue-jeans.png']), 'category_id' => '1', 'city' => 'Casablanca'],
            ['title' => 'Blue T-Shirt Soft & Breathable', 'description' => 'A casual blue t-shirt made from high-quality cotton, designed for ultimate comfort and a relaxed fit. Perfect for daily wear or layering.', 'price' => '19.99', 'images' => json_encode(['/public/storage/uploads/blue_tshirt.png']), 'category_id' => '1', 'city' => 'Rabat'],
            ['title' => 'Orange Chemise Elegant & Vibrant', 'description' => 'This orange chemise brings a bold and stylish touch to your wardrobe. Crafted from premium fabric, it\'s perfect for both casual and formal occasions.', 'price' => '29.99', 'images' => json_encode(['/public/storage/uploads/orange_chemise.png']), 'category_id' => '1', 'city' => 'Tanger'],
            [
                'title' => 'Silk Evening Dress',
                'description' => 'Elegant black silk evening dress with subtle beading and flowing silhouette.',
                'price' => '159.99',
                'images' => json_encode(['/public/storage/uploads/silk_evening_dress_black.png']),
                'category_id' => '1',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Linen Summer Shorts',
                'description' => 'Comfortable linen shorts perfect for hot days. Available in beige with adjustable waist.',
                'price' => '45.99',
                'images' => json_encode(['/public/storage/uploads/linen_shorts_beige.png']),
                'category_id' => '1',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Cotton Polo Shirt',
                'description' => 'Classic-fit polo shirt in breathable cotton pique with embroidered logo.',
                'price' => '39.99',
                'images' => json_encode(['/public/storage/uploads/polo_shirt_navy.png']),
                'category_id' => '1',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Wool Winter Coat',
                'description' => 'Luxurious wool blend coat with double-breasted design and warm lining.',
                'price' => '199.99',
                'images' => json_encode(['/public/storage/uploads/wool_coat_gray.png']),
                'category_id' => '1',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Casual Maxi Skirt',
                'description' => 'Flowing maxi skirt with elastic waistband and bohemian print.',
                'price' => '49.99',
                'images' => json_encode(['/public/storage/uploads/maxi_skirt_floral.png']),
                'category_id' => '1',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Business Suit Set',
                'description' => 'Professional two-piece suit in charcoal gray with modern cut.',
                'price' => '299.99',
                'images' => json_encode(['/public/storage/uploads/business_suit_charcoal.png']),
                'category_id' => '1',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Yoga Leggings',
                'description' => 'High-waisted yoga leggings with moisture-wicking fabric and phone pocket.',
                'price' => '34.99',
                'images' => json_encode(['/public/storage/uploads/yoga_leggings_black.png']),
                'category_id' => '1',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Printed Summer Dress',
                'description' => 'Light floral print dress with adjustable straps and midi length.',
                'price' => '55.99',
                'images' => json_encode(['/public/storage/uploads/summer_dress_floral.png']),
                'category_id' => '1',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Casual Hoodie',
                'description' => 'Comfortable cotton blend hoodie with kangaroo pocket and drawstring hood.',
                'price' => '44.99',
                'images' => json_encode(['/public/storage/uploads/casual_hoodie_gray.png']),
                'category_id' => '1',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Slim Fit Chinos',
                'description' => 'Classic khaki chinos with stretch comfort and slim fit design.',
                'price' => '59.99',
                'images' => json_encode(['/public/storage/uploads/slim_chinos_khaki.png']),
                'category_id' => '1',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Knit Sweater',
                'description' => 'Warm cable knit sweater in soft merino wool blend.',
                'price' => '79.99',
                'images' => json_encode(['/public/storage/uploads/knit_sweater_cream.png']),
                'category_id' => '1',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Designer Sunglasses',
                'description' => 'Premium UV protection sunglasses with gold-tone frames.',
                'price' => '129.99',
                'images' => json_encode(['/public/storage/uploads/designer_sunglasses_gold.png']),
                'category_id' => '2',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Leather Messenger Bag',
                'description' => 'Handcrafted leather messenger bag with multiple compartments.',
                'price' => '159.99',
                'images' => json_encode(['/public/storage/uploads/leather_messenger_brown.png']),
                'category_id' => '2',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Diamond Tennis Bracelet',
                'description' => '18K white gold tennis bracelet with brilliant-cut diamonds.',
                'price' => '999.99',
                'images' => json_encode(['/public/storage/uploads/tennis_bracelet_silver.png']),
                'category_id' => '2',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Silk Square Scarf',
                'description' => 'Luxurious silk scarf with artistic print and hand-rolled edges.',
                'price' => '89.99',
                'images' => json_encode(['/public/storage/uploads/silk_scarf_multicolor.png']),
                'category_id' => '2',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Smart Watch',
                'description' => 'Advanced smartwatch with health monitoring and notifications.',
                'price' => '249.99',
                'images' => json_encode(['/public/storage/uploads/smart_watch_black.png']),
                'category_id' => '2',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Leather Wallet',
                'description' => 'Genuine leather bifold wallet with RFID protection.',
                'price' => '49.99',
                'images' => json_encode(['/public/storage/uploads/leather_wallet_brown.png']),
                'category_id' => '2',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Pearl Necklace Set',
                'description' => 'Freshwater pearl necklace with matching earrings.',
                'price' => '199.99',
                'images' => json_encode(['/public/storage/uploads/pearl_set_white.png']),
                'category_id' => '2',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Designer Belt',
                'description' => 'Premium leather belt with signature designer buckle.',
                'price' => '79.99',
                'images' => json_encode(['/public/storage/uploads/designer_belt_black.png']),
                'category_id' => '2',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Silver Cufflinks',
                'description' => 'Sterling silver cufflinks with modern geometric design.',
                'price' => '69.99',
                'images' => json_encode(['/public/storage/uploads/silver_cufflinks_silver.png']),
                'category_id' => '2',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Canvas Backpack',
                'description' => 'Durable canvas backpack with leather trim and laptop compartment.',
                'price' => '89.99',
                'images' => json_encode(['/public/storage/uploads/canvas_backpack_olive.png']),
                'category_id' => '2',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Diamond Stud Earrings',
                'description' => '14K gold diamond stud earrings with screw backs.',
                'price' => '399.99',
                'images' => json_encode(['/public/storage/uploads/diamond_studs_gold.png']),
                'category_id' => '2',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Designer Tote Bag',
                'description' => 'Spacious leather tote with signature print and zip closure.',
                'price' => '179.99',
                'images' => json_encode(['/public/storage/uploads/designer_tote_tan.png']),
                'category_id' => '2',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Mercedes S-Class 2024',
                'description' => 'Luxury sedan with premium leather interior and advanced driver assistance.',
                'price' => '89,999',
                'images' => json_encode(['/public/storage/uploads/mercedes_sclass_silver.jpg']),
                'category_id' => '3',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Range Rover Sport',
                'description' => 'Premium SUV with off-road capability and luxury amenities.',
                'price' => '79,999',
                'images' => json_encode(['/public/storage/uploads/range_rover_sport_white.jpg']),
                'category_id' => '3',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Porsche 911 Carrera',
                'description' => 'Sports car with legendary performance and distinctive styling.',
                'price' => '99,999',
                'images' => json_encode(['/public/storage/uploads/porsche_911_red.jpg']),
                'category_id' => '3',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Tesla Model S',
                'description' => 'Electric luxury sedan with autopilot capabilities and long range.',
                'price' => '84,999',
                'images' => json_encode(['/public/storage/uploads/tesla_models_blue.jpg']),
                'category_id' => '3',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Audi Q8',
                'description' => 'Premium SUV with sporty design and advanced technology.',
                'price' => '75,999',
                'images' => json_encode(['/public/storage/uploads/audi_q8_black.jpg']),
                'category_id' => '3',
                'city' => 'Agadir'
            ],
            [
                'title' => 'BMW 7 Series',
                'description' => 'Executive sedan with premium features and powerful performance.',
                'price' => '86,999',
                'images' => json_encode(['/public/storage/uploads/bmw_7series_metallic_gray.jpg']),
                'category_id' => '3',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Lexus LS 500',
                'description' => 'Luxury sedan with Japanese craftsmanship and hybrid efficiency.',
                'price' => '77,999',
                'images' => json_encode(['/public/storage/uploads/lexus_ls500_pearl_white.jpg']),
                'category_id' => '3',
                'city' => 'Tanger'
            ],
            [
                'title' => 'Bentley Continental GT',
                'description' => 'Ultra-luxury coupe with handcrafted interior and powerful W12 engine.',
                'price' => '199,999',
                'images' => json_encode(['/public/storage/uploads/bentley_continental_dark_blue.jpg']),
                'category_id' => '3',
                'city' => 'Rabat'
            ],
            [
                'title' => 'Maserati Ghibli',
                'description' => 'Italian luxury sports sedan with distinctive style and performance.',
                'price' => '82,999',
                'images' => json_encode(['/public/storage/uploads/maserati_ghibli_silver.jpg']),
                'category_id' => '3',
                'city' => 'Casablanca'
            ],
            [
                'title' => 'Jaguar F-PACE',
                'description' => 'Luxury SUV combining sports car performance with practicality.',
                'price' => '69,999',
                'images' => json_encode(['/public/storage/uploads/jaguar_fpace_british_racing_green.jpg']),
                'category_id' => '3',
                'city' => 'Agadir'
            ],
            [
                'title' => 'Mercedes G-Class',
                'description' => 'Iconic luxury SUV with unmatched presence and capability.',
                'price' => '139,999',
                'images' => json_encode(['/public/storage/uploads/mercedes_gclass_obsidian_black.jpg']),
                'category_id' => '3',
                'city' => 'Tetouan'
            ],
            [
                'title' => 'Rolls-Royce Ghost',
                'description' => 'Ultimate luxury sedan with bespoke craftsmanship and presence.',
                'price' => '299,999',
                'images' => json_encode(['/public/storage/uploads/rollsroyce_ghost_arctic_white.jpg']),
                'category_id' => '3',
                'city' => 'Tanger'
            ]
        ]);
    }
}
