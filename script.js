const books = [
    { title: "Harry Potter", genre: "fantasy", length: "long", age: "young" },
    { title: "De Hobbit", genre: "fantasy", length: "medium", age: "young" },
    { title: "1984", genre: "dystopia", length: "medium", age: "adult" },
    { title: "Animal Farm", genre: "dystopia", length: "short", age: "young" },
    { title: "De Alchemist", genre: "philosophy", length: "short", age: "adult" },
    { title: "Het Achterhuis", genre: "history", length: "medium", age: "adult" },
    { title: "The Hunger Games", genre: "dystopia", length: "long", age: "young" },
    { title: "Divergent", genre: "dystopia", length: "long", age: "young" },
    { title: "De Griezelbus", genre: "horror", length: "short", age: "young" },
    { title: "It", genre: "horror", length: "long", age: "adult" },
    { title: "Sherlock Holmes", genre: "crime", length: "medium", age: "adult" },
    { title: "De Da Vinci Code", genre: "crime", length: "long", age: "adult" },
    { title: "Percy Jackson", genre: "fantasy", length: "medium", age: "young" },
    { title: "Twilight", genre: "romance", length: "long", age: "young" },
    { title: "Pride and Prejudice", genre: "romance", length: "medium", age: "adult" },
    { title: "The Fault in Our Stars", genre: "romance", length: "medium", age: "young" },
    { title: "Dracula", genre: "horror", length: "medium", age: "adult" },
    { title: "The Shining", genre: "horror", length: "long", age: "adult" },
    { title: "Moby Dick", genre: "adventure", length: "long", age: "adult" },
    { title: "Robinson Crusoe", genre: "adventure", length: "medium", age: "adult" },
    { title: "Lord of the Rings", genre: "fantasy", length: "long", age: "adult" },
    { title: "De Brief voor de Koning", genre: "adventure", length: "medium", age: "young" },
    { title: "The Maze Runner", genre: "dystopia", length: "long", age: "young" },
    { title: "Het Gouden Ei", genre: "crime", length: "short", age: "adult" },
    { title: "Kruistocht in Spijkerbroek", genre: "history", length: "medium", age: "young" }
];


const questions = [
    {
        question: "Hoe lang lees je graag?",
        answers: {
            A: "Kort",
            B: "Gemiddeld",
            C: "Lang",
            D: "Maakt niet uit"
        },
        value: { length: ["short", "medium", "long"] }
    },
    {
        question: "Welk genre kies je het liefst?",
        answers: {
            A: "Fantasy",
            B: "Horror",
            C: "Romantiek",
            D: "Misdaad"
        },
        value: { genre: ["fantasy", "horror", "romance", "crime"] }
    },
    {
        question: "Voor welke leeftijd?",
        answers: {
            A: "Jongeren",
            B: "Volwassenen",
            C: "Beide",
            D: "Weet ik niet"
        },
        value: { age: ["young", "adult"] }
    },
    {
        question: "Wil je iets realistisch?",
        answers: {
            A: "Ja",
            B: "Nee",
            C: "Beetje",
            D: "Maakt niet uit"
        }
    },
    {
        question: "Hou je van spanning?",
        answers: {
            A: "Heel erg",
            B: "Een beetje",
            C: "Nee",
            D: "Soms"
        }
    },
    {
        question: "Lees je vaak?",
        answers: {
            A: "Elke dag",
            B: "Soms",
            C: "Zelden",
            D: "Nooit"
        }
    }
];


let currentQuestion = 0;
let preferences = {};

const quizDiv = document.getElementById("quiz");

function showQuestion() {
    const q = questions[currentQuestion];
    quizDiv.innerHTML = `<h2>${q.question}</h2>`;

    for (let key in q.answers) {
        const btn = document.createElement("button");
        btn.textContent = `${key}: ${q.answers[key]}`;
        btn.onclick = () => nextQuestion(key);
        quizDiv.appendChild(btn);
    }
}

function nextQuestion(answer) {
    // eenvoudige voorkeur opslaan
    if (questions[currentQuestion].value) {
        const values = Object.values(questions[currentQuestion].value)[0];
        preferences[currentQuestion] = values[Object.keys(questions[currentQuestion].answers).indexOf(answer)];
    }

    currentQuestion++;

    if (currentQuestion < questions.length) {
        showQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    const result = books.find(book =>
        (!preferences[0] || book.length === preferences[0]) &&
        (!preferences[1] || book.genre === preferences[1]) &&
        (!preferences[2] || book.age === preferences[2])
    );

    quizDiv.innerHTML = result
        ? `<h2> Aanbevolen boek:</h2><p>${result.title}</p>`
        : `<h2>Geen passend boek gevonden.</h2>`;
}

showQuestion();