//view-password
function eye() {

    var pass = document.getElementById("pass");
    var pass2 = document.getElementById("pass2");

    if (pass.type === "password") {
        pass.type = "text";
    } else {
        pass.type = "password";
    }

    if (pass2.type === "password") {
        pass2.type = "text";
    } else {
        pass2.type = "password";
    }

}
//create-new-list
function clcrelist() {
    document.getElementById("create-list").style.display = "none";
    var all = document.getElementById("all");
    all.classList.remove("filter");
}

function opcrelist() {
    document.getElementById("create-list").style.display = "block";
    var all = document.getElementById("all");
    all.classList.add("filter");

}



//selectors

const app = {
    addButton: document.getElementById("todo-add-button"),
    todoContainer: document.getElementById("todo-container"),
    inputText: document.querySelector('[name="todo"]'),
    buttonTick: document.querySelector(".todo-check")
};

app.addButton.addEventListener("click", (e) => {
    e.preventDefault();
    let todo = document.createElement("div");
    todo.classList.add("todo");
    liMaker(app.inputText.value, todo);
    buttonCheckMaker(todo);
    buttonDeleteMaker(todo);
    if (app.inputText.value === "") {
        Swal.fire({
            target: "body",
            titleText: "you have to type something",
            text: "It's look like you hadn't typed anything",
            icon: "warning",
            confirmButtonText: "Okay!"
        });
    } else {
        app.todoContainer.appendChild(todo);
    }
    app.inputText.value = "";
});

//eventlistener on enter

app.inputText.addEventListener("keyup", (e) => {
    e.preventDefault();
    let todo = document.createElement("div");
    todo.classList.add("todo");
    liMaker(app.inputText.value, todo);
    buttonCheckMaker(todo);
    buttonDeleteMaker(todo);
    if (app.inputText.value === "" && event.keyCode == 13) {
        Swal.fire({
            target: "body",
            titleText: "you have to type something",
            text: "It's look like you hadn't typed anything",
            icon: "warning",
            confirmButtonText: "Okay!"
        });
    } else if (event.keyCode == 13) {
        app.todoContainer.appendChild(todo);
        app.inputText.value = "";
    }
});

app.todoContainer.addEventListener("click", (e) => {
    let target = e.target;
    if (target.classList.contains("todo-delete")) {
        let items = target.parentElement;
        items.style.animation = "goAway 500ms ease";
        items.addEventListener("animationend", () => {
            items.remove();
        });
    }
    if (target.classList.contains("todo-check")) {
        let item = target.parentElement;
        item.classList.toggle("completed");
    }
});

function liMaker(text, e) {
    //create li
    let li = document.createElement("li");
    li.innerText = `${text}`;
    e.appendChild(li);
}

function buttonCheckMaker(e) {
    //create button-check
    let buttonCheck = document.createElement("button");
    buttonCheck.innerHTML =
        '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"\
            stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"\
            class="feather feather-check-circle">\
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>\
            <polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
    buttonCheck.classList.add("todo-check");
    e.appendChild(buttonCheck);
}

function buttonDeleteMaker(e) {
    //create button-delete
    buttonDelete = document.createElement("button");
    buttonDelete.innerHTML =
        '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"\
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"\
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">\
            <circle cx="12" cy="12" r="10"></circle>\
            <line x1="15" y1="9" x2="9" y2="15"></line>\
            <line x1="9" y1="9" x2="15" y2="15"></line></svg>';
    buttonDelete.classList.add("todo-delete");
    e.appendChild(buttonDelete);
}


//draggable-none-to-svg-images
let img = document.querySelectorAll("svg");
img.forEach((e) => {
    e.setAttribute("draggable", "false");
});