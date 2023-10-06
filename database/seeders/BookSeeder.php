<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booksData = [
            [
                "title" => "The Catcher in the Rye",
                "author" => "J.D. Salinger",
                "synopsis" => "This classic novel follows the life of Holden Caulfield, a disillusioned teenager navigating the streets of New York City. Through his distinctive voice, he explores themes of adolescence, identity, and the search for authenticity.",
                "publisher" => "Little, Brown and Company",
                "category" => "Fiction",
            ],
            [
                "title" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "synopsis" => "Set in the American South during the 1930s, this novel tells the story of Scout Finch, her brother Jem, and their father Atticus as they grapple with racism, justice, and moral growth in a small town.",
                "publisher" => "HarperCollins",
                "category" => "Humor",
            ],
            [
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "synopsis" => "Jay Gatsby's extravagant parties and mysterious past captivate Nick Carraway, his neighbor and narrator of this novel. A story of unrequited love, ambition, and the American Dream in the Roaring Twenties.",
                "publisher" => "Scribner",
                "category" => "Autobiography",
            ],
            [
                "title" => "1984",
                "author" => "George Orwell",
                "synopsis" => "In a dystopian society under the watchful eye of Big Brother, Winston Smith begins to rebel against a totalitarian regime that controls every aspect of life. A thought-provoking exploration of surveillance and thought control.",
                "publisher" => "Signet Classic",
                "category" => "Horror",
            ],
            [
                "title" => "The Hobbit",
                "author" => "J.R.R. Tolkien",
                "synopsis" => "Bilbo Baggins, a hobbit, is thrust into a grand adventure when he joins a group of dwarves on a quest to reclaim their homeland from the dragon Smaug. This epic fantasy tale is set in Tolkien's Middle-earth.",
                "publisher" => "Houghton Mifflin",
                "category" => "Fantasy",
            ],
            [
                "title" => "The Da Vinci Code",
                "author" => "Dan Brown",
                "synopsis" => "Harvard symbologist Robert Langdon becomes embroiled in a complex and thrilling mystery involving art, religion, and secret societies. A gripping thriller that challenges conventional beliefs.",
                "publisher" => "Doubleday",
                "category" => "Thriller",
            ],
            [
                "title" => "Pride and Prejudice",
                "author" => "Jane Austen",
                "synopsis" => "In this timeless classic, Elizabeth Bennet and Mr. Darcy navigate social expectations, misunderstandings, and their own pride and prejudice on their journey to love in Regency-era England.",
                "publisher" => "Penguin Classics",
                "category" => "Romance",
            ],
            [
                "title" => "The Hunger Games",
                "author" => "Suzanne Collins",
                "synopsis" => "Katniss Everdeen volunteers to take her sister's place in a televised fight-to-the-death competition called the Hunger Games. A gripping tale of survival, rebellion, and sacrifice in a dystopian future.",
                "publisher" => "Scholastic Press",
                "category" => "Action",
            ],
            [
                "title" => "The Road",
                "author" => "Cormac McCarthy",
                "synopsis" => "In a post-apocalyptic world, a father and son embark on a perilous journey to find safety and civilization. This haunting and emotionally charged novel explores the bonds of family in the face of despair.",
                "publisher" => "Vintage",
                "category" => "Mystery",
            ],
            [
                "title" => "The Girl with the Dragon Tattoo",
                "author" => "Stieg Larsson",
                "synopsis" => "Investigative journalist Mikael Blomkvist and the enigmatic hacker Lisbeth Salander team up to solve a decades-old mystery involving a wealthy family. A gripping Scandinavian crime thriller.",
                "publisher" => "Vintage Crime/Black Lizard",
                "category" => "Mystery",
            ],
        ];

        foreach ($booksData as $bookData) {
            // Find the category by name
            $category = Category::where("category_name", $bookData["category"])->first();

            // Create a new book using the provided data
            Book::create([
                "uuid" => Str::uuid(),
                "category_uuid" => $category->uuid,
                "title" => $bookData["title"],
                "author" => $bookData["author"],
                "synopsis" => $bookData["synopsis"],
                "publisher" => $bookData["publisher"],
            ]);
        }

        Book::factory(10)->create();
    }
}
