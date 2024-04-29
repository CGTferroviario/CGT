function isMobile() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

const backgroundImages = {
  rojo: "url(img/rojo_sin.jpg)",
  verde: "url(img/verde_sin.jpg)",
  amarillo: "url(img/amarillo_sin.jpg)",
  naranja: "url(img/naranja_sin.jpg)",
  rojo_v: "url(img/rojo_sin_v.jpg)",
  verde_v: "url(img/verde_sin_v.jpg)",
  amarillo_v: "url(img/amarillo_sin_v.jpg)",
  naranja_v: "url(img/naranja_sin_v.jpg)",
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
    c: "Escasa",
    d: "Adecuada",
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
        "Debes estar alerta. Empiezas a estar un poco estresad@ debido al trabajo.<br>Es importante identificar los factores que te generan estrés para poder abordarlos de manera preventiva.",
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
          <p>${messageObj.consejo}
          <br>Tu puntuación es: ${score}</p>
          <br>
          <p class="${messageObj.color} fw-semibold">Este ha sido un test rápido, para más información, entra en: <br><br>
          <a href="https://www.insst.es/materias/riesgos/riesgos-psicosociales" class="boton bg-${messageObj.color}" target="_blank">Web de INSS</a>
          <br> Valoración: ${valoracion}</p>`;
  }

  const resultContainer = document.getElementById('result');
  // Asignar el color de fondo basado en la puntuación
  let backgroundImage;
  if (score < 15) {
    backgroundImage = isMobile() ? backgroundImages.rojo_v : backgroundImages.rojo;
    resultContainer.classList.add('borde-riesgo-alto');
  } else if (score < 25) {
    backgroundImage = isMobile() ? backgroundImages.naranja_v : backgroundImages.naranja;
    resultContainer.classList.add('borde-riesgo-medio');
  } else if (score < 35) {
    backgroundImage = isMobile() ? backgroundImages.amarillo_v : backgroundImages.amarillo;
    resultContainer.classList.add('borde-riesgo-bajo');
  } else {
    backgroundImage = isMobile() ? backgroundImages.verde_v : backgroundImages.verde;
    resultContainer.classList.add('borde-riesgo-cero');
  }

  // Mostrar el resultado
  resultEl.innerHTML = generateResultHTML(score);

  // Select the div with class 'bg-image' and set its background image
  const bgImageDiv = document.querySelector(".bg-image");
  bgImageDiv.style.backgroundImage = backgroundImage;
  bgImageDiv.style.backgroundSize = "cover"; // Ensure the image covers the entire div
  bgImageDiv.style.backgroundRepeat = "no-repeat"; // Prevent the image from repeating

}

// Assuming you have a div with id 'scoreDisplay' to show the score
const scoreDisplay = document.getElementById("scoreDisplay");

// Function to update the score display
function updateScoreDisplay() {
  scoreDisplay.textContent = `Puntuación: ${score}`;
}

// Call updateScoreDisplay initially to set the initial score display
updateScoreDisplay();
