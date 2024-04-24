const backgroundImages = {
  rojo: "url(img/rojo_sin.jpg)",
  verde: "url(img/verde_sin.jpg)",
  amarillo: "url(img/amarillo_sin.jpg)",
  naranja: "url(img/naranja_sin.jpg)",
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
    document.querySelector(".quiz-container").style.display = "none";
    resultado();
  }
}

function resultado() {
  // Your existing logic for changing the background image based on the score
  document.getElementById("result").classList.remove("hidden");

  // Definir los mensajes y colores de manera centralizada
  const mensajes = [
    {
      score: 15,
      color: "riesgo-alto",
      mensaje: "GLUPS!<br>TIENES UN RIESGO ALTO",
      consejo:
        "No dudes en buscar apoyo. Habla con tu empresa para que puedan buscar una solución.",
    },
    {
      score: 25,
      color: "riesgo-medio",
      mensaje: "OOOPS!<br>ES HORA DE ACTUAR",
      consejo:
        "Toma conciencia de tu situación actual y busca identificar qué aspectos puedes cambiar. Si el estrés persiste, corre el riesgo de desequilibrar tu vida laboral y personal.",
    },
    {
      score: 35,
      color: "riesgo-bajo",
      mensaje: "UUUY!<br>CUIDADO",
      consejo:
        "Debes estar alerta. Empiezas a estar un poco estresado debido al trabajo.<br>Es importante identificar los factores que te generan estrés para poder abordarlos de manera preventiva.",
    },
    {
      score: Infinity,
      color: "riesgo-cero",
      mensaje: "WOW!<br>NO TIENES RIESGO",
      consejo:
        "No se detectan signos de estrés en absoluto. Tu equilibrio es excelente; sigue así y comparte tus estrategias de gestión con los demás. ¡Tu actitud es contagiosa!",
    },
  ];

  // Función para generar el HTML basado en la puntuación
  function generateResultHTML(score) {
    // Definir los rangos de puntuación y los mensajes de valoración
    let valoracion = 0;
    if (score < 15) {
      valoracion = "Muy malo";
    } else if (score < 25) {
      valoracion = "Malo";
    } else if (score < 35) {
      valoracion = "Regular";
    } else {
      valoracion = "Bueno";
    }
    let messageObj = mensajes.find((msg) => score < msg.score);
    return `<h2 class="${messageObj.color} titular">${messageObj.mensaje}</h2>
          <p>${messageObj.consejo} <b>No dudes en buscar apoyo.</b> Habla con tu empresa para que puedan buscar una solución.
          <br>Tu puntuación es: ${score}</p>
          <br>
          <p class="${messageObj.color} fw-semibold">Este ha sido un test rápido, para una evaluación más profunda, entra en: <br><br>
          <a href="./pdf/Encuesta-FPSICO-4.0-en-pdf.pdf" class="boton bg-${messageObj.color} inline" target="_blank">Test de INSS</a>
          <a href="./pdf/FPSICO 4.1 Manual de uso.pdf" class="boton bg-${messageObj.color} inline" target="_blank">Manual</a> <br>
          <br> Valoración: ${valoracion}</p>`;
  }

  // Asignar el color de fondo basado en la puntuación
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

  // Mostrar el resultado
  resultEl.innerHTML = generateResultHTML(score);

  // Select the div with class 'bg-image' and set its background image
  const bgImageDiv = document.querySelector(".bg-image");
  bgImageDiv.style.backgroundImage = backgroundImage;
  bgImageDiv.style.backgroundSize = "cover"; // Ensure the image covers the entire div
  bgImageDiv.style.backgroundRepeat = "no-repeat"; // Prevent the image from repeating

  // Mostrar la valoración en el contenedor de resultados
  // resultEl.innerHTML = `<h2 class="text-success mx-auto">WOW!<br>NO TIENES RIESGO</h2>
  //                         <p>No se detectan signos de estrés en absoluto. Tu equilibrio es excelente; sigue así y comparte tus estrategias de gestión con los demás. ¡Tu actitud es contagiosa!
  //                         <br>Tu puntuación es: ${score}</p>
  //                         <p>Este ha sido un test rápido, para una evaluación más profunda, entra en: <br> <button>Test de INSS</button> <br> Valoración: ${valoracion}</p>`;
}

// Assuming you have a div with id 'scoreDisplay' to show the score
const scoreDisplay = document.getElementById("scoreDisplay");

// Function to update the score display
function updateScoreDisplay() {
  scoreDisplay.textContent = `Puntuación: ${score}`;
}

// Call updateScoreDisplay initially to set the initial score display
updateScoreDisplay();
