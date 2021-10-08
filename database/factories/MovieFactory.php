<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    private $movie_genre = [
        'Action',
        'Sci-Fi',
        'Fantasy',
        'Drama',
        'Comedy',
        'Horror',
        'Thriller',
    ];

    private $movie_image = [
        'https://m.media-amazon.com/images/M/MV5BN2FjNmEyNWMtYzM0ZS00NjIyLTg5YzYtYThlMGVjNzE1OGViXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg',
        'https://cdn.shopify.com/s/files/1/0969/9128/products/1917_-_Sam_Mendes_-_Hollywood_War_Film_Classic_English_Movie_Poster_a12704bd-2b25-4aa7-8c8d-8f40cf467dc7.jpg?v=1582781089',
        'https://m.media-amazon.com/images/I/81EBp0vOZZL._AC_SY741_.jpg',
        'https://cdn11.bigcommerce.com/s-ydriczk/images/stencil/1280x1280/products/89351/94616/The-Lord-Of-The-Rings-The-Two-Towers-Final-Style-Double-sided-original-movie-poster-buy-now-at-starstills__29242.1599759075.jpg?c=2?imbypass=on',
        'https://cdn.shopify.com/s/files/1/0057/3728/3618/products/c468809972e1fb4b7b0c56b07db68987_a25dc22c-c83a-479d-a241-10fa55e7b36b_480x.progressive.jpg?v=1573588780',
        'https://m.media-amazon.com/images/I/51iiDd3STJL._AC_.jpg',
        'https://cdn.shopify.com/s/files/1/1416/8662/products/bram_stokers_dracula_1992_advance_original_film_art_9cd6d2c1-997b-4be2-bfae-4563ec2d254f_1200x.jpg?v=1580254283',
        'https://m.media-amazon.com/images/I/51cjgP9KO7L._AC_.jpg',
        'https://m.media-amazon.com/images/M/MV5BMTc2MTQ3MDA1Nl5BMl5BanBnXkFtZTgwODA3OTI4NjE@._V1_.jpg',
        'https://i.pinimg.com/originals/5d/bb/9e/5dbb9ea5d4cd89968c9ad65e6ced6096.jpg',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3, true),
            'director' => $this->faker->name(),
            'image_url' => $this->faker->randomElement($this->movie_image),
            'duration' => $this->faker->numberBetween(3, 500),
            'release_date' => $this->faker->date(),
            'genre' => $this->faker->randomElement($this->movie_genre),
        ];
    }
}
