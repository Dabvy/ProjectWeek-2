const books = [
    { title: "Harry Potter", genre: "fantasy", length: "long", age: "young" },
    { title: "De Hobbit", genre: "fantasy", length: "medium", age: "young" },
    { title: "1984", genre: "dystopia", length: "medium", age: "adult" },
    { title: "Animal Farm", genre: "dystopia", length: "short", age: "young" },
    { title: "De Alchemist", genre: "philosophy", length: "short", age: "adult" },
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
    { title: "A Court of Thorns and Roses", genre: "fantasy", length: "long", age: "young" },
    { title: "Mistborn", genre: "fantasy", length: "long", age: "adult" },
    { title: "The Name of the Wind", genre: "fantasy", length: "long", age: "adult" },
    { title: "Eragon", genre: "fantasy", length: "long", age: "young" },
    { title: "The Witcher: The Last Wish", genre: "fantasy", length: "medium", age: "adult" },
    { title: "The Chronicles of Narnia", genre: "fantasy", length: "medium", age: "young" },
    { title: "Shadow and Bone", genre: "fantasy", length: "medium", age: "young" },
    { title: "The Magicians", genre: "fantasy", length: "medium", age: "adult" },
    { title: "Good Omens", genre: "fantasy", length: "medium", age: "adult" },
    { title: "American Gods", genre: "fantasy", length: "long", age: "adult" },
    { title: "Coraline", genre: "horror", length: "short", age: "young" },
    { title: "Goosebumps: Night of the Living Dummy", genre: "horror", length: "short", age: "young" },
    { title: "The Haunting of Hill House", genre: "horror", length: "medium", age: "adult" },
    { title: "Pet Sematary", genre: "horror", length: "medium", age: "adult" },
    { title: "Bird Box", genre: "horror", length: "medium", age: "adult" },
    { title: "World War Z", genre: "horror", length: "long", age: "adult" },
    { title: "The Exorcist", genre: "horror", length: "medium", age: "adult" },
    { title: "Carrie", genre: "horror", length: "short", age: "adult" },
    { title: "Frankenstein", genre: "horror", length: "medium", age: "adult" },
    { title: "House of Leaves", genre: "horror", length: "long", age: "adult" },
    { title: "The Notebook", genre: "romance", length: "medium", age: "adult" },
    { title: "Me Before You", genre: "romance", length: "medium", age: "adult" },
    { title: "It Ends With Us", genre: "romance", length: "medium", age: "young" },
    { title: "The Time Traveler’s Wife", genre: "romance", length: "long", age: "adult" },
    { title: "Call Me By Your Name", genre: "romance", length: "short", age: "adult" },
    { title: "Love, Simon", genre: "romance", length: "medium", age: "young" },
    { title: "Outlander", genre: "romance", length: "long", age: "adult" },
    { title: "To All the Boys I’ve Loved Before", genre: "romance", length: "medium", age: "young" },
    { title: "Jane Eyre", genre: "romance", length: "long", age: "adult" },
    { title: "The Hating Game", genre: "romance", length: "medium", age: "adult" },
    { title: "The Girl with the Dragon Tattoo", genre: "crime", length: "long", age: "adult" },
    { title: "Gone Girl", genre: "crime", length: "medium", age: "adult" },
    { title: "The Silence of the Lambs", genre: "crime", length: "medium", age: "adult" },
    { title: "The Curious Incident of the Dog in the Night-Time", genre: "crime", length: "short", age: "young" },
    { title: "In the Woods", genre: "crime", length: "long", age: "adult" },
    { title: "Big Little Lies", genre: "crime", length: "medium", age: "adult" },
    { title: "The Reversal", genre: "crime", length: "medium", age: "adult" },
    { title: "The Cuckoo’s Calling", genre: "crime", length: "long", age: "adult" },
    { title: "The Hound of the Baskervilles", genre: "crime", length: "short", age: "adult" },
    { title: "The Maltese Falcon", genre: "crime", length: "medium", age: "adult" },
    { title: "Six of Crows", genre: "fantasy", length: "long", age: "young" },
    { title: "Red Queen", genre: "fantasy", length: "medium", age: "young" },
    { title: "The Dark Tower", genre: "fantasy", length: "long", age: "adult" },
    { title: "The Graveyard Book", genre: "fantasy", length: "short", age: "young" },
    { title: "The Priory of the Orange Tree", genre: "fantasy", length: "long", age: "adult" },
    { title: "The Mist", genre: "horror", length: "short", age: "adult" },
    { title: "Mexican Gothic", genre: "horror", length: "medium", age: "adult" },
    { title: "The Woman in Black", genre: "horror", length: "short", age: "adult" },
    { title: "The Cabin at the End of the World", genre: "horror", length: "medium", age: "adult" },
    { title: "Salem’s Lot", genre: "horror", length: "long", age: "adult" },
    { title: "The Sun Is Also a Star", genre: "romance", length: "medium", age: "young" },
    { title: "Eleanor & Park", genre: "romance", length: "medium", age: "young" },
    { title: "The Princess Bride", genre: "romance", length: "medium", age: "young" },
    { title: "Normal People", genre: "romance", length: "medium", age: "adult" },
    { title: "The Kiss Quotient", genre: "romance", length: "medium", age: "adult" },
    { title: "And Then There Were None", genre: "crime", length: "short", age: "adult" },
    { title: "The Da Vinci Code: Angels & Demons", genre: "crime", length: "long", age: "adult" },
    { title: "The Shadowhunter Files", genre: "crime", length: "medium", age: "young" },
    { title: "The Lincoln Lawyer", genre: "crime", length: "medium", age: "adult" },
    { title: "Sharp Objects", genre: "crime", length: "medium", age: "adult" }
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

function hideText() {
    const textElement = document.getElementById("myText");
    if (textElement) {
        textElement.style.display = "none";
    }
}