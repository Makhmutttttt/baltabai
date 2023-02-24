let users = ['Isabella', 'Lucas', 'Sophia', 'Noah', 'Ava', 'Ethan', 'Emma', 'Liam', 'Olivia', 'Mason'];
let names = ['Ethan', 'Lucas', 'Charlotte', 'Logan', 'Mia', 'Emma', 'Amelia', 'Jackson', 'Harper', 'Olivia'];
let students = ['Ava', 'Mia', 'Jax', 'Zoe'];
let tanos__array;

let name__array = prompt("Choose an array from {users, names, students} for tanos sorting");

let work__array;
let ansver__array = [];
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
let j = 0;
for(let i = 0; i < work__array.length;i++){
if(i % 2 == 0){
    ansver__array.push(work__array[i]);
}

}

alert(ansver__array.join(', '));
