<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/styles-welcome.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya untuk questionsContainer */
        #questionsContainer {
            max-height: 340px; /* Atur tinggi maksimum sesuai kebutuhan */
            overflow-y: auto; /* Tambahkan scroll vertikal jika konten lebih panjang dari tinggi maksimum */
        }
        .user-message {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <section>
        <div class="welcome-section">
            <h1>Hallo!<i id="message" class="header-purple">Welcome to</i></h1>
            <h2>Pusat bantuan dan dukungan info lingkungan kampus mengenai info pendaftaran</h2>
        </div>
        <div class="figure-container">
            <figure id="btn-figure">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-figure">
                    <img src="{{ asset('images/RegistChat1.png') }}" alt="RegistChatIbik">
                </button>
                <figcaption>RegistChatIbik</figcaption>
            </figure>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">RegistChatIbik</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="questionsContainer">
                    <!-- Pertanyaan akan dimuat di sini -->
                </div>
                <div class="modal-footer">
                    <input type="text" id="userInput" class="form-control" placeholder="Tulis pesan...">
                    <button type="button" class="btn btn-primary" id="sendBtn">Kirim</button>
                    <button type="button" class="btn btn-warning" id="liveChatBtn">Chat dengan Admin</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src= "https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        var typed = new Typed ('#message', {
            strings : ['RegistChatIbik'],
            typeSpeed : 100,
            backSpeed : 100,
            loop : true,
        });

        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('exampleModal');
            const questionsContainer = document.getElementById('questionsContainer');
            const userInput = document.getElementById('userInput');
            const sendBtn = document.getElementById('sendBtn');
            const liveChatBtn = document.getElementById('liveChatBtn');

            let isLiveChat = false;
            let mainQuestions = []; // Variabel untuk menyimpan daftar pertanyaan utama

            // Function untuk memuat pertanyaan dari Laravel endpoint
            function loadQuestions() {
                fetch('/questions')
                    .then(response => response.json())
                    .then(data => {
                        mainQuestions = data; // Simpan daftar pertanyaan utama
                        displayMainQuestions(); // Tampilkan pertanyaan utama
                    })
                    .catch(error => console.error('Error fetching questions:', error));
            }

            // Function untuk menampilkan pertanyaan utama
            function displayMainQuestions() {
                questionsContainer.innerHTML = `
                    <div class="bubble-container">
                        <p style="font-weight:500">Hallo! Pilih pertanyaanmu dan RegistChatIbik akan membalasnya secara live</p>
                        ${mainQuestions.map(question => `
                            <div class="question-item" data-question="${question.id}">
                                <p class="question-text">${question.question}</p>
                            </div>
                        `).join('')}
                    </div>
                `;
            }

            // Load questions from Laravel endpoint saat modal ditampilkan
            modal.addEventListener('show.bs.modal', function () {
                if (!isLiveChat) {
                    loadQuestions();
                }
            });

             // Handle question click using event delegation
             questionsContainer.addEventListener('click', function(event) {
                const target = event.target.closest('.question-item');
                if (target) {
                    const questionId = target.getAttribute('data-question');
                    console.log('Question ID clicked:', questionId); // Output log untuk memeriksa ID pertanyaan yang diklik

                    // Fetch question and children from Laravel endpoint and display
                    fetch(`/questions/${questionId}`)
                        .then(response => response.json())
                        .then(data => {
                            const question = data.question;
                            const children = data.children;

                            const userMessage = document.createElement('div');
                            userMessage.classList.add('user-message');
                            userMessage.innerHTML = `
                                <p><strong>Anda memilih:</strong></p>
                                <p><strong>${question.question}</strong></p>
                                <p>${question.answer}</p>
                            `;
                            questionsContainer.appendChild(userMessage);

                            // Tambahkan daftar pertanyaan anak jika ada
                            if (children.length > 0) {
                                const childQuestionsContainer = document.createElement('div');
                                childQuestionsContainer.classList.add('bubble-container');
                                childQuestionsContainer.style.marginTop = '20px';
                                childQuestionsContainer.innerHTML = `
                                    <p style="font-weight:500">Pilih pertanyaan selanjutnya:</p>
                                    ${children.map(child => `
                                        <div class="question-item" data-question="${child.id}">
                                            <p class="question-text">${child.question}</p>
                                        </div>
                                    `).join('')}
                                `;
                                questionsContainer.appendChild(childQuestionsContainer);

                                // Scroll ke elemen jawaban yang baru ditambahkan
                                userMessage.scrollIntoView({ behavior: 'smooth', block: 'start' });

                                // Tambahkan pertanyaan "Apakah jawaban ini membantu?" setelah child questions
                                const helpQuestionContainer = document.createElement('div');
                                helpQuestionContainer.classList.add('bubble-container');
                                helpQuestionContainer.style.marginTop = '20px';
                                helpQuestionContainer.innerHTML = `
                                    <p style="font-weight:500">Apakah ingin bertanya kembali?</p>
                                    <button id="yesButton" class="btn btn-primary">Ya</button>
                                    <button id="noButton" class="btn btn-secondary">Tidak</button>
                                `;
                                questionsContainer.appendChild(helpQuestionContainer);

                                // Add event listener for "Ya" button
                                document.getElementById('yesButton').addEventListener('click', function() {

                                    // Tampilkan kembali pertanyaan utama
                                    displayMainQuestions();
                                });

                                // Add event listener for "Tidak" button
                                document.getElementById('noButton').addEventListener('click', function() {
                                    const thanksMessage = document.createElement('div');
                                    thanksMessage.classList.add('bubble-container');
                                    thanksMessage.style.marginTop = '20px';
                                    thanksMessage.innerHTML = `
                                        <p>Terimakasih Telah Menghubungi Kami!</p>
                                    `;
                                    questionsContainer.appendChild(thanksMessage);
                                });

                            }
                        })
                        .catch(error => console.error('Error fetching question details:', error));
                }
            });

            // Handle send button click
            sendBtn.addEventListener('click', function () {
                const message = userInput.value;
                if (message.trim() !== "") {
                    const userMessage = document.createElement('div');
                    userMessage.classList.add('user-message');
                    userMessage.innerHTML = `
                        <p><strong>Anda:</strong> ${message}</p>
                    `;
                    questionsContainer.appendChild(userMessage);

                    userInput.value = "";
                    if (isLiveChat) {
                        // Kirim pesan ke admin (contoh)
                        console.log("Pesan terkirim ke admin:", message);
                    }

                    // Scroll ke posisi akhir setelah mengirim pesan
                    questionsContainer.scrollTop = questionsContainer.scrollHeight;
                }
            });

            // Handle live chat button click
            liveChatBtn.addEventListener('click', function () {
                isLiveChat = true;
                const liveChatStarted = document.createElement('div');
                liveChatStarted.classList.add('live-chat-started');
                liveChatStarted.innerHTML = `
                    <p>Live chat dengan admin telah dimulai...</p>
                `;
                questionsContainer.innerHTML = ''; // Bersihkan konten sebelum menambahkan pesan live chat
                questionsContainer.appendChild(liveChatStarted);

                userInput.placeholder = "Tulis pesan untuk admin...";
                console.log("Mode live chat diaktifkan");

                // Scroll ke posisi akhir setelah memulai live chat
                questionsContainer.scrollTop = questionsContainer.scrollHeight;
            });
        });
    </script>

</body>
</html>
