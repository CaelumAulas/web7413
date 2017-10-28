var input = document.querySelector("#tam")

function mudaOutput(){
    var output = document.querySelector(".produto output")
    output.textContent = input.value
}

input.onchange = mudaOutput  