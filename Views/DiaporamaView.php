<?php
require_once '../Controllers/DiaporamaController.php';

class DiaporamaView {

    public function afficherDiapo($Diapos) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
        echo "    <title>Diaporama</title>";
        echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "    <link href='https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css' rel='stylesheet'>";
        echo "    <script>
                    let currentSlide = 0;

                    function showSlide(index) {
                        const slides = document.querySelectorAll('.slide');
                        slides.forEach((slide, i) => {
                            slide.style.display = (i === index) ? 'block' : 'none';
                        });
                    }

                    function nextSlide() {
                        const slides = document.querySelectorAll('.slide');
                        currentSlide = (currentSlide + 1) % slides.length;
                        showSlide(currentSlide);
                    }

                    document.addEventListener('DOMContentLoaded', () => {
                        showSlide(currentSlide);
                        setInterval(nextSlide, 3000); // Change every 3 seconds
                    });
                </script>";
        echo "</head>";
        echo "<body class='bg-gray-100'>";

        
        echo "<div class='w-full max-w-7xl mx-auto mb-10 relative overflow-hidden bg-white shadow-lg '>"; 

        foreach ($Diapos as $index => $Diapo) {
            echo "<div class='slide' style='display: none;'>";
            echo "    <img src='" . htmlspecialchars($Diapo['photo']) . "' alt='Slide Image' class='w-full h-80 object-cover'>";
            echo "    <div class='p-4 text-center'>";
            echo "        <h2 class='text-lg font-semibold' style='color : #F17228'>" . htmlspecialchars($Diapo['title']) . "</h2>";
            echo "    </div>";
            echo "</div>";
        }

        echo "</div>";

        echo "</body>";
        echo "</html>";
    }
}
?>
