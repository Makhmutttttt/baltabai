let users = ['Isabella', 'Lucas', 'Sophia', 'Noah', 'Ava', 'Ethan', 'Emma', 'Liam', 'Olivia', 'Mason'];
let names = ['Ethan', 'Lucas', 'Charlotte', 'Logan', 'Mia', 'Emma', 'Amelia', 'Jackson', 'Harper', 'Olivia'];
let students = ['Ava', 'Mia', 'Jax', 'Zoe'];

let name__array1 = prompt("Choose an array 1  from {users, names, students} for__sorting");
let name__array2 = prompt("Choose an array 2  from {users, names, students} for__sorting");

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


if(name__array2 == "users"){
    name__array2 = users;
}
else if(name__array2 == "names"){
    name__array2 = names;
}
else if(name__array2 == "students"){
    name__array2 = students;
}

let double__array;
double__array = ansver__array.concat(name__array1, name__array2);

for(let i = 0;i < name__array1.length + name__array2.length;i++){
    if(ansver__array.includes(double__array[i]) == false){
        ansver__array.push(double__array[i]);
    }

}

alert(ansver__array.join(', '));
