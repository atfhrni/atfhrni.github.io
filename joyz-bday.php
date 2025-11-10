<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>💙 Happy Birthday Prandika Noviandi Rhamadan 💙</title>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #a8e0ff, #dffcff);
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  /* Efek hati */
  .heart {
    position: absolute;
    bottom: 0;
    color: rgba(255, 182, 193, 0.7);
    font-size: 20px;
    animation: floatUp 6s linear infinite;
    opacity: 0;
  }

  @keyframes floatUp {
    0% { transform: translateY(0) scale(0.8); opacity: 0; }
    20% { opacity: 1; }
    100% { transform: translateY(-100vh) scale(1.2); opacity: 0; }
  }

  .card {
    background: white;
    border-radius: 25px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    padding: 50px 70px;
    text-align: center;
    max-width: 750px;
    animation: fadeIn 1.5s ease;
    z-index: 2;
  }

  h1 {
    color: #2196f3;
    font-size: 2rem;
    margin-bottom: 15px;
    animation: popUp 1.2s ease;
  }

  p {
    color: #333;
    line-height: 1.7;
    font-size: 1rem;
    margin: 10px 0;
  }

  .love {
    font-weight: bold;
    color: #2196f3;
    font-size: 1.6rem;
    animation: pulse 1.5s infinite;
  }

  .footer {
    margin-top: 25px;
    font-style: italic;
    color: #2b5fab;
  }

  button {
    margin-top: 20px;
    background-color: #2196f3;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 30px;
    cursor: pointer;
    font-size: 1rem;
    transition: transform 0.2s ease, background-color 0.3s;
  }

  button:hover {
    background-color: #42a5f5;
    transform: scale(1.1);
  }

  @keyframes fadeIn {
    from {opacity: 0; transform: translateY(30px);}
    to {opacity: 1; transform: translateY(0);}
  }

  @keyframes popUp {
    0% {transform: scale(0);}
    100% {transform: scale(1);}
  }

  @keyframes pulse {
    0% {transform: scale(1);}
    50% {transform: scale(1.1);}
    100% {transform: scale(1);}
  }

  /* Musik control */
  audio {
    margin-top: 20px;
    width: 80%;
    outline: none;
  }
</style>
</head>

<body>
  <div class="card">
    <h1>🎂 Selamat Ulang Tahun Sayangku 🎂</h1>
    <h1>11 November 2025</h1>
    <p>Untuk pacarku, Prandika Noviandi Rhamadan 🫶🏼</p>
    <p>Di umur yang udah menginjak 22 tahun ini, aku berharap kamu selalu dikelilingi hal-hal baik, kebahagiaan, kesehatan, dan semua impianmu jadi nyata. Semoga setiap langkah mu kedepannya selalu diberkahi dan dipermudah. 💫</p>
    <p>Semangat menjalani hari sebagai mahasiswa akhir, karena selain mumet ngerjain TA, kamu juga bakalan mumet ngadepin mood aku yang ngga bisa diprediksi wkwkwk.  😆</p>
    <p>Semoga suka yaa hadiah kecil dari aku... 💝</p>
    <div class="love">I Love You 💙</div>

    <button onclick="showConfetti()">🎉 klik aku 🎉</button>

    <audio controls autoplay loop>
      <source src="wave to earth - love.mp3" type="audio/mpeg">
    </audio>

    <div class="footer">~ Dari pacarmu yang paling imup, lucu, dan menggemaskan 😙 ~</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
  <script>
    // Confetti
    function showConfetti() {
      confetti({
        particleCount: 150,
        spread: 100,
        origin: { y: 0.6 },
      });
    }

    // Efek hati pelan-pelan naik
    function createHeart() {
      const heart = document.createElement('div');
      heart.classList.add('heart');
      heart.innerHTML = '💙';
      heart.style.left = Math.random() * 100 + 'vw';
      heart.style.animationDuration = (5 + Math.random() * 3) + 's';
      document.body.appendChild(heart);
      setTimeout(() => {
        heart.remove();
      }, 8000);
    }

    setInterval(createHeart, 800);
  </script>
</body>
</html>