<?php

namespace Database\Seeders;

use App\Models\Actor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::create([
            'name' => 'Sam Worthington',
            'gender'  => 'Male',
            'biography' => 'Samuel Henry John Worthington is an actor from Australia. He is known for playing Jake Sully in Avatar, Marcus Wright in Terminator Salvation, and Perseus in Clash of the Titans and its sequel Wrath of the Titans.',
            'dob' => Carbon::create('1976-08-02'),
            'pob' => 'Godalming, United Kingdom',
            'image' => 'images/actor/Sam-Worthington.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Zoe Saldana',
            'gender'  => 'Female',
            'biography' => 'Zoe Saldana is an American actress. He made his first appearances in the films Center Stage and Crossroads. She is best known for her roles as Anamaria in Pirates of the Caribbean: The Curse of the Black Pearl, Uhura in Star Trek, and Neytiri in Avatar. He also played the lead role in the action film Colombiana.',
            'dob' => Carbon::create('1978-06-19'),
            'pob' => 'Passaic, New Jersey, USA',
            'image' => 'images/actor/Zoe-Saldana.jpg',
            'popularity' => 500
        ]);

        Actor::create([
            'name' => 'Stephen Lang',
            'gender'  => 'Male',
            'biography' => 'Stephen Lang is an American stage and screen actor, and playwright. He is known for roles in films including Manhunter, Gettysburg, Gods and Generals, Public Enemies and Dont Breathe.',
            'dob' => Carbon::create('1952-07-11'),
            'pob' => 'New York City, New York, USA',
            'image' => 'images/actor/Stephen-Lang.jpg',
            'popularity' => 500
        ]);

        Actor::create([
            'name' => 'Wasabi Mizuta',
            'gender'  => 'Female',
            'biography' => "Wasabi Mizuta  is a Japanese voice actress. She was born in Aoyama, Mie, and currently resides in Iga, Mie. Mizuta replaced long-time voice actress Nobuyo Ōyama as the voice of Doraemon, starting with the 2005 TV series. She won the Kids/Family Award at the 4th Seiyu Awards. She formerly appeared in the Pokémon Best Wishes series in Japan, voicing Ash's Tepig. She was at one time represented by Kenji Utsumi's Ken Production.",
            'dob' => Carbon::create('1974-08-04'),
            'pob' => 'Aoyama, Mie, Japan',
            'image' => 'images/actor/WasabiMizuta.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Megumi Ōhara',
            'gender'  => 'Female',
            'biography' => "Megumi Ōhara  is a female Japanese voice actress. She was born in Tokyo and is affiliated with Kekke Corporation.",
            'dob' => Carbon::create('1975-04-16'),
            'pob' => 'Tykyo, Japan',
            'image' => 'images/actor/Megumi-Ohara.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Yumi Kakazu',
            'gender'  => 'Female',
            'biography' => "Yumi Kakazu was born on June 18, 1973 in Saitama, Japan. She is an actress, known for Final Fantasy VII: Advent Children (2005), Fullmetal Alchemist (2003) and Fullmetal Alchemist the Movie: Conqueror of Shamballa (2005).",
            'dob' => Carbon::create('1973-06-18'),
            'pob' => 'Saitama, Japan',
            'image' => 'images/actor/Yumi-Kakazu.jpg',
            'popularity' => 1500
        ]);

        Actor::create([
            'name' => 'Dwayne Johnson',
            'gender'  => 'Male',
            'biography' => "Dwayne Douglas Johnson also known by his ring name The Rock, is of American Samoan descent, actor, producer, businessman, retired professional wrestler, and former American football and Canadian football. He wrestled for the World Wrestling Federation for eight years before pursuing an acting career.",
            'dob' => Carbon::create('1972-05-02'),
            'pob' => 'Hayward, California, USA',
            'image' => 'images/actor/Dwayne-Johnson.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Aldis Hodge',
            'gender'  => 'Male',
            'biography' => "Aldis Alexander Basil Hodge is an American actor. Among his significant roles, he played Alec Hardison in the TNT series Leverage, MC Ren in the 2015 biopic Straight Outta Compton, Levi Jackson in the 2016 film Hidden Figures, Noah in the WGN America series Underground, Matthew in Girlfriends and Jim Brown in the 2020 film One Night in Miami.... He portrays Carter Hall / Hawkman in the DC Extended Universe, starting with Black Adam (2022).",
            'dob' => Carbon::create('1986-09-20'),
            'pob' => 'Onslow County, North Carolina, USA',
            'image' => 'images/actor/Aldis-Hodge.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Pierce Brosnan',
            'gender'  => 'Male',
            'biography' => "Pierce Brendan Brosnan, OBE is a film and television actor, film producer, and environmental activist, who holds dual citizenship, namely the Republic of Ireland and the United States",
            'dob' => Carbon::create('1953-05-16'),
            'pob' => 'Drogheda, Ireland',
            'image' => 'images/actor/Pierce-Brosnan.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Pachara Chirathivat',
            'gender'  => 'Male',
            'biography' => "Pachara Chirathivat, is a Thai actor and singer. He is known by the name, Peach. He has starred in several films. On SuckSeed he was a supporting actor playing twins Koong and Kay",
            'dob' => Carbon::create('1993-05-10'),
            'pob' => 'Bangkok, Thailand',
            'image' => 'images/actor/Pachara-Chirathivat.jpg',
            'popularity' => 600
        ]);

        Actor::create([
            'name' => 'Walanlak Kumsuwan',
            'gender'  => 'Female',
            'biography' => "Walanlak Kumsuwan is a Thai actress who is known for her role in The Billionaire.",
            'dob' => Carbon::create('1995-01-05'),
            'pob' => 'Thailand',
            'image' => 'images/actor/Lin.jpg',
            'popularity' => 1700
        ]);

        Actor::create([
            'name' => 'Somboonsuk Niyomsiri',
            'gender'  => 'Male',
            'biography' => "Somboonsuk Niyomsiri is an actor, known for The Billionaire and Project S the Series.",
            'dob' => Carbon::create('1932-10-18'),
            'pob' => 'Chiang Mai, Thailand',
            'image' => 'images/actor/uncle-top.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'So Ji-Seob',
            'gender'  => 'Male',
            'biography' => "So Ji-Seob is an actor from South Korea. After making her entertainment debut as a jeans model, she became known for her leading roles in the television series Something Happened in Bali, I'm Sorry, I Love You, Cain and Abel, Phantom, Master's Sun, and Oh My Venus, as well as the film Rough Cut.",
            'dob' => Carbon::create('1977-11-04'),
            'pob' => 'Seoul, South Korea',
            'image' => 'images/actor/sol-ji-sob.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Son Ye-Jin',
            'gender'  => 'Female',
            'biography' => "Son Ye-Jin is a South Korean actress. He rose to prominence in 2003 for The Classic and Summer Scent, which were followed by the commercially successful A Moment to Remember and April Snow. His early roles in films earned him the title \"Nation's First Love\" in Korea.",
            'dob' => Carbon::create('1982-11-01'),
            'pob' => 'Daegu, South Korea',
            'image' => 'images/actor/so-ye-jin.jpg',
            'popularity' => 1400
        ]);

        Actor::create([
            'name' => 'Park Seo-Joon',
            'gender'  => 'Male',
            'biography' => "Park Seo-joon is a South Korean actor known for his role as Si Woo in the KBS2 television series, Dream High 2. He is known for dramas such as She Was Pretty, Hwarang: The Poet Warrior Youth, Fight for My Way, What's Wrong with Secretary Kim, and Itaewon Class",
            'dob' => Carbon::create('1988-12-16'),
            'pob' => 'Seoul, South Korea',
            'image' => 'images/actor/park-so-jun.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Harrison Ford',
            'gender'  => 'Male',
            'biography' => "Harrison Ford is an American actor who was once nominated for the Best Actor Academy Award. He is best known for his roles as pilot Han Solo in the Star Wars film series and archaeologist Indiana Jones in Raiders of the Lost Ark and its sequels",
            'dob' => Carbon::create('1942-07-13'),
            'pob' => 'Chicago, Illinois, USA',
            'image' => 'images/actor/harrison-ford.jpeg',
            'popularity' => 1800
        ]);

        Actor::create([
            'name' => 'Shia LaBeouf',
            'gender'  => 'Male',
            'biography' => "Shia Saide LaBeouf is an American actor and director who won the Daytime Emmy Award. He became better known after his role in the Disney Channel series Even Stevens. In 2007, LaBeouf starred in films including Disturbia, Transformers, and Surf's Up.",
            'dob' => Carbon::create('1986-07-11'),
            'pob' => 'Lost Angeles, California, USA',
            'image' => 'images/actor/shia.jpg',
            'popularity' => 900
        ]);

        Actor::create([
            'name' => 'Cate Blanchett',
            'gender'  => 'Female',
            'biography' => "Catherine Élise Blanchett is an Australian actress who won an Academy Award and a Golden Globe. He has started a career in film since 1996. Time magazine named Blanchett one of the 100 most influential people in the world in 2007 and 2018.",
            'dob' => Carbon::create('1969-05-14'),
            'pob' => 'Ivanhoe, Australia',
            'image' => 'images/actor/cate.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Ario Bayu',
            'gender'  => 'Male',
            'biography' => "Ario Bayu Wicaksono is an Indonesian actor and model. Ario started his acting career by playing the boyfriend of the character Natasha in the film Ward 13 in 2004.",
            'dob' => Carbon::create('1985-02-06'),
            'pob' => 'Jakarta, Indonesia',
            'image' => 'images/actor/ario-bayu.jpg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Luqman Sardi',
            'gender'  => 'Male',
            'biography' => "Lukman Sardi is an Indonesian actor, producer and director. He is the son of the legendary Indonesian composer, Idris Sardi, the younger brother of the Indonesian actor and singer, Santi Sardi, and the older brother of the Indonesian actor, Ajeng Triani Sardi.",
            'dob' => Carbon::create('1971-07-14'),
            'pob' => 'Jakarta, Indonesia',
            'image' => 'images/actor/luqman.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Queen Tika Bravani',
            'gender'  => 'Female',
            'biography' => "Ratu Tika Bravani, SE is a model and actor from Indonesia. She is the wife of Indonesian actor, Dimas Aditya. Tika won the Citra Cup for Best Female Supporting Actor at FFI 2014 for her role as Fatmawati in the film Soekarno: Indonesia Merdeka.",
            'dob' => Carbon::create('1990-02-17'),
            'pob' => 'Denpasar, Indonesia',
            'image' => 'images/actor/tika.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Reza Rahadian',
            'gender'  => 'Male',
            'biography' => "Reza Rahadian Matulessy is an actor, model, advertisement star, singer and Chair of the Indonesian Film Festival from 2021 to 2023.",
            'dob' => Carbon::create('1987-03-05'),
            'pob' => 'Bogor City, Indonesia',
            'image' => 'images/actor/reza.png',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Atikah Suhaime',
            'gender'  => 'Female',
            'biography' => "Nur Atikah binte Mohd Suhaime or better known as Atikah Suhaime is a female actor from Singapore who is active in acting in Malaysia",
            'dob' => Carbon::create('1991-03-15'),
            'pob' => 'Tampines, Singapore',
            'image' => 'images/actor/atikah.jpeg',
            'popularity' => 2000
        ]);

        Actor::create([
            'name' => 'Bunga Citra Lestari',
            'gender'  => 'Female',
            'biography' => "Bunga Citra Lestari, often referred to by her initials BCL, is an Indonesian singer, actress, talent show judge, and television personality.",
            'dob' => Carbon::create('1983-03-22'),
            'pob' => 'Jakarta, Indonesia',
            'image' => 'images/actor/bcl.jpg',
            'popularity' => 1200
        ]);

        Actor::create([
            'name' => 'Suraj Sharma',
            'gender'  => 'Male',
            'biography' => "Suraj Sharma is an actor and student from New Delhi, India. He made his career debut in the film Life of Pi. This film was directed by Ang Lee which was adapted from the novel of the same name. Sharma was born in 1993 to a Malayali father and mother.",
            'dob' => Carbon::create('1993-03-21'),
            'pob' => 'New Delhi, India',
            'image' => 'images/actor/suraj.jpg',
            'popularity' => 700
        ]);

        Actor::create([
            'name' => 'Adil Hussain',
            'gender'  => 'Male',
            'biography' => "Adil Hussain is an Indian actor who has worked in Indian cinema, including art house and mainstream Bollywood, as well as international cinema, in films such as The Reluctant Fundamentalist and Life of Pi.",
            'dob' => Carbon::create('1963-10-05'),
            'pob' => 'Goalpara, India',
            'image' => 'images/actor/adil.jpg',
            'popularity' => 1500
        ]);

        Actor::create([
            'name' => 'Tabu',
            'gender'  => 'Female',
            'biography' => "Tabassum Fatima Hashmi is an Indian film actress. He mainly acts in Hindi films, and has also appeared in English, Telugu, Tamil, Malayalam, Marathi and Bengali films.",
            'dob' => Carbon::create('1970-11-04'),
            'pob' => 'Haiderabad, India',
            'image' => 'images/actor/Tabu.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Michael Jackson',
            'gender'  => 'Male',
            'biography' => "Michael Joseph Jackson is a singer and songwriter from the United States. He is known as the \"King of Pop\" and popularized the \"Moonwalk\" dance move which has become his trademark.",
            'dob' => Carbon::create('1958-08-29'),
            'pob' => 'Gary, Indiana, USA',
            'image' => 'images/actor/mj.jpg',
            'popularity' => 1000
        ]);

        Actor::create([
            'name' => 'Michael Bearden',
            'gender'  => 'Male',
            'biography' => "Michael Bearden is known for This Is It, Super Bowl LI and The Outlaw Johnny Black",
            'dob' => Carbon::create('1981-11-21'),
            'pob' => 'Chicago, USA',
            'image' => 'images/actor/bearden.jpg',
            'popularity' => 1800
        ]);

        Actor::create([
            'name' => 'Judith Hill',
            'gender'  => 'Female',
            'biography' => "Judith Glory Hill is an American singer-songwriter from Los Angeles, California. He has provided backing vocals for artists such as Michael Jackson, Prince, and Josh Groban. In 2009, Hill was chosen as Jackson's duet partner for the song \"I Just Can't Stop Loving You\" during the This Is It concert.",
            'dob' => Carbon::create('1984-05-06'),
            'pob' => 'Los Angeles, California',
            'image' => 'images/actor/judith.jpg',
            'popularity' => 1200
        ]);
    }
}