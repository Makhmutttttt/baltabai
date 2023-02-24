let users = ['Isabella', 'Lucas', 'Sophia', 'Noah', 'Ava', 'Ethan', 'Emma', 'Liam', 'Olivia', 'Mason'];
let names = ['Ethan', 'Lucas', 'Charlotte', 'Logan', 'Mia', 'Emma', 'Amelia', 'Jackson', 'Harper', 'Olivia'];
let students = ['Ava', 'Mia', 'Jax', 'Zoe'];

let name__array1 = prompt("Choose an array 1  from {users, names, students} for__revers");

let ansver__array = [];

if(name__array1 == "users"){
    name__array1 = users;
}
else if(name__array1 == "names"){
    name__array1 = names;
}
else if(name__array1 == "students"){
    name__array1 = students;
}

for(let i = 0; i < name__array1.length;i++){
    ansver__array.unshift(name__array1[i].split("").reverse().join(""));
}

alert(ansver__array.join(', '));