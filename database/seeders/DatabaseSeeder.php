<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->Testimonil();
        $this->Gallery();
        $this->Chefs();
        $this->TableBook();
        $this->Message();
        $this->Servises();
        $this->Event_type();
        $this->Landing_page();
        $this->Manue();
        $this->Blog();
    }
    public function Testimonil() {
        $dataseed = [
            [
                'sl'=> 'w342we',
                'type'=>'testimonil',
                'name'=>'Clint Name',
                'user_img_link'=>'img/testimonial-1.jpg',
                'profession'=>'professor',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'img'=>'img/testimonials/testimonials-1.jpg',
                'link'=>'img/testimonials/',
            ],
            [
                'sl'=> 'w343we',
                'type'=>'testimonil',
                'name'=>'Clint Name 2',
                'user_img_link'=>'img/testimonial-2.jpg',
                'profession'=>'Annalysist',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'img'=>'img/testimonials/testimonials-2.jpg',
                'link'=>'img/testimonials/',
            ],
            [
                'sl'=> 'w344we',
                'type'=>'testimonil',
                'name'=>'Clint Name 3',
                'user_img_link'=>'img/testimonial-3.jpg',
                'profession'=>'Annalysist',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'img'=>'img/testimonials/testimonials-3.jpg',
                'link'=>'img/testimonials/',
            ],
            [
                'sl'=> 'w344we',
                'type'=>'testimonil',
                'name'=>'Clint Name 4',
                'user_img_link'=>'img/testimonial-4.jpg',
                'profession'=>'Annalysist',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'img'=>'img/testimonials/testimonials-4.jpg',
                'link'=>'img/testimonials/',
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('testimonil')->insert($row);
        }
    }
    public function Gallery() {
        $dataseed = [
            [
                'sl'=> 'w341we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-1.jpg',
            ],
            [
                'sl'=> 'w342we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-2.jpg',

            ],
            [
                'sl'=> 'w343we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-3.jpg',

            ],
            [
                'sl'=> 'w344we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-4.jpg',
            ],
            [
                'sl'=> 'w345we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-5.jpg',
            ],
            [
                'sl'=> 'w346we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-6.jpg',
            ],
            [
                'sl'=> 'w347we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-7.jpg',
            ],
            [
                'sl'=> 'w348we',
                'type'=>'gallery',
                'img'=>'img/gallery/gallery-8.jpg',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('gallery')->insert($row);
        }
    }
    public function Chefs() {
        $dataseed = [
            [
                'sl'=> 'w341we',
                'type'=>'Master Chefs',
                'name'=>'tom smith',
                'img'=>'img/chefs/chefs-1.jpg',
                'twitter'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'facebook'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'insta'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'linkedin'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
            ],
            [
                'sl'=> 'w342we',
                'type'=>'Patister',
                'name'=>'Sarha Jhonson',
                'img'=>'img/chefs/chefs-2.jpg',
                'twitter'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'facebook'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'insta'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'linkedin'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
            ],
            [
                'sl'=> 'w343we',
                'type'=>'Cook',
                'name'=>'william Anderson',
                'img'=>'img/chefs/chefs-3.jpg',
                'twitter'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'facebook'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'insta'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
                'linkedin'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('chefs')->insert($row);
        }
    }
    public function TableBook(){
        $dataseed = [
            [
                'sl'=> 'w341we',
                'cname'=>'tom smith',
                'cemail'=>'tom@gmail.com',
                'cphone'=>'0123456789',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'2 pm',
                'cpeople'=>'2',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'231',
                'statuses'=>'active',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Phanthom',
                'cemail'=>'tom@gmail.com',
                'cphone'=>'0123456739',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'231',
                'statuses'=>'shedule',
            ],
            [
                'sl'=> 'w343we',
                'cname'=>'Joker',
                'cemail'=>'joker@gmail.com',
                'cphone'=>'01234567XX',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'5000',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'232',
                'statuses'=>'shedule',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Iron Man',
                'cemail'=>'tonystack@gmail.com',
                'cphone'=>'0123456799',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'233',
                'statuses'=>'reject',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Captain America',
                'cemail'=>'why@gmail.com',
                'cphone'=>'0123456792',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'233',
                'statuses'=>'reject',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Spiderman',
                'cemail'=>'spiderman@gmail.com',
                'cphone'=>'0123456799',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'statuses'=>'active',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Superman',
                'cemail'=>'superman@gmail.com',
                'cphone'=>'0123456799',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'statuses'=>'active',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'bat man',
                'cemail'=>'batman@gmail.com',
                'cphone'=>'0123456799',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'statuses'=>'active',
            ],
            [
                'sl'=> 'w342we',
                'cname'=>'Jack Sparrow',
                'cemail'=>'jack@gmail.com',
                'cphone'=>'01234567ss',
                'cdate'=>'Feb-21-2024',
                'ctime'=>'3 pm',
                'cpeople'=>'10',
                'message'=>'hellow world, lorem ipsom doller site',
                'ctable'=>'231',
                'statuses'=>'complete',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('tablebook')->insert($row);
        }
    }
    public function Message() {
        $dataseed = [
            [
                'sl'=>'msg121sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
            [
                'sl'=>'msg122sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
            [
                'sl'=>'msg123sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('message')->insert($row);
        }
    }
    public function Servises() {
        $dataseed = [
            [
                'type'=>'benefit',
                'subject'=>'Lorem Ipsum',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
                'type'=>'benefit',
                'subject'=>'Lorem Ipsum 2',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
                'type'=>'benefit',
                'subject'=>'Lorem Ipsum 3',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('servises')->insert($row);
        }
    }
    public function Event_type() {
        $dataseed = [
            [
                'type'=>'event',
                'subject'=>'Birthday Party',
                'intro'=>'simply dummy text of the printing and typesetting industry',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
                'img'=>'img/event/event-birthday.jpg',
                'price'=>199,
            ],
            [
                'type'=>'event',
                'subject'=>'Private Party',
                'intro'=>'simply dummy text of the printing and typesetting industry',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
                'img'=>'img/event/event-private.jpg',
                'price'=>299,
            ],
            [
                'type'=>'event',
                'subject'=>'Custom Party',
                'intro'=>'simply dummy text of the printing and typesetting industry',
                'content'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
                'img'=>'img/event/event-custom.jpg',
                'price'=>399,
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('event_type')->insert($row);
        }
    }
    public function Landing_page() {
        $dataseed = [
            [
                'type'=>'media',
                'subject'=>'facebook',
                'content'=>'https://www.facebook.com/profile.php?id=100005017206730',
            ],
            [
                'type'=>'media',
                'subject'=>'twitter',
                'content'=>'https://www.facebook.com/profile.php?id=100005017206730',
            ],
            [
                'type'=>'media',
                'subject'=>'instageam',
                'content'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
            ],
            [
                'type'=>'media',
                'subject'=>'youtube',
                'content'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA',
            ],
            [
                'type'=>'media',
                'subject'=>'linkedin',
                'content'=>'https://www.linkedin.com/in/reja-e-rabbi-sarkar-62103a13a/',
            ],
            [
                'type'=>'media',
                'subject'=>'whatsapp',
                'content'=>'https://www.facebook.com/profile.php?id=100005017206730',
            ],
            [
                'type'=>'media',
                'subject'=>'tellegram',
                'content'=>'https://t.me/+fsZIF92TCag2ZGVl',
            ],
            [
                'type'=>'media',
                'subject'=>'discord',
                'content'=>'https://discord.gg/g4hvvkzWVy',
            ],
            [
                'type'=>'media',
                'subject'=>'tiktok',
                'content'=>'https://t.me/+fsZIF92TCag2ZGVl',
            ],
            [
                'type'=>'media',
                'subject'=>'email',
                'content'=>'rabbi1365@outlook.com',
            ],
            [
                'type'=>'media',
                'subject'=>'contact',
                'content'=>'+1 5589 55488 55',
            ],
            [
                'type'=>'about',
                'subject'=>'open time',
                'content'=>'Mon-Sat: 11AM - 23PM',
            ],
            [
                'type'=>'about',
                'subject'=>'location',
                'content'=>'Mon-Sat: 11AM - 23PM',
            ],
            [
                'type'=>'about',
                'subject'=>'news letter message',
                'content'=>'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
            ],
            [
                'type'=>'about',
                'subject'=>'site name',
                'content'=>'RESTAURANTLY',
            ],
            [
                'type'=>'about',
                'subject'=>'carosel spech',
                'content'=>'Delivering great food for more than 18 years!',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('landing_page')->insert($row);
        }
    }
    public function Manue() {
        $dataseed = [
            [
                'name'=> 'Lobster Bisque',
                'price'=>120,
                'type'=>'starter',
                'special'=>'home',
                'summery'=>'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka',
                'title'=>'Architecto ut aperiam autem id',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/lobster-bisque.jpg',
            ],
            [
                'name'=> 'Crab Cake Wrop',
                'price'=>120,
                'type'=>'starter',
                'special'=>'home',
                'summery'=>'A delicate crab cake served on a toasted roll with lettuce and tartar sauce',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/cake.jpg',
            ],
            [
                'name'=> 'Mozzarella Stick',
                'price'=>120,
                'type'=>'special',
                'special'=>'home',
                'summery'=>'Lorem, deren, trataro, filede, nerada',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/mozzarella.jpg',
            ],
            [
                'name'=> 'Caesar Selections',
                'price'=>120,
                'type'=>'starter',
                'special'=>'home',
                'summery'=>'Lorem, deren, trataro, filede, nerada',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/caesar.jpg',
            ],
            [
                'name'=> 'Greek Salad',
                'price'=>120,
                'type'=>'salads',
                'special'=>'home',
                'summery'=>'Fresh spinach, crisp romaine, tomatoes, and Greek olives',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/greek-salad.jpg',
            ],
            [
                'name'=> 'Spinach Salad',
                'price'=>120,
                'type'=>'salads',
                'special'=>'home',
                'summery'=>'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/spinach-salad.jpg',
            ],
            [
                'name'=> 'Bread Barrel',
                'price'=>120,
                'type'=>'special',
                'special'=>'home',
                'summery'=>'Lorem, deren, trataro, filede, nerada',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/bread-barrel.jpg',
            ],
            [
                'name'=> 'Tuscan Grilled',
                'price'=>120,
                'type'=>'special',
                'special'=>'home',
                'summery'=>'Lorem, deren, trataro, filede, nerada',
                'title'=>'modi sit est',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/tuscan-grilled.jpg',
            ],
            [
                'name'=> 'modi sit est',
                'price'=>120,
                'type'=>'special',
                'special'=>'home',
                'summery'=>'Lorem, deren, trataro, filede, nerada',
                'title'=>'Architecto ut aperiam autem ',
                'detels'=>'Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero',
                'img'=>'img/manue/specials-1.png',
            ],
            [
                'name'=> 'Unde Prestinume Seed',
                'price'=>120,
                'type'=>'special',
                'special'=>'special',
                'summery'=>'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka',
                'title'=>'Et blanditiis nemo veritatis excepturi',
                'detels'=>'Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal',
                'img'=>'img/manue/specials-2.png',
            ],
            [
                'name'=> 'Pritur Explicabo vel',
                'price'=>120,
                'type'=>'special',
                'special'=>'special',
                'summery'=>'Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut',
                'title'=>'Impedit facilis occaecati odio neque aperiam sit',
                'detels'=>'Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae',
                'img'=>'img/manue/specials-3.png',
            ],
            [
                'name'=> 'Nostrom que quasi',
                'price'=>120,
                'type'=>'special',
                'special'=>'special',
                'summery'=>'Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus',
                'title'=>'Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore',
                'detels'=>'Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore',
                'img'=>'img/manue/specials-4.png',
            ],
            [
                'name'=> 'Lusto at espodia aut',
                'price'=>120,
                'type'=>'special',
                'special'=>'special',
                'summery'=>'Omnis blanditiis saepe eos autem qui sunt debitis porro quia.',
                'title'=>'Est eveniet ipsam sindera pad rone matrelat sando reda',
                'detels'=>'Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel',
                'img'=>'img/manue/specials-5.png',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('menu')->insert($row);
        }
    }
    public function Blog() {
        $dataseed = [
            [
                'sl' => '12wu2',
                'title'=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
                'summery'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'detels' => '    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.

                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ',
                'img'=>'img/blog/about.jpg',
                'shows'=>'home',
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('blog')->insert($row);
        }
    }
}
