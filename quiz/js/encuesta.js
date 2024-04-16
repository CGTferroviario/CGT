const backgroundImages = {
  rojo: "url(img/rojo.jpg)",
  verde: "url(img/verde.jpg)",
  amarillo: "url(img/amarillo.jpg)",
  naranja: "url(img/naranja.jpg)",
};
const quizData = [
  // Example question structure
  {
    question: "¿Trabajas los domingos y festivos?",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 1, b: 2, c: 3, d: 4 },
  },
  {
    question:
      "¿Dispones de al menos 48 horas consecutivas de descanso en el transcurso de una semana (7 días consecutivos)?",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question:
      "¿Tu horario laboral te permite compaginar tu tiempo libre (vacaciones, días libres, horarios de entrada y salida) con los de tu familia y amistades?",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question:
      "¿Puedes marcar tu propio ritmo de trabajo a lo largo de la jornada laboral?",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question: "En general, la cantidad de trabajo que tienes es:",
    a: "Excesiva",
    b: "Elevada",
    c: "Adecuada",
    d: "Escasa",
    scores: { a: 1, b: 2, c: 3, d: 4 },
  },
  {
    question: "El trabajo que realizas, ¿te resulta complicado o difícil?",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 1, b: 2, c: 3, d: 4 },
  },
  {
    question: "El trabajo que realizas, ¿te resulta rutinario?",
    a: "No",
    b: "A veces",
    c: "Bastante",
    d: "Mucho",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question:
      "En general, ¿consideras que las tareas que realizas tienen sentido?",
    a: "Mucho",
    b: "Bastante",
    c: "Poco",
    d: "Nada",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question:
      "En general, ¿está tu trabajo reconocido y apreciado por...? El público, client@s, pasajer@s, etc.",
    a: "Siempre o casi siempre",
    b: "A menudo",
    c: "A veces",
    d: "Nunca o casi nunca",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
  {
    question:
      "Considerando los deberes y responsabilidades de tu trabajo, ¿estás satisfech@ con el salario que recibes?",
    a: "Muy satisfecho",
    b: "Satisfecho",
    c: "Insatisfecho",
    d: "Muy insatisfecho",
    scores: { a: 4, b: 3, c: 2, d: 1 },
  },
];

const quiz = document.querySelector(".quiz-body");
const answerEl = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const resultEl = document.getElementById("result");
const btnSubmit = document.getElementById("btn");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();
  const currentQuizData = quizData[currentQuiz];
  questionEl.innerText = currentQuizData.question;
  document.getElementById("a_text").innerText = currentQuizData.a;
  document.getElementById("b_text").innerText = currentQuizData.b;
  document.getElementById("c_text").innerText = currentQuizData.c;
  document.getElementById("d_text").innerText = currentQuizData.d;
}

function deselectAnswers() {
  answerEl.forEach((answerEl) => {
    answerEl.checked = false;
  });
}

function getSelected() {
  let answer;
  answerEl.forEach((answerEls) => {
    if (answerEls.checked) {
      answer = answerEls.id;
    }
  });
  return answer;
}

btnSubmit.addEventListener("click", function () {
  const answers = getSelected();
  if (answers) {
    const currentQuestion = quizData[currentQuiz];
    const selectedScore = currentQuestion.scores[answers];
    score += selectedScore;
    updateScoreDisplay(); // Update the score display
    nextQuestion();
  }
});


function nextQuestion() {
  currentQuiz++;
  if (currentQuiz < quizData.length) {
    loadQuiz();
  } else {
    resultado();
  }
}

function resultado() {
  // Check if the current question is the last one
  // if (currentQuiz >= quizData.length - 1) {
  //     // Display the score in the result container
  //     resultEl.innerHTML = `<p>Your Score is: ${score}</p>`;
  // } else {
      // Your existing logic for changing the background image based on the score
    let backgroundImage;
    if (score < 15) {
      backgroundImage = backgroundImages.rojo;
    } else if (score < 25) {
      backgroundImage = backgroundImages.naranja;
    } else if (score < 35) {
      backgroundImage = backgroundImages.amarillo;
    } else {
      backgroundImage = backgroundImages.verde;
    }
  

  // Select the div with class 'bg-image' and set its background image
  const bgImageDiv = document.querySelector(".bg-image");
  bgImageDiv.style.backgroundImage = backgroundImage;
  bgImageDiv.style.backgroundSize = "cover"; // Ensure the image covers the entire div
  bgImageDiv.style.backgroundRepeat = "no-repeat"; // Prevent the image from repeating
}

// Assuming you have a div with id 'scoreDisplay' to show the score
const scoreDisplay = document.getElementById('scoreDisplay');

// Function to update the score display
function updateScoreDisplay() {
 scoreDisplay.textContent = `Puntuación: ${score}`;
}

// Call updateScoreDisplay initially to set the initial score display
updateScoreDisplay();
