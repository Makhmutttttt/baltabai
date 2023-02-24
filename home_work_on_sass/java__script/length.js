let users = ['Isabella', 'Lucas', 'Sophia', 'Noah', 'Ava', 'Ethan', 'Emma', 'Liam', 'Olivia', 'Mason'];
let names = ['Ethan', 'Lucas', 'Charlotte', 'Logan', 'Mia', 'Emma', 'Amelia', 'Jackson', 'Harper', 'Olivia'];
let students = ['Ava', 'Mia', 'Jax', 'Zoe'];

let ansver__array = [];
let work__array;
let name__array = prompt("Choose an array from {users, names, students} for__length__sorting");
let length__word = Number(prompt("Choose__elements__with__length..."));

switch(name__array){
    case "users":
        work__array = users;
        break;
    case "names":
        work__array = names;
        break;
    case "students":
        work__array = students;
        break;
    default:
        alert("Wrong input");
}

for(let i = 0;i < work__array.length;i++){
    if(work__array[i].length <= length__word){
        ansver__array.push(work__array[i]);
    }
}

alert(ansver__array.join(', '));