<?php

// app/Http/Controllers/GalleryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showGallery()
    {
        // Ambil data video (di sini, kita bisa menggunakan model Video atau array statis)
        $videos = [
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/yiw6_JakZFc/hq720.jpg?sqp=-oaymwEXCNAFEJQDSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBsTTaj_KOZehK-GmwotNN3xFV7-g',
                'title' => 'Can YOU Fix Climate Change?',
                'description' => 'Never before in human history have we been richer, more advanced or powerful. And yet we feel overwhelmed in the face of rapid climate change.',
                'url' => 'https://youtu.be/yiw6_JakZFc?si=cfv9H_fhqdFZF2Qz',
            ],
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/2njn71TqkjA/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLCWJmAeA6vdd_KUWtS56sFougoY0A',
                'title' => 'What Earth in 2050 could look like - Shannon Odell',
                'description' => 'What could our future world look like if we continue to do nothing about climate change? Take a look at the possibilities.',
                'url' => 'https://youtu.be/2njn71TqkjA?si=cwEenODXzs4vt7Z4',
            ],
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/-D_Np-3dVBQ/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLDwLkRaaq-znIWRwH86Yg1j00H7TQ',
                'title' => 'Climate Change - We are the PROBLEM & the SOLUTION (Animated Infographic)',
                'description' => 'why we need to act on this issue, and how you as an individual can contribute to the solution.',
                'url' => 'https://youtu.be/-D_Np-3dVBQ?si=0AXL72VzDfMM2vIU',
            ],
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/GR46_ohNh9U/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLD2pb14jaEaRFt03R3v0TQd3mcxOw',
                'title' => 'Climate Scientist Answers Earth Questions From Twitter | Tech Support | WIRED',
                'description' => 'Climate scientist Dr. Peter Kalmus answers the internet burning questions about our planet',
                'url' => 'https://youtu.be/GR46_ohNh9U?si=UM57vdsJDeAUoAqJ',
            ],
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/Vl6VhCAeEfQ/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBww_Itj7F3D2OQpdOoQud1ZZle7Q',
                'title' => 'The Tipping Points of Climate Change — and Where We Stand | Johan Rockström | TED',
                'description' => 'Climate impact scholar Johan Rockström offers the most up-to-date scientific assessment of the state of the planet and explains what must be done to preserve Earths resilience to human pressure.',
                'url' => 'https://youtu.be/Vl6VhCAeEfQ?si=x6ypm3KEpKrWAJZy',
            ],
            (object)[
                'thumbnail' => 'https://i.ytimg.com/vi/jAa58N4Jlos/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLB58kRZrCSK0nZEnddbo23PCu53aA',
                'title' => 'Climate Change - A Short Film [4K]',
                'description' => 'The challenge facing our climate is the greatest existential threat of our lifetime.',
                'url' => 'https://youtu.be/jAa58N4Jlos?si=2DZ4irg4OjZAhjoR',
            ],
        ];

        // Kirim data ke view
        return view('gallery', compact('videos'));
    }
}

