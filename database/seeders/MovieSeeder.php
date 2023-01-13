<?php

namespace Database\Seeders;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'AVATAR: The Way of Water',
            'description' => 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Navi race to protect their home.',
            'director' => 'James Cameron',
            'release_date' => Carbon::make('2022-12-06'),
            'thumbnail' => 'images/thumbnail/avatar2-thumb.jpg',
            'background' => 'images/background/avatar-bg.jpeg',
        ]);

        Movie::create([
            'title' => 'Stand by Me Doraemon 2',
            'description' => 'Nobita travels to the future to show his beloved grandma his bride, but adult Nobita has fled his own wedding. Can he ever be a good husband to Shizuka?',
            'director' => 'Ryuichi Yagi',
            'release_date' => Carbon::make('2020-09-20'),
            'thumbnail' => 'images/thumbnail/stand-by-me-doraemon-2-thumb.jpg',
            'background' => 'images/background/stand-by-me-doraemon-2-bg.jpg',
        ]);
        Movie::create([
            'title' => 'Black Adam',
            'description' => 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods--and imprisoned just as quickly--Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.',
            'director' => 'Jaume Collet-Serra',
            'release_date' => Carbon::make('2022-10-19'),
            'thumbnail' => 'images/thumbnail/black-adam-thumb.jpg',
            'background' => 'images/background/black-adam-bg.jpg',
        ]);

        Movie::create([
            'title' => 'The Billionaire',
            'description' => 'At the age of 16, he was an online game addict. At age 17, he dropped out of school to become a peanut peddler. When he was 18, his family went bankrupt and left a debt of 40 million Baht. At the age of 19, he created the seaweed snack \"Tao Kae Noi\" which is sold in 3,000 7-Eleven branches in Thailand d. Now, aged 26, he is Thailands best-selling seaweed snack producer, earning 800 million Baht annually and employing 2,000 staff. His name is Top Ittipat, and this is the true story of his extraordinary life.',
            'director' => 'Songyos Sugmakanan',
            'release_date' => Carbon::make('2011-10-20'),
            'thumbnail' => 'images/thumbnail/the-billionaire-thumb.jpg',
            'background' => 'images/background/the-billionaire-bg.png',
        ]);

        Movie::create([
            'title' => 'Be With You',
            'description' => 'Be with You is a 2018 South Korean romance film starring So Ji-sub and Son Ye-jin, and directed by Lee Jang-hoon. This film is a remake of the 2004 Japanese film of the same name, which was based on the novel by Takuji Ichikawa',
            'director' => 'Lee Jang-Hoon',
            'release_date' => Carbon::make('2018-03-14'),
            'thumbnail' => 'images/thumbnail/be-with-you thumb.jpg',
            'background' => 'images/background/be-with-you-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Indiana Jones and the Kingdom of the Crystal Skull',
            'description' => 'In 1957, archaeologist and adventurer Dr. Henry "Indiana" Jones, Jr. is called back into action and becomes entangled in a Soviet plot to uncover the secret behind mysterious artifacts known as the Crystal Skulls.',
            'director' => ' Steven Spielberg',
            'release_date' => Carbon::make('2008-05-22'),
            'thumbnail' => 'images/thumbnail/indiana-jones-thumb.jpg',
            'background' => 'images/background/indiana-jones-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Soekarno',
            'description' => 'This movie follows the life of Soekarno, the first president of the Republic of Indonesia, from his childhood until he managed to proclaimed Indonesian freedom with M. Hatta in 1945.',
            'director' => 'Hanung Bramantyo',
            'release_date' => Carbon::make('2013-12-11'),
            'thumbnail' => 'images/thumbnail/soekarno-thumb.jpg',
            'background' => 'images/background/soekarno-bg.jpg',
        ]);

        Movie::create([
            'title' => 'My Stupid Boss 2',
            'description' => 'Bossman and his employees goes to Vietnam to find new workers for his company, but instead of getting new workers they got a lot of new troubles.',
            'director' => 'Upi Avianto',
            'release_date' => Carbon::make('2019-03-28'),
            'thumbnail' => 'images/thumbnail/boss2-thumb.jpg',
            'background' => 'images/background/boss2-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Life of Pi',
            'description' => 'A young man who survives a disaster at sea is hurtled into an epic journey of adventure and discovery. While cast away, he forms an unexpected connection with another survivor: a fearsome Bengal tiger.',
            'director' => 'Ang Lee',
            'release_date' => Carbon::make('2012-11-30'),
            'thumbnail' => 'images/thumbnail/life-pi-thumb.jpg',
            'background' => 'images/background/life-pi-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Michael Jackson\'s This Is It',
            'description' => 'A compilation of interviews, rehearsals, and backstage footage of Michael Jackson as he prepared for his series of sold-out shows in London.',
            'director' => 'Kenny Ortega',
            'release_date' => Carbon::make('2009-10-28'),
            'thumbnail' => 'images/thumbnail/mj-thumb.jpg',
            'background' => 'images/background/mj-bg.jpg',
        ]);
    }
}